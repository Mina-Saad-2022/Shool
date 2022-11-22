<?php



use App\Http\Controllers\Users\UserController;


Route::group(['prefix' => 'users','as'=>'user.'], function () {

    /******************************** to show users   ********************************/

    Route::get('/index', [UserController::class, 'index'])->name('index');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    /******************************** to create new user ********************************/


    Route::group(['prefix' => 'create'], function () {
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('create', [UserController::class, 'action_create'])->name('action_create');

    });

    /******************************** to edit the user ********************************/

    Route::group(['prefix' => 'edit'], function () {
        Route::get('/{id}', [UserController::class, 'edit'])->name('edit');
        Route::post('/{id}', [UserController::class, 'action_edit'])->name('action_edit');

    });

    /******************************** to delete the user ********************************/

    Route::get('/{id}', [UserController::class, 'delete'])->name('delete');

});
