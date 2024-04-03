<?php

namespace App\Http\Controllers;

use App\Models\Activity as ModelsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Activity extends Controller
{


    public function index(Request $request)
    {

        $activity = ModelsActivity::latest()->paginate(20);


        if ($request->ajax()) {

            $view = view('activity.load', compact('activity'))->render();
            return Response::json(['view' => $view, 'nextPageUrl' => $activity->nextPageUrl()]);
        }

        return view('activity.index', compact('activity'));
    }
}
