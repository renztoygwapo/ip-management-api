<?php
namespace Domain\IP\Actions;

use App\Models\IpAddress;

class ShowIpAction {
    public function __invoke(int $id)
    {
        return IpAddress::findOrFail($id);
    }
}