<?php

namespace App\Repositories\Admin\Customer;

use App\Models\LongCustomer;
use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    public function __construct(LongCustomer $model)
    {
        $this->model = $model;
    }
}
