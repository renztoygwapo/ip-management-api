<?php
namespace Domain\Log\Actions;

use Spatie\Activitylog\Models\Activity;

class GetActivityLogAction {
    public function __invoke()
    {
        return Activity::all();
    }
}