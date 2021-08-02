<?php
namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TaskController extends AbstractController
{
    private $tasksA;
    function __construct(TaskRepository $tasks)
    {
        $this->tasksA = $tasks;
    }
 function index(): Response
 {
    $number = 1;
    $tasks = $this->tasksA->findAll();
   
    return $this->render('home.html.twig',[
        'number'=>$number,
        'tasks'=>$tasks
    ]);
 }
 /** 
  * @Route("/{id}",name="task_show")
  */
 function show($id)
 {
    $task = $this->tasksA->find($id);
    if(!$task)
    {
        throw $this->createNotFoundException("Page introuvable");
    }
    return $this->render('show.html.twig',[
       
        'task'=>$task
    ]);
 }
 /**
  * @Route("/create")
  */
 function create()
 {
     return new Response("hELLO Create..");
 }
}