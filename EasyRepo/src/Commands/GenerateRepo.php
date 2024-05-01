<?php

namespace EasyRepo\Commands;

use EasyRepo\Builder\RepoBuilder;
use Illuminate\Console\Command;

class GenerateRepo extends Command
{
    const DEFAULT_CLASS_NAME = "Default";
    const ACCEPT = "Y";
    const CANCEL = "N";
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:repo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will generate a repository scaffolding';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $serviceClass = $this->ask('What should the repo(s) be named?', self::DEFAULT_CLASS_NAME);
        $customMethods = $this->ask('What should be your custom methods(comma separated)?', self::CANCEL);
        $repoForModel = $this->ask('Do you want to make repo for model(Y/N)?', self::CANCEL);
        $doBind = $this->ask('Do you want to bind automatically?', self::CANCEL);

        $builder = (new RepoBuilder())
                    ->setClassName($serviceClass)
                    ->setMethods($customMethods)
                    ->setIsModel($repoForModel === self::ACCEPT)
                    ->setDoBind($doBind === self::ACCEPT)
                    ->generate();

        $this->warn("So you decide not to love our package!");



    }
}
