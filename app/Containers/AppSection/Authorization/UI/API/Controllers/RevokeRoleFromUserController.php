<?php

namespace App\Containers\AppSection\Authorization\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Authorization\Actions\RevokeUserFromRoleAction;
use App\Containers\AppSection\Authorization\UI\API\Requests\RevokeUserFromRoleRequest;
use App\Containers\AppSection\User\UI\API\Transformers\UserTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class RevokeRoleFromUserController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function revokeRoleFromUser(RevokeUserFromRoleRequest $request): array
    {
        $user = app(RevokeUserFromRoleAction::class)->run($request);
        return $this->transform($user, UserTransformer::class);
    }
}
