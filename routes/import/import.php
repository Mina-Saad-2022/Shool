<?php

use \App\Http\Controllers\Import\ImportController ;
use \App\Http\Controllers\Import\ExportController ;

Route::group(['prefix' => 'import','as'=>'import.' ], function () {

    Route::get('/index', [ImportController::class, 'index'])->name('index');

});


Route::group(['prefix' => 'export','as'=>'export.' ], function () {

    Route::get('/index', [ExportController::class, 'index'])->name('index');

});
