<?php

class Reading extends \ActiveRecord\Model {

  static $validates_presence_of = array(
    array('valor'),
  );

  static $belongs_to = array(
      array('sensor'),
      array('period')
  );
}