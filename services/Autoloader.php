<?php
namespace services;

class Autoloader
{
    public $paths = [
        'models',
        'services',
        'interfaces',
    ];

    public function loadClass($className)
    {
       /*foreach ($this->paths as $path){
           $filename = ROOT_DIR . "{$path}/{$className}.php";
            if(file_exists($filename)){
                include $filename;
                break;
            }
       }*/

        $filename = ROOT_DIR . "{$className}.php";
        include $filename;
    }

    public function forceLoad($className)
    {
        
    }
}