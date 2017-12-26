<?php

namespace Inventory\Exceptions;

use Exception;

class LoginException extends Exception
{

    public function render () {

        return response()->json([

            'error' => 'Unauthorized',

            'message' => 'Wrong login or password.',

        ], 401);

    }

}
