<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function getAll()
    {
       return $this->user->all();
    }

    function save($obj)
    {
        $obj->save();
    }

    function findById($id)
    {
        return $this->user->findOrFail($id);
    }

    function delete($obj)
    {
        $obj->delete();
    }

    function search($search)
    {
        return $this->user->where('name','LIKE',"%$search%")->get();
    }
}
