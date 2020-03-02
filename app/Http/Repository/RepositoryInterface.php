<?php


namespace App\Http\Repository;


interface RepositoryInterface
{
    function getAll();

    function save($obj);

    function findById($id);

    function delete($obj);
}
