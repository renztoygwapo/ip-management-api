<?php
namespace Domain\IP\Actions;

use Exception;
use App\Models\IpAddress;
use Domain\IP\Data\IpData;
use Illuminate\Support\Facades\Auth;


class CreateNewIpAction {

    public function __invoke(IpData $data)
    {
        try{
            
            $item = IpAddress::firstOrCreate([
                'label' => $data->label,
                'ip' => $data->ip
            ]);

            // audit trail
            activity()
            ->causedBy(Auth::user())
            ->performedOn($item)
            ->event('create')
            ->log('The user was create new ip');

            return IpData::from($item);
        } catch (Exception $e) {
            throw $e;
        }
    }
}