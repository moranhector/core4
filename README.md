## CORE 4 DE UBIK - 24/7/2022

## USO
- Clonar desde htdocs

git clone https://github.com/moranhector/core4.git nombre_carpeta_proyecto  

Abrir carpeta con VSCODE
cd nombre_carpeta_proyecto  
composer update  
composer install  
Renombrar .env.example  ( desde VScode )
 
CREAR DATABASE  
Configurar la base de datos   
php artisan key:generate 
php artisan migrate  
php artisan serve ( Para probar )
Registrar un usuario 
Crear repositorio en Github  


## CREACION DEL CORE 4

## Crear proyecto Laravel
- composer create-project --prefer-dist laravel/laravel core4

- cd core4

## Crear repositorio en Github 
echo "# core2" >> README.md  
git init  
git add README.md  
git commit -m "first commit"  
git branch -M main  
git remote add origin https://github.com/moranhector/core2.git  
git push -u origin main  


##  Agregar Laravel Breeze
- composer require laravel/breeze:1.9.2
- php artisan breeze:install
- npm install
- npm run dev


##  Corregir problema para Mysql Viejo
- app\Providers\AppServiceProvider.php

    use Illuminate\Support\Facades\Schema;  ( NO OLVIDAR INCLUIR )  

    public function boot()  
    {  
        //  
        Schema::defaultStringLength(191); //Solved by increasing StringLength
    }  


- php artisan migrate


##  Agregar Laravel DebugBar


- composer require barryvdh/laravel-debugbar --dev


##  Subir a Github
En GitBash  
git add .  
git commit -m "Agregamos Infyom "  
git branch -M main  
git push -u origin main  


##  Agregar Infyom



- Add following packages into composer.json while using it with Laravel 8.

 "require": {  
     "infyomlabs/laravel-generator": "^3.0",  
     "laravelcollective/html": "^6.2",  
     "infyomlabs/adminlte-templates": "^3.0"  
 } 


- composer update


- Add Aliases : Add following alias to aliases array in config/app.php


'Form'      => Collective\Html\FormFacade::class,  
'Html'      => Collective\Html\HtmlFacade::class,  
'Flash'     => Laracasts\Flash\Flash::class,  

- php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"


- Open app\Providers\RouteServiceProvider.php and update boot method as following:


    Route::prefix('api/v1')  
        ->middleware('api')  
        ->as('api.')  
        ->namespace($this->app->getNamespace().'Http\Controllers\API')  
        ->group(base_path('routes/api.php'));   


- php artisan infyom:publish



- php artisan infyom.publish:layout
- php artisan infyom.publish:layout --localized



# xaminaweb
