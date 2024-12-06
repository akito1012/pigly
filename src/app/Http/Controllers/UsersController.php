<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Register1Request;
use App\Http\Requests\Register2Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\WeightTarget;
use App\Models\WeightLog;

class UsersController extends Controller
{
    public function login(LoginRequest $request)
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

    public function registerStep1(Register1Request $request)
    {
        $user = $request->all();
        User::create($user);
        
        return view('members/initial_weight');
    }

    public function register2()
    {
        return view('members/initial_weight');
    }
    public function registerStep2(Register2Request $request)
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
