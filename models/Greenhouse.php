<?php

class Greenhouse extends \ActiveRecord\Model {

  static $validates_presence_of = array(
    array('designacao'),
    array('areatotal'),
  );

  static $has_many = array(
    array('sensors')
  );

}