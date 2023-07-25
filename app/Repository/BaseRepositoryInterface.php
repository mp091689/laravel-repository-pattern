<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param $id
     *
     * @return Model|null
     */
    public function find($id): ?Model;
}
