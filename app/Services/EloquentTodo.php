<?php
namespace App\Services;
use App\Repository\TodoInterface;
use App\Todo;

class EloquentTodo implements TodoInterface
{

  private $model;
  // inject model inside Implementation of the 
  // Interface
  public function __construct(Todo $todo)
  {
    $this->model = $todo;
  }
  public function getAll(){
    return $this->model->all();

  }

  public function getById($id){
    return $this->model->findById($id);

  }

  public function create(array $attributes){
    return $this->model->create($attributes);

  }

  public function update($id, array $attributes){
    $todo = $this->model->findOrFail($id);
    $todo->update($attributes);
    return $todo;
  }

  public function delete($id){

    $this->model->getById($id)->delete();
    return true;
  }
}