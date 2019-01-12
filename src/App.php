<?php
namespace App;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class App {

    private $instance;
    protected $container;

    private function __construct(){}

    public static function getApp(){
        if(is_null($this->instance))
            $this->instance = new self();

        return $this->instance;
    }
    
    public function buildContainer(){
        if(is_null($this->container))
            $this->container = new ContainerBuilder();
    }

    public function loadFromFile($fileName){
        $this->buildContainer();
        
        $loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__));
        $loader->load($fileName);
    }
}