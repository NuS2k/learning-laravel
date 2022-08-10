<?php

namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface; 

class BaseRepository implements BaseRepositoryInterface 
{
    protected $model;

    public function getAll(array $input = [])
    {
        return $this->model->all();
    }

    public function paginate(array $inputs = [], $perPage = 10)
    {
        $query = $this->model->query();

        return $query->paginate($perPage);
    }
 
    public function save(array $input, array $conditions = ['id' => null])
    {
        return $this->model->updateOrCreate($conditions, $input);
    }

    public function deleteById($id)
    {
        return $this->model->destroy($id);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }
}