<?php

use App\Http\Controllers\Books\Book_controller;

    /******************************** to show all book ********************************/

Route::group(['prefix' => 'book','as'=>'book.' ], function () {

    Route::get('/index', [Book_controller::class, 'index'])->name('index');

    /******************************** to create new book ********************************/

    Route::group(['prefix' => 'create'], function () {
        Route::get('create', [Book_controller::class, 'create'])->name('create');
        Route::post('create', [Book_controller::class, 'action_create'])->name('action_create');
    });

    /******************************** to edit the teacher ********************************/

    Route::group(['prefix' => 'edit'], function () {

        Route::get('/{id}', [Book_controller::class, 'edit'])->name('edit');
        Route::post('/{id}', [Book_controller::class, 'action_edit'])->name('action_edit');

    });

    /******************************** to delete the book ********************************/

    Route::get('/{id}', [Book_controller::class, 'delete'])->name('delete');

});
