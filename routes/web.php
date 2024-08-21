<?php

use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\TableController;
use Eyika\Atom\Framework\Http\Route;


Route::get('', [HomeController::class, 'index']);
Route::get('/dashboard1', [HomeController::class, 'index']);
Route::get('/dashboard2', [HomeController::class, 'index2']);
Route::get('/dashboard3', [HomeController::class, 'index3']);

Route::group('forms', function () {
    Route::get('', [FormController::class, 'index']);
    Route::get('/advanced', [FormController::class, 'advanced']);
    Route::get('/validation', [FormController::class, 'validation']);
    Route::get('/wizards', [FormController::class, 'wizards']);
    Route::get('/upload', [FormController::class, 'upload']);
    Route::post('/upload', [FormController::class, 'uploadNew']);
    Route::get('/buttons', [FormController::class, 'buttons']);
});

Route::group('elements', function () {
    Route::get('', [ElementController::class, 'index']);
    Route::get('/media_gallery', [ElementController::class, 'media_gallery']);
    Route::get('/typography', [ElementController::class, 'typography']);
    Route::get('/icons', [ElementController::class, 'icons']);
    Route::get('/glyphicons', [ElementController::class, 'glyphicons']);
    Route::get('/widgets', [ElementController::class, 'widgets']);
    Route::get('/invoice', [ElementController::class, 'invoice']);
    Route::get('/inbox', [ElementController::class, 'inbox']);
    Route::get('/calendar', [ElementController::class, 'calendar']);
});

Route::group('tables', function () {
    Route::get('', [TableController::class, 'index']);
    Route::get('/dynamic', [TableController::class, 'dynamic']);
});

Route::group('presentation', function () {
    Route::get('', [PresentationController::class, 'index']);
    Route::get('/chartjs2', [PresentationController::class, 'chartjs2']);
    Route::get('/morisjs', [PresentationController::class, 'morisjs']);
    Route::get('/echarts', [PresentationController::class, 'echarts']);
    Route::get('/other_charts', [PresentationController::class, 'other_charts']);
});

Route::group('layouts', function () {
    Route::get('', [LayoutController::class, 'index']);
    Route::get('/fixed_footer', [LayoutController::class, 'fixed_footer']);
});

Route::group('additional', function () {
    Route::get('', [AdditionalController::class, 'index']);
    Route::get('/projects', [AdditionalController::class, 'projects']);
    Route::get('/project_detail', [AdditionalController::class, 'project_detail']);
    Route::get('/contacts', [AdditionalController::class, 'contacts']);
    Route::get('/profile', [AdditionalController::class, 'profile']);
});

Route::group('extras', function () {
    Route::get('', [ExtraController::class, 'index']);
    Route::get('/page_404', [ExtraController::class, 'page_404']);
    Route::get('/page_500', [ExtraController::class, 'page_500']);
    Route::get('/plain_page', [ExtraController::class, 'plain_page']);
    Route::get('/login', [ExtraController::class, 'login']);
    Route::get('/pricing_tables', [ExtraController::class, 'pricing_tables']);
});

Route::get('/level/level2', [GeneralController::class, 'level2']);
