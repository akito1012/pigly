<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Http\Requests\CreateRequest;


class WeightsController extends Controller
{
    public function index(Request $request)
    {
        $weight_logs = $request->all();

        return view('management', compact('weight_logs'));
    }

    public function modal()
    {
        return view('modal');
    }

    public function create()
    {
        return view('create');
    }

    public function weight_logsCreate(CreateRequest $request)
    {
            $weight_logs = $request->all();
            Weight::create($weight_logs);

            return redirect('members', compact('weight_logs'));

    }

    public function change(Request $request)
    {
        $weightLogld = WeightLog::find($request->id);

        return view('change', ['form' => $weightLogld]);
    }

    public function update(Request $request)
    {
        $form = $request->only('target_weight');
        unset($form['_token']);
        WeightLog::find($request->id)->update($form);

        return redirect('members');
    }

}
