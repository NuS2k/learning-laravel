<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{   public function getAll(array $inputs = []);

    public function paginate(array $inputs = [], $perPage = 10);

    public function save(array $input, array $conditions = ['id' => null]);

    public function deleteById($id);

    public function findById($id);
}
