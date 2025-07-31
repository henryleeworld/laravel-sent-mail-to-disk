<?php

use Illuminate\Support\Facades\Route;

Route::mailPreview();
Route::get('send-mail', function () {
    $details = [
        'title' => __('Argentine town battles a parrot invasion'),
        'body'  => __('Thousands of parrots have invaded, driven by deforestation in the surrounding hills, according to biologists. They bite on the town\'s electric cables, causing outages, and are driving residents around the bend with their incessant screeching and deposits everywhere of poo.')
    ];
    \Mail::to('receiver@gmail.com')->send(new \App\Mail\Mail($details));
    dd(__('The mail has been sent successfully.'));
});
