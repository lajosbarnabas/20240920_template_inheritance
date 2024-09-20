<?php

use App\Models\Colleague;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/colleagues', function (){

    for($i= 0; $i < 10; $i++){
        $c = new Colleague();
        $c->name = fake()->name();
        $c->email = fake()->email();
        $c->phone = fake()->phoneNumber();
        Colleague::addColleague($c);
    }

    return view('colleagues', ['colleagues' => Colleague::all()]);
});
