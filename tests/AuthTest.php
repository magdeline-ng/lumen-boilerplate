<?php

namespace Tests\Auth;

use \TestCase;

class AuthTest extends TestCase
{

    /** @test */
    public function testInvalidAccess()
    {
        $this->json('POST', "auth/authenticate", [
            'username' => "test.pipeline",
            'password' => 'notlegitpassword',
        ]);

        $this->assertResponseStatus(403);
    }
}
