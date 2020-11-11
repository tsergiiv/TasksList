<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends AbstractController
{
    /**
    * @Route("/", name="tasks_list")
    */
    public function index(Request $request)
    {
        $queryParams = $request->query->all();
        $order = $request->query->get('order');

        if (!isset($order)) {
            $order = 0;
        }

        $tasks = $this->getDoctrine()->getRepository(Task::class)->findAllTasks($queryParams);
        return $this->render('tasks/index.html.twig', [
            'tasks' => $tasks,
            'order' => 1 - $order
        ]);
    }

    /**
    * @Route("/task/new", name="new_task")
    */
    public function newAction(Request $request)
    {
        $task = new Task();

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class, ['attr' => ['class' => 'form-control mb-3']])
            ->add('author', EmailType::class, ['attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Create Task', 'attr' => ['class' => 'btn btn-primary mt-3']])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            $task->setStatus(0);
            $task->setAdminEdit(0);

            $date = new \DateTime(date('Y-m-d H:i:s'));
            $task->setDateAdded($date);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute("tasks_list");
        }

        return $this->render('tasks/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
    * @Route("/task/edit/{id}", name="edit_task")
    */
    public function editAction(Request $request, $id)
    {
        $task = $this->getDoctrine()->getRepository(Task::class)->find($id);

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class, ['attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Update Task', 'attr' => ['class' => 'btn btn-primary mt-3']])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setAdminEdit(1);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute("tasks_list");
        }

        return $this->render('tasks/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
    * @Route("/task/close/{id}", name="close_task")
    */
    public function closeAction(Request $request, $id)
    {
        $task = $this->getDoctrine()->getRepository(Task::class)->find($id);

        $task->setStatus(2);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response();
        $response->send();
    }
}
