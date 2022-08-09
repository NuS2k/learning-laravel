<?php

namespace App\Repositories\Admin\PermissionGroup;

use App\Models\PermissionGroup;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class PermissionGroupRepository extends BaseRepository implements PermissionGroupRepositoryInterface
{
    public function __construct(PermissionGroup $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
