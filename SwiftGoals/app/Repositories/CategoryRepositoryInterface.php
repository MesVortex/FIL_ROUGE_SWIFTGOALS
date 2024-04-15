<?php
namespace App\Repositories;

interface CategoryRepositoryInterface
{

  public function getAllUsers();

  public function getUserById($id);

  public function createOrUpdate($id = null);
}
