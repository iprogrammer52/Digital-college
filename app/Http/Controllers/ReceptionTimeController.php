<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReceptionTime;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Events\Notify;
use App\ReceptionDate;

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
        $receptionDate = ReceptionDate::all();

        return view('reception_time', ['receptionDate' => $receptionDate]);
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

    public function addReceptionTime(Request $request)
    {
        $receptionTimeData = new ReceptionTime();

        $receptionTimeData
            ->create([
                'time' => $request->time,
                'reception_date_id' => $request->eception_date_id,
                'status'=> 'on',
                'free' => true,
                'created_at'=>date('Y:m:d'),
            ])
            ->save();

        // event(new Notify());

        return true;
    }

    // public function deleteReceptionTime($id)
    // {
    //     $receptionTime = new ReceptionTime();
    //     $receptionTime
    //         ->where('id', '=', $id)
    //         ->delete();
    //     return true;
    // }
}
