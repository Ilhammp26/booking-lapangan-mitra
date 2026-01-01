<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\Admin\Dashboard;

// Route::get('/', function () {
//     return view('Master');
// });

Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');