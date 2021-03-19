<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCourses;

Route::get('courses', InstructorCourses::class)->name('courses.index');

Route::redirect('', 'instructor/courses', 301);