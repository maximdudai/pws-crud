<?php

class Sensor extends \ActiveRecord\Model {

  static $validates_presence_of = array(
    array('designacao'),
    array('numserie'),
    array('tempmedia'),
  );

  static $belongs_to = array(
    array('greenhouse')
  );

  static $has_many = array(
    array('readings')
);
}