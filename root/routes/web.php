<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\JobController;

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

Route::prefix('admin')->name('admin')->group(function () {
    // admin    admin
    Route::view('', 'admin.index')->name('.index'); // admin    admin.index
    // \App\Http\Controllers\JobController
    Route::prefix('jobs')->name('.jobs')->controller(JobController::class)->group(function () {
        // admin/jobs    admin.jobs
        Route::get('', 'index')->name('.index'); // admin/jobs    admin.jobs.index › JobController@index
        Route::post('', 'store')->name('.store'); // admin/jobs    admin.jobs.store › JobController@store
        Route::get('create', 'create')->name('.create'); // admin/jobs/create    admin.jobs.create › JobController@create
        Route::get('{job}', 'show')->name('.show'); // admin/jobs/{job}    admin.jobs.show › JobController@show
        Route::patch('{job}', 'update')->name('.update'); // admin/jobs/{job}    admin.jobs.update › JobController@update
        Route::delete('{job}', 'destroy')->name('.destroy'); // admin/jobs/{job}    admin.jobs.destroy › JobController@destroy
        Route::get('{job}/edit', 'edit')->name('.edit'); // admin/jobs/{job}/edit    admin.jobs.edit › JobController@edit
        Route::post('{job}/confirm', 'confirm')->name('.confirm'); // admin/jobs/{job}/confirm    admin.jobs.confirm › JobController@confirm

        Route::post('csv', 'downloadCsv')->name('.csv');
        Route::post('tsv', 'downloadTsv')->name('.tsv');
    });
});
