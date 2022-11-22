<?php

use App\Http\Controllers\Students\StudentController ;


Route::group(['prefix' => 'student','as'=>'student.'], function () {

    /******************************** to show all student ********************************/

    Route::get('/index', [StudentController::class, 'index'])->name('index');

    /******************************** to create new student ********************************/

    Route::get('/create', [StudentController::class, 'create'])->name('create');

    Route::group(['prefix' => 'create'], function () {
        Route::get('create', [StudentController::class, 'create'])->name('create');
        Route::post('create', [StudentController::class, 'action_create'])->name('new_student');
    });

    /******************************** to edit new student ********************************/

    Route::group(['prefix' => 'edit'], function () {
        Route::get('/{id}', [StudentController::class, 'edit'])->name('edit');
        Route::post('/{id}', [StudentController::class, 'action_edit'])->name('action_edit');
    });

    /******************************** to delete new student ********************************/

    Route::get('/{id}', [StudentController::class, 'delete'])->name('delete');

});
