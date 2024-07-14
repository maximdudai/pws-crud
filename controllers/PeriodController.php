<?php

require_once 'Controller.php';
require_once 'models/Period.php';

class PeriodController extends Controller {
  public function index()
  {
    $periods = Period::all();

    $this->renderView('period', 'index', ['periods' => $periods]);
  }

  public function edit($id)
  {
    $period = Period::find($id);

    $this->renderView('period', 'edit', ['period' => $period, 'id' => $id]);
  }

  public function update($id)
  {
    $period = Period::find($id);
    $period->update_attributes($this->getHTTPPost());

    if ($period->is_valid()) {
      $period->save();

      header('Location: index.php?c=period&a=index');
    } else {
      //mostrar vista edit passando o modelo como parâmetro
    }
  }
  public function create()
  {
    $this->renderView('period', 'create');
  }

  public function store()
  {
    $period = new Period($this->getHTTPPost());
    if ($period->is_valid()) {
      $period->save();

      header('Location: index.php?c=period&a=index');
    } else {
      //mostrar vista create passando o modelo como parâmetro
    }
  }

  public function delete($id)
  {
    $read = Period::find($id);
    if($read ->is_valid())
    {
      $read->delete();
    }
    header('Location: index.php?c=greenhouse&a=index');
  }

}