<?php

namespace Recite\MainBundle\Exception;

/**
 *
 */
class ReciteException extends \Exception
{

    public function __construct($code, $message = null, $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    const BAD_CREDENTIAL = 10;

    const METHOD_NOT_ALLOW = 11;

    const USER_NO_PERMISSION = 12;

    const USER_NOT_FOUND = 13;

    const BAD_REQUEST = 14;

    const EMAIL_FORMAT_ERROR = 15;

    const EMAIL_IS_USED = 16;

    const PASSWORD_TOO_SHORT = 17;

    const USER_NOT_SIGNIN = 18;
}
