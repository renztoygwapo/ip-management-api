<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Log\Actions\GetActivityLogAction;

class AuditTrailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return resolve(GetActivityLogAction::class)();
    }
}
