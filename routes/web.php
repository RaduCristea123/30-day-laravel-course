<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(10);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view("jobs.create");
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view("jobs.edit", [
        'job' => $job
    ]);
});



Route::post('/jobs', function (){
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'currency' => request('currency'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::post('/jobs/{job}/', function (Job $job){
    $job->title = request('title');
    $job->salary = request('salary');
    $job->currency = request('currency');
    $job->save();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cashier', function () {
    return view('cashier');
});

Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);

});




