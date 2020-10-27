<?php

namespace App\Http\Controllers;

use App\consulting;
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
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consulting  $consulting
     * @return \Illuminate\Http\Response
     */
    public function show(consulting $consulting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consulting  $consulting
     * @return \Illuminate\Http\Response
     */
    public function edit(consulting $consulting)
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
    public function update(Request $request, consulting $consulting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consulting  $consulting
     * @return \Illuminate\Http\Response
     */
    public function destroy(consulting $consulting)
    {
        //
    }
}
