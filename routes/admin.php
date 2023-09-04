<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/ajax', [DashboardController::class, 'index'])->name('admin.dashboard.ajax');
Route::get('/registrations/month', [DashboardController::class, 'getRegistrationsPreMonth'])->name('admin.registrations');

Route::prefix('pages')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('admin.pages.index');
    Route::get('/ajax', [PageController::class, 'render'])->name('admin.pages.ajax');
    Route::get('/create',[PageController::class, 'create'])->name('admin.pages.create');
    Route::get('/edit/{id}',[PageController::class, 'edit'])->name('admin.pages.edit');
    Route::get('/{id}',[PageController::class, 'get'])->name('admin.pages.page');
    Route::post('/',[PageController::class, 'store'])->name('admin.pages.store');
    Route::put('/update/{id}',[PageController::class, 'update'])->name('admin.pages.update');
    Route::delete('/delete/{id}',[PageController::class, 'destroy'])->name('admin.pages.destroy');
});

Route::prefix('layouts')->group(function(){
    Route::get('/select',[LayoutController::class, 'getLayoutPublic'])->name('admin.layouts.select');
});

Route::prefix('headers')->group(function(){
    Route::get('/',[HeaderController::class, 'index'])->name('admin.headers.index');
    Route::get('/ajax', [HeaderController::class, 'render'])->name('admin.headers.ajax');
    Route::get('/create',[HeaderController::class, 'create'])->name('admin.headers.create');
    Route::post('/',[HeaderController::class, 'store'])->name('admin.headers.store');
    Route::get('/{id}',[HeaderController::class, 'get'])->name('admin.headers.header');
    Route::get('/edit/{id}',[HeaderController::class, 'edit'])->name('admin.headers.edit');
    Route::put('/update/{id}',[HeaderController::class, 'update'])->name('admin.headers.update');
    Route::delete('/delete/{id}',[HeaderController::class, 'destroy'])->name('admin.headers.destroy');
});

Route::prefix('footers')->group(function(){
    Route::get('/',[FooterController::class, 'index'])->name('admin.footers.index');
    Route::get('/ajax', [FooterController::class, 'render'])->name('admin.footers.ajax');
    Route::get('/create',[FooterController::class, 'create'])->name('admin.footers.create');
    Route::post('/',[FooterController::class, 'store'])->name('admin.footers.store');
    Route::get('/{id}',[FooterController::class, 'get'])->name('admin.footers.header');
    Route::get('/edit/{id}',[FooterController::class, 'edit'])->name('admin.footers.edit');
    Route::put('/update/{id}',[FooterController::class, 'update'])->name('admin.footers.update');
    Route::delete('/delete/{id}',[FooterController::class, 'destroy'])->name('admin.footers.destroy');
});


Route::prefix('properties')->group(function(){
    Route::get('/',[PropertyController::class, 'index'])->name('admin.properties.index');
    Route::get('/ajax', [PropertyController::class, 'render'])->name('admin.properties.ajax');
    Route::get('/create',[PropertyController::class, 'create'])->name('admin.properties.create');
    Route::post('/',[PropertyController::class, 'store'])->name('admin.properties.store');
    Route::get('/{id}',[PropertyController::class, 'get'])->name('admin.properties.header');
    Route::get('/edit/{id}',[PropertyController::class, 'edit'])->name('admin.properties.edit');
    Route::put('/update/{id}',[PropertyController::class, 'update'])->name('admin.properties.update');
    Route::delete('/delete/{id}',[PropertyController::class, 'destroy'])->name('admin.properties.destroy');
    //Media
    Route::prefix('media')->group(function () {
        Route::post('/store',[PropertyController::class, 'saveFiles']);
        Route::delete('/delete/{id}',[PropertyController::class, 'deleteFile']);
    });

});

// Property Types
Route::prefix('property-types')->group(function(){
    Route::get('/',[PropertyTypeController::class, 'index'])->name('admin.property-types.index');
    Route::get('/ajax', [PropertyTypeController::class, 'render'])->name('admin.property-types.ajax');
    Route::get('/create',[PropertyTypeController::class, 'create'])->name('admin.property-types.create');
    Route::post('/',[PropertyTypeController::class, 'store'])->name('admin.property-types.store');
    Route::get('/{id}',[PropertyTypeController::class, 'get'])->name('admin.property-types.header');
    Route::get('/edit/{id}',[PropertyTypeController::class, 'edit'])->name('admin.property-types.edit');
    Route::put('/update/{id}',[PropertyTypeController::class, 'update'])->name('admin.property-types.update');
    Route::delete('/delete/{id}',[PropertyTypeController::class, 'destroy'])->name('admin.property-types.destroy');
});

// Developers
Route::prefix('developers')->group(function(){
    Route::get('/',[DeveloperController::class, 'index'])->name('admin.developers.index');
    Route::get('/ajax', [DeveloperController::class, 'render'])->name('admin.developers.ajax');
    
    Route::get('/create',[DeveloperController::class, 'create'])->name('admin.developers.create');
    Route::post('/',[DeveloperController::class, 'store'])->name('admin.developers.store');
    Route::get('/{id}',[DeveloperController::class, 'get'])->name('admin.developers.header');
    Route::get('/edit/{id}',[DeveloperController::class, 'edit'])->name('admin.developers.edit');
    Route::put('/update/{id}',[DeveloperController::class, 'update'])->name('admin.developers.update');
    Route::delete('/delete/{id}',[DeveloperController::class, 'destroy'])->name('admin.developers.destroy');
    

});
// Blogs Start
Route::prefix('blogs')->group(function(){
    Route::get('/',[BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/ajax', [BlogController::class, 'render'])->name('admin.blogs.ajax');
    Route::get('/create',[BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/',[BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/{id}',[BlogController::class, 'get'])->name('admin.blogs.header');
    Route::get('/edit/{id}',[BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/update/{id}',[BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/delete/{id}',[BlogController::class, 'destroy'])->name('admin.blogs.destroy');

    //Media
    Route::prefix('media')->group(function () {
        Route::post('/store',[BlogController::class, 'saveFiles']);
        Route::delete('/delete/{id}',[BlogController::class, 'deleteFile']);
    });
});
// Blogs End
// Inner dashboard
// Route::get('/ajax', [DashboardController::class, 'index'])->name('admin.dashboard.ajax');
// Route::get('/registrations/month', [DashboardController::class, 'getRegistrationsPreMonth'])->name('admin.dashboard.registration.month');
// // General
// Route::get('/newsletters/subscribe', [DashboardController::class, 'getNewsletterSubscriptions'])->name('admin.newsletter.subscribe');

// Queries
Route::prefix('queries')->group(function(){
    Route::get('/',[ContactFormController::class, 'index'])->name('admin.queries.index');
    Route::get('/ajax', [ContactFormController::class, 'render'])->name('admin.queries.ajax');
});

Route::get('/roles', [\App\Http\Controllers\BaseController::class, 'getAllRoles'])->name('admin.roles');
Route::get('/admin/messages', function () {
    return redirect()->route('home');
})->name('admin.messages.index');
//Companies

