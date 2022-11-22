<?php

use App\Http\Controllers\Sections\SectionController;



Route::group(['prefix' => 'Section' ,'as'=>'section.'], function () {

    /******************************** to show all section ********************************/

    Route::get('/index', [SectionController::class, 'index'])->name('index');

    /******************************** to create new section ********************************/

    Route::group(['prefix' => 'create'], function () {

        Route::get('create', [SectionController::class, 'create'])->name('create');

        Route::post('create', [SectionController::class, 'action_create'])->name('action_create');
    });

    Route::group(['prefix' => 'edit'], function () {

        Route::get('/{id}', [SectionController::class, 'edit'])->name('edit');
        Route::post('/{id}', [SectionController::class, 'action_edit'])->name('action_edit');

    });
    Route::get('/{id}', [SectionController::class, 'delete'])->name('delete');

});
