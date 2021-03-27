<?php

namespace App\Ship\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

/**
 * Class EmailIsMissedException.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
class EmailIsMissedException extends Exception
{
    protected $code = SymfonyResponse::HTTP_INTERNAL_SERVER_ERROR;
    protected $message = 'One of the Emails is missed, check your configs..';
}
