<?php

namespace App\Http\Controllers;

use Domain\IP\Data\IpData;
use Illuminate\Http\Request;
use Domain\IP\Actions\CreateNewIpAction;
use Domain\IP\Actions\GetListIpAction;
use Domain\IP\Actions\UpdateIpAction;
use Domain\IP\Data\Request\UpdateIpRequest;

class IpAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return resolve(GetListIpAction::class)();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IpData $data)
    {
        return resolve(CreateNewIpAction::class)($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIpRequest $data, $id)
    {
        return resolve(UpdateIpAction::class)($data, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
