<?php

namespace EasyRepo\Commands;

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
        $serviceClass = $this->ask('What is your repo name?', self::DEFAULT_CLASS_NAME);
        $customMethods = $this->ask('Do you want to add custom methods(comma separated)?', self::CANCEL);
        $repoForModel = $this->ask('Do you want to make repo for model?', self::CANCEL);
        $doBind = $this->ask('Do you want to bind automatically?', self::CANCEL);

        $this->warn("So you decide not to love our package!");



    }
}
