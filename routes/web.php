<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    $langs = array();

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        // break up string into pieces (languages and q factors)
        preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);

        if (count($lang_parse[1])) {
            // create a list like "en" => 0.8
            $langs = array_combine($lang_parse[1], $lang_parse[4]);

            // set default to 1 for any without q factor
            foreach ($langs as $lang => $val) {
                if ($val === '') $langs[$lang] = 1;
            }

            // sort list based on value
            arsort($langs, SORT_NUMERIC);
        }
    }

    foreach ($langs as $lang => $val) {
        if (strpos($lang, 'fr') === 0) {
            return redirect('/fr');
        }
        return redirect('/en');
    }
});

Route::get('/fr', function () {
    return Inertia::render('Welcome');
});

Route::get('/en', function () {
    return Inertia::render('WelcomeEn');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
