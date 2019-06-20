<?php

namespace App\Repository;

interface TodoInterface
{
  // include all functions that will be implementes
  public function getAll();

  public function getById($id);

  public function create(array $attributes);

  public function update($id, array $attributes);

  public function delete($id);

}
