<?php
namespace Domain\IP\Actions;

use Exception;
use App\Models\IpAddress;
use Domain\IP\Data\IpData;


class CreateNewIpAction {

    public function __invoke(IpData $data)
    {
        try{
            return IpAddress::firstOrCreate([
                'label' => $data->label,
                'ip' => $data->ip
            ]);
        } catch (Exception $e) {
            throw $e;
        }
    }
}