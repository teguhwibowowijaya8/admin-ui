<?php

use Brackets\AdminUI\Http\Controllers\WysiwygMediaUploadController;

Route::middleware(['web', 'admin'])->group(function () {
    Route::namespace('Brackets\AdminUI\Http\Controllers')->group(function () {
        Route::post('/admin/wysiwyg-media',  [WysiwygMediaUploadController::class, 'upload'])->name('brackets/admin-ui::wysiwyg-upload');
    });
});