<?php

namespace events\Http\Controllers;

use Illuminate\Http\Request;
use events\Approve;

class ApproveCtrl extends Controller
{
    public function viewApproves() {
        $approves = Approve::all();

        return view('admin.approve')->with('approves', $approves);
    }
}
