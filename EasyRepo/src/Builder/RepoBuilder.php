<?php
namespace EasyRepo\Builder;

class RepoBuilder {

    /**
     * @var string
     */
    public string $className;

    /**
     * @var string
     */
    public string $methods;

    /**
     * @var bool
     */
    public bool $isModel;

    /**
     * @var bool
     */
    public bool $doBind;


    /**
     * @param string $className
     *
     * @return RepoBuilder
     */
    public function setClassName(string $className) : RepoBuilder
    {
        $this->className = $className;
        return $this;
    }

    /**
     * @param string $methods
     *
     * @return RepoBuilder
     */
    public function setMethods(string $methods) : RepoBuilder
    {
        $this->methods = $methods;
        return $this;
    }

    /**
     * @param bool $isModel
     *
     * @return RepoBuilder
     */
    public function setIsModel(bool $isModel) : RepoBuilder
    {
        $this->isModel = $isModel;
        return $this;
    }

    /**
     * @param bool $doBind
     *
     * @return RepoBuilder
     */
    public function setDoBind(bool $doBind) : RepoBuilder
    {
        $this->doBind = $doBind;
        return $this;
    }

    public function generate()
    {
        return true;
    }

}
