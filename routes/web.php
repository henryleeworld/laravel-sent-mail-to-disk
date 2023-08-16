<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::mailPreview();
Route::get('send-mail', function () {
    $details = [
        'title' => __('President Tsai to Meet With US SPeaker of the House McCarthy and Deliver Public Speech'),
        'body'  => __('President Tsai Ing-wen is set to visit Central American allies Guatemala and Belize on March 29 for 10 days, during which she will stop over in New York and Los Angeles in the United States, expecting to meet with Speaker of the House Kevin McCarthy and deliver a public speech. With respect to this, China is strongly opposed to any form of official exchange between the United States and Taiwan and further demanded that the U.S. complies with the one-China policy and fulfills its promise to not support Taiwan independence.')
    ];
    \Mail::to('receiver@gmail.com')->send(new \App\Mail\Mail($details));
    dd(__('The mail has been sent successfully.'));
});
