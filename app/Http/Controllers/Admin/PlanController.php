<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function allUserPlans() {
        return view('pages/plans', ['data' => Plan::all()]);
    }
    public function showOnePlan($id) {
        $plan = new Plan();
        return view('pages/table', ['data' => $plan->find($id)]);
    }

    public function updatePlan($id, Request $req) {
        $plan = Plan::find($id);
        $plan->name = $req->input('plan_name');
        $plan->description = $req->input('plan_description');
        $plan->start_date = $req->input('plan_date_start');
        $plan->end_date = $req->input('plan_date_end');

        $plan->save();
        return redirect()->route('allUserPlans')->with('success', 'Plan изменен');
    }

    public function deleteOnePlan($id) {
        Plan::find($id)->delete();
        return redirect()->route('allUserPlans')->with('success', 'Plan удален');
    }
}
