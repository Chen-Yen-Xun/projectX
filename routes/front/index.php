<?php

use App\Http\Controllers\Front\LogoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [LogoController::class, "logo"]);