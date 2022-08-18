<?php
namespace Domain\IP\Actions;

use Exception;
use App\Models\IpAddress;
use Domain\IP\Data\IpData;
use Domain\IP\Data\Request\UpdateIpRequest;


class UpdateIpAction {

    public function __invoke(UpdateIpRequest $data, int $id)
    {
        try {
        $item = IpAddress::findOrFail($id);
        $item->label = $data->label;
        $item->save();

        return $item;
        
        } catch (Exception $e) {
            throw $e;
        }
    }
}