<?php


namespace App\Http\Service\Implement;


use App\Http\Repository\UserRepositoryInterface;
use App\Http\Service\UsersServicesInterface;
use App\User;

class UserService implements UsersServicesInterface
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    function getAll()
    {
        return $this->userRepo->getAll();
    }

    function store($request)
    {
        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;

        $image = $request->file('image');
        $path = $image->store('images', 'public');
        $users->image = $path;
        $users->password = $request->password;
        $this->userRepo->save($users);
    }

    function edit($id)
    {
        return $this->userRepo->findById($id);
    }

    function update($id, $request)
    {
        $users = $this->userRepo->findById($id);
        $users->name = $request->name;
        $users->email = $request->email;
        if (file_exists(storage_path("app/public/$users->image"))) {
            \Illuminate\Support\Facades\File::delete(storage_path("app/public/$users->image"));
        };
        $users->password = $request->password;
        $this->userRepo->save($users);
    }

    function destroy($id)
    {
        $users = $this->userRepo->findById($id);
        if (file_exists(storage_path("app/public/$users->image"))) {
            \Illuminate\Support\Facades\File::delete(storage_path("app/public/$users->image"));
        }
        $this->userRepo->delete($users);
    }


}
