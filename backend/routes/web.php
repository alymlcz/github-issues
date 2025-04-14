<?php

require base_path('routes/api.php');

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IssueController;

Route::get('/{any}', function () {
    return file_get_contents(public_path('react/index.html'));
})->where('any', '.*');

Route::get('/', function () {
    return view('welcome');
});
