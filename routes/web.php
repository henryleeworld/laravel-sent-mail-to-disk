<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('send-mail', function () {
    $details = [
        'title' => '520 新局》就職中華民國第 15 任總統',
        'body' => '蔡英文總統、副總統賴清德 20 日上午 9 時宣誓就職，正式就任第 15 任總統暨副總統。蔡英文總統隨後發表就職演說，提到四大面向，超前部署國家發展、立法院將成立修憲委員會，讓憲政制度與時俱進，兩岸方面則重申「和平、對等、民主、對話」原則，強調絕不接受「一國兩制」矮化台灣、破壞現狀的做法。'
    ];
    \Mail::to('receiver@gmail.com')->send(new \App\Mail\Mail($details));
    dd("電子郵件已發送！");
});
