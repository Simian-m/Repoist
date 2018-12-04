<?php

namespace Simian\Repo;

use Illuminate\Support\ServiceProvider;
use Simian\Repo\Commands\MakeCriterionCommand;
use Simian\Repo\Commands\MakeRepositoryCommand;

/**
 * @class   RepoServiceProvider
 * @package Simian\Repoist
 */
class RepoServiceProvider extends ServiceProvider
{
    /**
     * Commands to be registered.
     * @var array
     */
    private $repoistCommands = [
        MakeCriterionCommand::class,
        MakeRepositoryCommand::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/repo.php', 'repo');

        $this->publishes([
            __DIR__ . '/config/repo.php' => app()->basePath() . '/config/repo.php',
        ], 'repo-config');

        $this->registerCommands();
    }

    /**
     * Registers the repository commands.
     *
     * @return void
     */
    public function registerCommands()
    {
        $this->commands($this->repoistCommands);
    }
}
