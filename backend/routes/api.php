<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

Route::middleware('api')->group(function () {
    Route::get('/api/get-issues', [IssueController::class, 'getIssues']);
});