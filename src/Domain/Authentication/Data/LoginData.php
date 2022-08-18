<?php
namespace Domain\Authentication\Data;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Password;


class LoginData extends Data
{
    // #[Email]
    public string $email;
    // #[Password(min: 8, letters: true, mixedCase: true, numbers: false, symbols: false, uncompromised: true, uncompromisedThreshold: 0)]
    public string $password;
}