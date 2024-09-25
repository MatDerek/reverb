<?php

use App\Events\SampleEvent;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // SampleEvent::dispatch(User::first());
    return view('welcome');
});

Route::get('/test-broadcast', function () {
    event(new SampleEvent(User::first()));
});

