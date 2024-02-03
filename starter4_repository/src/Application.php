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

            case 'show':
                $id = filter_input(INPUT_GET, 'id');
                if(!empty($id)){
                    $this->show($id);
                } else {
                    print 'error - cannot show a student when no ID provided !';
                }
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
        $studentRepository = new StudentRepository();
        $students = $studentRepository->findAll();

        require_once __DIR__ . '/../templates/studentList.php';
    }

    public function show(int $id)
    {
        $studentRepository = new StudentRepository();
        $student = $studentRepository->find($id);

        require_once __DIR__ . '/../templates/studentShow.php';
    }

}