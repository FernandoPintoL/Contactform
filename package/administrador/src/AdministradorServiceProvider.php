<?php

namespace Fpl\Administrador;

use Illuminate\Support\ServiceProvider;

class AdministradorServiceProvider extends ServiceProvider
{
	
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
 		$this->loadViewsFrom(__DIR__.'/resources/views/', 'administrador');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');
	}
	public function register()
	{
		
	}
}