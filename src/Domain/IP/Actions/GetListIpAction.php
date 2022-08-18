<?php
namespace Domain\IP\Actions;

use App\Models\IpAddress;
use Spatie\Activitylog\Models\Activity;

class GetListIpAction {
    public function __invoke()
    {
        return IpAddress::all();
    }
}