<?php


namespace App\Http\Repository;


interface UserRepositoryInterface extends RepositoryInterface
{
    function search($search);
}
