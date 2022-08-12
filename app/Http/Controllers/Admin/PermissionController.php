<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Permission\PermissionRepositoryInterface as PermissionRepository;
use App\Repositories\Admin\PermissionGroup\PermissionGroupRepositoryInterface as PermissionGroupRepository;

class PermissionController extends Controller
{
    protected $permissionRepository;
    protected $permissionGroupRepository;

    public function __construct(PermissionRepository $permissionRepository, PermissionGroupRepository $permissionGroupRepository)
    {
        $this->permissionRepository = $permissionRepository;
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    public function index()
    {
        return view('admin.permission.index', [
            'permissions' => $this->permissionRepository->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.permission.form', [
            'permissionGroups' => $this->permissionGroupRepository->getAll(),
        ]);
    }

    public function store(Request $request)
    {
        $this->permissionRepository->save($request->validated());

        return redirect()->route('admin.permission.index');
    }

    public function show($id)
    {
        $permission = $this->permissionRepository->findById($id);

        if (!$permission) {
            abort(404);
        }

        return view('admin.permission.show', [
            'permission' => $permission,
        ]);
    }

    public function edit($id)
    {
        return view('admin.permission.form', [
            'permission' => $this->permissionRepository->findById($id),
            'permissionGroups' => $this->permissionGroupRepository->getAll(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->permissionRepository->save($request->validated(), ['id' => $id]);

        return redirect()->route('admin.permission.index');
    }

    public function destroy($id)
    {
        $this->permissionRepository->deleteById($id);

        return redirect()->route('admin.permission.index');
    }
}
