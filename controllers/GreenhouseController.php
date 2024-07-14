<?php

require_once 'Controller.php';
require_once 'models/Greenhouse.php';

class GreenhouseController extends Controller
{

  public function index()
  {

    $greenhouse = Greenhouse::all();

    $this->renderView('greenhouse', 'index', ['greenhouses' => $greenhouse]);
  }

  public function edit($id)
  {
    $greenhouse = Greenhouse::find($id);

    $this->renderView('greenhouse', 'edit', ['greenhouse' => $greenhouse, 'id' => $id]);
  }

  public function update($id)
  {
    $greenhouse = Greenhouse::find($id);
    $greenhouse->update_attributes($this->getHTTPPost());

    if ($greenhouse->is_valid()) {
      $greenhouse->save();

      header('Location: index.php?c=greenhouse&a=index');
    } else {
      //mostrar vista edit passando o modelo como parâmetro
    }
  }

  public function create()
  {
    $this->renderView('greenhouse', 'create');
  }

  public function store()
  {
    $greenhouse = new Greenhouse($this->getHTTPPost());


    if ($greenhouse->is_valid()) {
      $greenhouse->save();

      header('Location: index.php?c=greenhouse&a=index');
    } else {
      //mostrar vista create passando o modelo como parâmetro
    }
  }

  public function delete($id)
  {
    $read = Greenhouse::find($id);

    if($read ->is_valid())
    {
      $read->delete();
    }
    header('Location: index.php?c=greenhouse&a=index');
  }

}
