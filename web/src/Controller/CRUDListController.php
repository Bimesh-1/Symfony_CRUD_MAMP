<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;


class CRUDListController extends AbstractController
{
    #[Route('/crud', name: 'app_crud_list')]
    public function index()
    {
        return $this->render('crudlist/index.html.twig');
            
    }
    #[Route('/create', name: 'create_task', methods:['POST'])]
    public function create(Request $request)
    {
        $title=trim($request->get("title"));
        if (empty($title))
        return $this->redirectToRoute('app_crud_list');
    //redirect to the same page if empty
        //exit($request->get("title"));
     }

    #[Route('/update/{id}', name: 'update_task')]
    public function update($id)
    {
        exit('to do: update a new task' . $id);
            
    }

    #[Route('/delete/{id}', name: 'delete_task')]
    public function delete($id)
    {
        exit('to do: delete a new task' . $id);
            
    }
}
