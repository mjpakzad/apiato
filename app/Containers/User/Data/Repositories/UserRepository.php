<?php

namespace App\Containers\User\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class UserRepository extends Repository
{
    protected $fieldSearchable = [
        'name' => 'like',
        'id' => '=',
        'email' => '=',
        'email_verified_at' => '=',
        'created_at' => 'like',
    ];
}
