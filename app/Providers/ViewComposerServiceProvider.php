<?php
namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory;
use App\Composers\CurrentUserComposer;

class ViewComposerServiceProvider extends ServiceProvider{

    public function boot(Factory $factory){
        $factory->composer('*',CurrentUserComposer::class);//-- *=compartir en todas las vistas
    }

}