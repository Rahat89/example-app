<?php
namespace App\Contracts;

interface ReadableInterface{
    /**
     * @param int $id
     * @return mixed
     */
    public function read(int $id);
}
