<?php

use Illuminate\Support\Facades\Route;

Route::get  ('setLang/{locale}',        'Controller@setLang');
Route::get  ('show-page/{pageName}',    'Controller@showPage');


