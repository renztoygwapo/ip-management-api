<?php

namespace Domain\Authentication\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Domain\Registration\Data\AgentData;
use Domain\Authentication\Data\LoginData;
use Illuminate\Validation\ValidationException;

class LoginAction
{
    public function __invoke(LoginData $data)
    {
        try {
        $user =  User::where('email', $data->email)
                ->first();
        if (! $user || ! Hash::check($data->password, $user->password)) {
            throw ValidationException::withMessages([
                'error' => ['The provided credentials are incorrect.'],
            ]);
        }

        // audit trail
        activity()
        ->performedOn($user)
        ->event('login')
        ->log('new user login ' .$user->email);


        return $this->responseWithToken($user, ['message' => 'User authenticated']);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * Create response with token
     *
     * @param App\Models\User $user
     * @param array $data
     * @param string status
     * @return \Illuminate\Http\Response
     */
    private function responseWithToken(User $user, $data, $status = 200)
    {
        try {
            // create token
            $token = $user->createToken('Personal Access Token');

            // merge data and generated token
            return response()->json(array_merge(
                (array) $data,
                [
                    'user' => $user,
                    'access_token'  => $token->plainTextToken,
                    'token_type'    => 'Bearer',
                    'expires_at'    => $token->accessToken->expires_at
                ]
            ), $status);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}