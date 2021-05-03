<?php

namespace App\Repository;

interface RepositoryInterface
{

    public function find(int $id);
    public function findBy(array $properties);
    public function findAll();

}
