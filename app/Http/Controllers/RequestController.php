<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\application;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function new(){
        return view('request.new');
    }

    public function post(Request $req){
        $new = new application();
        $new->batch_number = 1..rand(1,1000);
        $new->applicationtitle = $req->applicationtitle;
        $new->request_text = $req->request_text;
        $new->costcode = $req->costcode;
        $new->authorizedby = $req->authorizedby;
        $new->acceptedby = $req->acceptedby;
        $new->daterequest = $req->daterequest;
        $new->dateexpected = $req->dateexpected;
        $new->status = "Request";
        $new->requester_id = Auth::user()->id;
        $new->save();

        return redirect()->route('request.view');
    }

    public function view(){
        $application = application::OrderBy('id', 'desc')->get();
        return view('request.view', ['application'=>$application]);
    }

    public function test(){
        return view('test');
    }

    public function test_regist(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->division = $request->division;
        $user->department = $request->department;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function ajax_view_request(Request $request){
        $application = DB::table('requests')->where('requests.id', $request->id)->join('users', 'requests.requester_id', '=', 'users.id')->get();
        return json_encode($application);
    }
}
