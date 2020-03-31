<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AccountSettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account_settings');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id user_Id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_data = [];

        if (!empty($request->name)) {
            $user_data['name'] = $request->name;
        }

        if (!empty($request->surname)) {
            $user_data['surname'] = $request->surname;
        }

        if (!empty($request->middlename)) {
            $user_data['middlename'] = $request->middlename;
        }

        if (!empty($request->email)) {
            $user_data['email'] = $request->email;
        }

        if (!empty($request->password) && !empty($request->repassword)) {
            if ($request->password == $request->repassword)
            $user_data['password'] = Hash::make($request->password);
        }

        if (!empty($request->image)) {
            $user_data['avatar'] = $request->image->store('avatars', 'public');
        }

        if (!empty($user_data)) {
            $user = new User();
            $user
                ->where('id', $id)
                ->update($user_data);
        }

        return redirect()->back();
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
