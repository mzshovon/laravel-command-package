<?php

namespace EasyRepo;

class Generate
{
    /**
     * @var string
     */
    private string $className;
    /**
     * @var string
     */
    private string $customMethods;
    /**
     * @var bool
     */
    private bool $repoForModel;
    /**
     * @var bool
     */
    private bool $doBindRepo;

    public function __construct(
        string $className,
        string $customMethods,
        bool $repoForModel,
        bool $doBindRepo,
    ){
        $this->className = $className;
        $this->customMethods = $customMethods;
        $this->repoForModel = $repoForModel;
        $this->doBindRepo = $doBindRepo;
    }

    public function generate()
    {
        echo "something";
    }
}
