<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\CustomerRequest;
use App\Repositories\Admin\Customer\CustomerRepositoryInterface as CustomerRepository;
use App\Repositories\Admin\Role\RoleRepositoryInterface as RoleRepository;
use App\Repositories\Admin\User\UserRepositoryInterface as UserRepository;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    protected $customerRepository;
    protected $userRepository;
    protected $roleRepository;

    public function __construct(customerRepository $customerRepository, UserRepository $userRepository, RoleRepository $roleRepository){
        $this->customerRepository = $customerRepository;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        return view('admin.customer.index', [
            'customers' => $this->customerRepository->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.customer.form', [
            'roles' => $this->roleRepository->getAll(),
            'users' => $this->userRepository->getAll(),
            'isShow' => false,
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (! $customer = $this->customerRepository->findById($id)) {
            abort(404);
        }

        return view('admin.customer.form', [
            'customer' => $customer,
            'roles' => $this->roleRepository->getAll(),
            'users' => $this->userRepository->getAll(),
            'isShow' => false,
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->customerRepository->deleteById($id);

        return redirect()->route('admin.customer.index');
    }
}
