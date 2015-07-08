<?php

namespace App;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function execute(RegistrationRequest $request)
    {
        return "awesome";
        //TODO: implement registration db logic, return flash message based on status
    }
}
