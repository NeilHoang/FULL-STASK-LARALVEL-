<?php

namespace App\Http\Controllers;

use App\Http\Service\UsersServicesInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UsersServicesInterface $userService)
    {
        $this->userService = $userService;
    }

    public function getAll()
    {
        $users = $this->userService->getAll();
        return view('users.list', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $users = $this->userService->store($request);
        return view('users.list', compact('users'));
    }

    public function destroy($id)
    {
        $this->userService->destroy($id);
        return redirect()->route('user.list');
    }

    public function edit($id)
    {
        $users = $this->userService->edit($id);
        return view('users.edit',compact('users'));
    }

    public function update(Request $request, $id )
    {
        $this->userService->update($id,$request);
        return redirect()->route('user.list');
    }
}
