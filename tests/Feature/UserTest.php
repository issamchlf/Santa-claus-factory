<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_fillable_attributes()
    {
        $user = new User();
        $this->assertEquals(['name', 'email', 'password'], $user->getFillable());
    }

    public function test_hidden_attributes()
    {
        $user = new User();
        $this->assertEquals(['password', 'remember_token'], $user->getHidden());
    }

    public function test_casts_attributes()
    {
        $user = new User();
        $expectedCasts = [
            'id' => 'int',
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
        $this->assertSame($expectedCasts, $user->getCasts());
    }
    
}
