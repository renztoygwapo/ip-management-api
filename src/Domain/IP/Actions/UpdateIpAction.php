<?php
namespace Domain\IP\Actions;

use Exception;
use App\Models\IpAddress;
use Domain\IP\Data\IpData;
use Domain\IP\Data\Request\UpdateIpRequest;
use Illuminate\Support\Facades\Auth;

class UpdateIpAction {

    public function __invoke(UpdateIpRequest $data, int $id)
    {
        try {
        $item = IpAddress::findOrFail($id);
        $item->label = $data->label;
        $item->save();

        // audit trail
        activity()
        ->causedBy(Auth::user())
        ->performedOn($item)
        ->event('update')
        ->log('The user was update the ip from ' .$item->label. ' to ' .$data->label);

        return IpData::from($item);

        } catch (Exception $e) {
            throw $e;
        }
    }
}