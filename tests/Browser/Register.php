<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Register extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee(text: 'Register')
            ->clicklink(link: 'Register')
            ->assertPathIs (path: '/register')
            ->type(field: 'name', value: 'abid')
            ->type(field: 'email', value: 'abid@gmail.com')
            ->type(field: 'password', value: '123')
            ->type(field: 'password_confirmation', value: '123')
            ->press(button: 'REGISTER')
            ->assertPathIs (path: '/dashboard')
            ->press(button: 'LOG IN')
            ->assertPathIs (path: '/dashboard');
        });
    }
}
