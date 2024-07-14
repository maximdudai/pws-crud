<?php

class Period extends \ActiveRecord\Model {

  static $validates_presence_of = array(
    array('designacao'),
  );

    static $has_many = array(
      array('readings')
    );
}