<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
    Models\Job
};
use DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::take(4)->get();
        $job_count = Job::count();
        // $jobs = DB::table('job')->paginate(10,['*'],'job-list');
        return view('front.job.list', compact('jobs','job_count'));
    }

    public function getJob(Request $req) {
        $jobs = Job::skip($req->offset)->take(4)->get();
        return $jobs->toArray();
    }
}
