<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Job;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function viewJobs() 
    {
    	$jobs = Post::all();
    	return view ('jobs/viewJob',compact('jobs'));
    }

    public function createJobsView() {
    	return view ('jobs/postJob');
    }

    public function createJobs(Request $request)
    {
    	// $validator = Validator::make($request->all(), [
     //        'pname' => 'required|string|max:255',
     //        'diagnose' => 'required|string|max:255',
     //        'units' => 'required|integer|min:0',
     //        'bloodType' => 'required',
     //        'bloodCategory' => 'required'
     //        ]);

    	$message = $request->input('message');
    	$title = $request->input('title');
    	$date_needed = Carbon::parse($request->input('date_needed'));
    	$jobs = $request->input('jobs');

    	$post = Post::create([
            'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
            'title' => $title,
    		'message' => $message,
    		'date_needed' => $date_needed,
    		'jobs' => $jobs
    	]);
        
        return redirect('/jobs/view');    
    }
}
