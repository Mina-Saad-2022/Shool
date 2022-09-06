<?php



use App\Http\Controllers\Admin\AdminController;


Route::group(['prefix' => 'admins','as'=>'admin.'], function () {

    /******************************** to show users   ********************************/

    Route::get('/index', [AdminController::class, 'index'])->name('index');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');

    /******************************** to create new teacher ********************************/


    Route::group(['prefix' => 'create'], function () {
        Route::get('create', [AdminController::class, 'create'])->name('create');
        Route::post('create', [AdminController::class, 'action_create'])->name('action_create');

    });

    /******************************** to edit the teacher ********************************/

    Route::group(['prefix' => 'edit'], function () {

        Route::get('/{id}', [AdminController::class, 'edit'])->name('edit');
        Route::post('/{id}', [AdminController::class, 'action_edit'])->name('action_edit');

    });

    /******************************** to delete the teacher ********************************/

    Route::get('/{id}', [AdminController::class, 'delete'])->name('delete');

});
