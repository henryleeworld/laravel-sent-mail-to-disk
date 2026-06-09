<?php

use Illuminate\Support\Facades\Route;

Route::mailPreview();
Route::get('send-mail', function () {
    $details = [
        'title' => __('Oscar contender \'Hamnet\' boosts tourism at Shakespeare heritage sites'),
        'body'  => __('Richard Paterson of the Shakespeare Birthplace Trust said visitor numbers have risen 15-20% since the film\'s January release, and he expects this trend to continue.')
    ];
    \Mail::to('receiver@gmail.com')->send(new \App\Mail\Mail($details));
    dd(__('The mail has been sent successfully.'));
});
