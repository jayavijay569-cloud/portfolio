<?php

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/intern/dashboard', function () {
        return view('intern.dashboard');
    });
});
