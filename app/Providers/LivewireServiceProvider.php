<?php

use Livewire\Livewire;

class LivewireServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('realtime-cari', \App\Http\Livewire\RealtimeCari::class);
    }
}
