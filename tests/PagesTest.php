<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testStaticPageResponses()
    {
        $this->makeRequest('GET','/')->assertResponseOk();
        $this->makeRequest('GET','/about')->assertResponseOk();
        $this->makeRequest('GET','/register')->assertResponseOk();
    }

    public function testUserAuthentication()
    {
        return true;
    }
}
