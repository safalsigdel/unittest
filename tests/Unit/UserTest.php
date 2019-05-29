<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();
        $this->assertTrue($user->sample());

    }

    public function testCreate()
    {
        $user = new User();
        $arr = $user->create(['email' => 'emasdddiedl', 'name' => 'safadl', 'password' => 'pass']);
        $this->assertInstanceOf('app\User',$arr);
    }

    public function testPost()
    {
        $user = new User();
        $this->assertInstanceOf('app\Post', $user->post);
    }
}
