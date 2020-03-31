<?php

namespace App\Http\Controllers;

use App\AbiturientInfo;
use Illuminate\Http\Request;

class AbiturientInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('abiturient_info');
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
     * @param  \App\AbiturientInfo  $abiturientInfo
     * @return \Illuminate\Http\Response
     */
    public function show(AbiturientInfo $abiturientInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AbiturientInfo  $abiturientInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(AbiturientInfo $abiturientInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AbiturientInfo  $abiturientInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbiturientInfo $abiturientInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AbiturientInfo  $abiturientInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbiturientInfo $abiturientInfo)
    {
        //
    }
}
