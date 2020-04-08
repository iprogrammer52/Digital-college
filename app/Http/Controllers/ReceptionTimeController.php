<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReceptionTime;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
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

    public function changeStatus(Request $request)
    {
        Validator::make($request->all(), [
            'status' => [
                'required',
                Rule::in(['on','off']),
            ],
            'id' => 'numeric'
        ])->validate();

        $receptionTimes = new ReceptionTime();

        $renewed = $receptionTimes
            -> where('id', $request->id)
            -> update(['status' => $request->status]);

            return $renewed;
    }
}
