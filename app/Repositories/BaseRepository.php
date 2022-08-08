<?php

namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface; 

class BaseRepository implements BaseRepositoryInterface 
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
 
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes): Model
    {
        return $this->model->update($attributes);
    }

    public function deleteById($id)
    {
        return $this->model->destroy($id);
    }

    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }
}