<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Flash;
use Response;

class ScheduleController extends Controller {
    public $successStatus = 200;

    public function getAllSchedules(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $sched = schedule::all();

            return response()->json($sched, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }        
    }  
    
    public function getSchedule(Request $request) {
        $id = $request['sid']; // pid = Sched id
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $sched = schedule::where('id', $id)->first();

            if ($sched != null) {
                return response()->json($sched, $this->successStatus);
            } else {
                return response()->json(['response' => 'Schedule not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }

    public function searchSchedule(Request $request) {
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $sched = schedule::where('CebuPacific', 'LIKE', '%' . $params . '%')
                ->orWhere('time', 'LIKE', '%' . $params . '%')
                ->get();
            // SELECT * FROM schedule WHERE description LIKE '%params%' OR title LIKE '%params%'
            if ($sched != null) {
                return response()->json($sched, $this->successStatus);
            } else {
                return response()->json(['response' => 'Schedule not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }
}