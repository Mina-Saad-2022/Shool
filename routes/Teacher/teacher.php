<?php

use App\Http\Controllers\Teachers\Teachers_controller;


Route::group(['prefix' => 'teacher','as'=>'teacher.'], function () {

    /******************************** to show all teacher ********************************/

    Route::get('/index', [Teachers_controller::class, 'index'])->name('index');


    /******************************** to create new teacher ********************************/


    Route::group(['prefix' => 'create'], function () {
        Route::get('create', [Teachers_controller::class, 'create'])->name('create');
        Route::post('create', [Teachers_controller::class, 'action_create'])->name('action_create');

    });

    /******************************** to edit the teacher ********************************/

    Route::group(['prefix' => 'edit'], function () {

        Route::get('/{id}', [Teachers_controller::class, 'edit'])->name('edit');
        Route::post('/{id}', [Teachers_controller::class, 'action_edit'])->name('action_edit');

    });

    /******************************** to delete the teacher ********************************/

    Route::get('/{id}', [Teachers_controller::class, 'delete'])->name('delete');
});
