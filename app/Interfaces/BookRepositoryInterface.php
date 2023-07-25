<?php

namespace App\Interfaces;

interface BookRepositoryInterface
{
    public function all();
    public function get($id);
    public function delete($id);
    public function create(array $data);
    public function update($id, array $newData);
    public function getUnread();
}
