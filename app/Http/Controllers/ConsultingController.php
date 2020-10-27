<?php

namespace App\Http\Controllers;

use App\Consulting;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Consulting $consulting, Request $request)
    {
     
        Consulting::create([
            'fullname' => $request->get('fullname'),
            'instagram' => $request->get('instagram'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'site' => $request->get('site'),
            'activity' => json_encode($request->get('activity')),
            'services' => json_encode($request->get('services')),
            'about_you' => $request->get('about_you'),
            'about_work' => $request->get('about_work'),
            'branded_before' => $request->get('branded_before'),
            'branded_before_detail' => $request->get('branded_before_detail'),
            'fake_follower' => $request->get('fake_follower'),
            'count_follower' => $request->get('count_follower'),
            'conscience' => $request->get('conscience'),
            'expectation' => $request->get('expectation')
        ]);
        return view('consulting_alert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consulting  $consulting
     * @return \Illuminate\Http\Response
     */
    public function show(Consulting $consulting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consulting  $consulting
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulting $consulting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consulting  $consulting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulting $consulting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consulting  $consulting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulting $consulting)
    {
        //
    }
}
