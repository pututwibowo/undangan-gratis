<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\MonocromeComponent;

Route::prefix('preview')->group(function () {
    Route::get('monocrome/{view?}', MonocromeComponent::class)->name('monocrome.preview');
});