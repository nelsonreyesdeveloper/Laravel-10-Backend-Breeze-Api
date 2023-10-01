<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {

    /* Comprobar si el email esta verificado */
    if ($request->user()->hasVerifiedEmail()) {
        return $request->user();
    } else {
        /* No quiero retornar json quiero retornar error para la consola javascript */

        return abort(409, '');
    }
});
