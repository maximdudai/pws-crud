<?php

require_once 'Controller.php';
require_once 'models/Sensor.php';
require_once 'models/Reading.php';
require_once 'models/Greenhouse.php';

class SensorController extends Controller
{

  public function index($id)
  {
      $greenhouse = Greenhouse::find($id);
  
      $this->renderView('sensor', 'index', ['greenhouses' => $greenhouse]);
  }

  public function show()
  {
    $sensors = Sensor::all();

    $this->renderView('sensor', 'show', ['sensors' => $sensors]);
  }

  public function create($id)
  {

    $this->renderView('sensor', 'create', ['id' => $id]);
  }

  public function store()
  {
    $sensor = new Sensor($this->getHTTPPost());


    if ($sensor->is_valid()) {
      $sensor->save();

      header('Location: index.php?c=greenhouse&a=index');
    } else {
      //mostrar vista create passando o modelo como parâmetro
    }
  }

  public function delete($id)
  {
    $sens = Sensor::find($id);

    if($sens ->is_valid())
    {
      $sens->delete();
    }
    header('Location: index.php?c=greenhouse&a=index');

  }

  public function mediaSensor($sensor_id)
  {

    $readings = Reading::find_all_by_sensor_id($sensor_id);
    $total = 0;
    $count = count($readings);

    foreach ($readings as $reading) {
      $total += $reading->valor;
    }

    return $count > 0 ? $total / $count : 0;
  }
}
