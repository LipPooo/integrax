<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/leadership', function () {
    return view('leadership');
});

Route::get('/achievement', function () {
    return view('achievement');
});

// Announcement detail — replace closure body with AnnouncementController@show + DB query when ready
Route::get('/announcements/{slug}', function (string $slug) {
    $announcements = collect(View::getShared()['announcements'] ?? []);
    $announcement  = $announcements->firstWhere('id', $slug);

    abort_if(! $announcement, 404);

    return view('announcements.show', compact('announcement'));
})->name('announcements.show');
