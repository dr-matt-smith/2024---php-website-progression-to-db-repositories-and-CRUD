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

            case 'list':
                $this->list();
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

    public function list()
    {
        $fixtures = new StudentFixtures();
        $students = $fixtures->getStudentArray();
        require_once __DIR__ . '/../templates/studentList.php';
    }

}