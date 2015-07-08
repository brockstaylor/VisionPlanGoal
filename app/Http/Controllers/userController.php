<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Register;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function register(RegistrationRequest $request, Register $register)
    {
        return $register->execute($request);
    }
}
