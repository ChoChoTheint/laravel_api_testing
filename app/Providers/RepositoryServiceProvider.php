<?php
namespace App\Providers;
use App\Interfaces\AssignInterface;
use App\Repositories\AssignRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider{
    public $bindings = [
         AssignInterface::class => AssignRepository::class
    ];

    public function register()
    {
        $this->app->bind(AssignInterface::class,AssignRepository::class);
    }
}