<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReceptionTime;

class ReceptionTimeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('root');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receptionTimes = new ReceptionTime();

        return view('reception_time', ['receptionTimes' => $receptionTimes->get()]);
    }

    public function changeStatus($data)
    {
        $receptionTimes = new ReceptionTime();
        $receptionTimes
            ->where('id', 1)
            ->update($data);

    }
}
