<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    public function testRegistrationForm()
    {
        $response = $this->visit('/register')
            ->type('Brock', 'fname')
            ->type('Taylor', 'lname')
            ->type('brock@brocktest.com', 'email')
            ->type('test','password')
            ->type('test','password_confirmation')
            ->check('subscribe')
            ->press('submit')->response;
        //TODO: setup test for insert into database, check if record exists, then roll back. Should return a flash message (laracasts flash?)
        $response->isOk();
    }
}
