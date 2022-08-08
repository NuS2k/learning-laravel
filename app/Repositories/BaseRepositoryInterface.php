<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function create($attributes = []);

    public function update($attributes = []);

    public function deleteById($id);

    public function findById($id);
}
