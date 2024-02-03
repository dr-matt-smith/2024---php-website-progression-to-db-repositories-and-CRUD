<?php

namespace Tudublin;

class Application
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch ($action){
            case 'about':
                $this->about();
                break;

            default:
                $this->homepage();
        }
    }


    public function homepage()
    {
        require_once __DIR__ . '/../templates/home.php';
    }


    public function about()
    {
        require_once __DIR__ . '/../templates/about.php';
    }

}