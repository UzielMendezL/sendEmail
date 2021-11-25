<?php

namespace App\Http\Controllers;

use App\Models\EmailSuccess;
use Illuminate\Http\Request;
use App\Mail\EmergencyCallReceived;
use Illuminate\Support\Facades\Mail;

class EmailSuccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         Mail::to('jobs@talentscode.com')->send(new EmergencyCallReceived);
        return view('/emailSend');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailSuccess  $emailSuccess
     * @return \Illuminate\Http\Response
     */
    public function show(EmailSuccess $emailSuccess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailSuccess  $emailSuccess
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailSuccess $emailSuccess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmailSuccess  $emailSuccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailSuccess $emailSuccess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailSuccess  $emailSuccess
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailSuccess $emailSuccess)
    {
        //
    }
}
