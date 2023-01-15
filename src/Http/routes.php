<?php

use Liumenggit\GenerateKey\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('generate-key', Controllers\GenerateKeyController::class.'@index');
