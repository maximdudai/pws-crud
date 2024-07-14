<?php

require_once 'Controller.php';
require_once 'models/Sensor.php';
require_once 'models/Reading.php';

class ReadingController extends Controller {
  public function index($id)
  {
    $sens = Sensor::find($id);

    $this->renderView('reading', 'index', ['sensors' => $sens]);
  }

  public function create($id)
  {
    $sens = Sensor::find($id);
    $periods = Period::all();

    $this->renderView('reading', 'create', ['sensors' => $sens, 'periods' => $periods]);
  }

  public function store()
  {
    $reading = new Reading($this->getHTTPPost());

    if ($reading->is_valid()) {
      $reading->save();

      header('Location: index.php?c=greenhouse&a=index');
    } else {
      //mostrar vista create passando o modelo como parâmetro
    }
  }

  public function delete($id)
  {
    $read = Reading::find($id);

    if($read ->is_valid())
    {
      $read->delete();
    }
    header('Location: index.php?c=greenhouse&a=index');

  }
}