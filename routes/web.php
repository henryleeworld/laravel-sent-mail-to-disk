<?php

use Illuminate\Support\Facades\Route;

Route::mailPreview();
Route::get('send-mail', function () {
    $details = [
        'title' => __('Astronomers spot new tiny moons around Neptune and Uranus'),
        'body'  => __('Astronomers have found three previously unknown moons in our solar system — two additional moons circling Neptune and one around Uranus. The latest tally puts Neptune at 16 known moons and Uranus at 28.')
    ];
    \Mail::to('receiver@gmail.com')->send(new \App\Mail\Mail($details));
    dd(__('The mail has been sent successfully.'));
});
