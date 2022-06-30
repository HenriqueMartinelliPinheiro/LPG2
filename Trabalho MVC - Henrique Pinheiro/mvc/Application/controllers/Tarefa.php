<?php

use Application\core\Controller;

class Tarefa extends Controller
{
  public function index()
  {
    $Tarefas = $this->model('Tarefas');
    $data = $Tarefas::findAll();
    $this->view('tarefa/index', ['tarefas' => $data]);
  }

  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Tarefas = $this->model('Tarefas');
      $data = $Tarefas::findById($id);
      $this->view('tarefa/show', ['tarefa' => $data]);
    } else {
      $this->pageNotFound();
    }
  }


}
