<?php

namespace App\Repository;

interface TodoInterface
{
  // include all functions that will be implementes
  public function getAll();

  public function showAll($id);

  public function createAll(array $attributes);

  public function updateAll($id, array $attributes);

  public function deleteAll($id);

}
