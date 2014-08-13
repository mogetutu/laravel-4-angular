<?php

class Todo extends Eloquent {

  protected $fillable = ['title', 'completed'];

  public function getCompletedAttribute($value)
  {
    return (boolean) $value;
  }

}
