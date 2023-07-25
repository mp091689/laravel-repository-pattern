<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;

interface BookRepositoryInterface
{
    public function all(): Collection;
}
