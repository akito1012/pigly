<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Requests\Register1Request;
use App\Http\Requests\Register2Request;
use App\Http\Requests\LoginRequest;
=======
>>>>>>> 5892bd1aa6abae8dc313f71a32aef03821ba2dd1
use App\Models\User;
use App\Models\WeightTarget;
use App\Models\WeightLog;

class UsersController extends Controller
{
<<<<<<< HEAD
    public function login(LoginRequest $request)
=======
    public function login()
>>>>>>> 5892bd1aa6abae8dc313f71a32aef03821ba2dd1
    {
        return view('members/user_login');
    }

    public function logout()
    {
        return view('members/user_login');
    }

    public function register()
    {
        return view('members/user_register');
    }

<<<<<<< HEAD
    public function registerStep1(Register1Request $request)
=======
    public function registerStep1(Request $request)
>>>>>>> 5892bd1aa6abae8dc313f71a32aef03821ba2dd1
    {
        $user = $request->all();
        User::create($user);
        
        return view('members/initial_weight');
    }

    public function register2()
    {
        return view('members/initial_weight');
    }
<<<<<<< HEAD
    public function registerStep2(Register2Request $request)
=======
    public function registerStep2(Request $request)
>>>>>>> 5892bd1aa6abae8dc313f71a32aef03821ba2dd1
    {
        $weightTarget = [
            'user_id' => $request->id,
            'target_weight' => $request->target_weight
        ];
        WeightTarget::create($weightTarget);
        $weightLog = [
            'user_id' => $request->id,
            'weight' => $request->weight
        ];
        WeightLog::create($weightLog);

        return view('management');
    }
}
