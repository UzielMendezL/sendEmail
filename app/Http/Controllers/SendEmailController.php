<?php

namespace App\Http\Controllers;

use App\Models\SendEmail;
use Illuminate\Http\Request;
use App\Mail\EmergencyCallReceived;
use Illuminate\Support\Facades\Mail;
class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home');
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
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function show(SendEmail $sendEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(SendEmail $sendEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendEmail $sendEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendEmail $sendEmail)
    {
        //
    }
}
