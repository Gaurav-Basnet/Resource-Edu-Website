<?php

use App\Models\Application;
use App\Models\Appointment;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnArgument;

Route::middleware('auth:admin-api')->group(function () {

    
Route::get('/message', function () {
    $messages = Message::all();  
    return response()->json($messages);
});

Route::get('/appointment', function () {
    $appointment = Appointment::all();  
    return response()->json($appointment);
});

Route::get('/apply', function () {
    $application = Application::all();  
    return response()->json($application);
});



});

