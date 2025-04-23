<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class login extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee(text: 'Log in')
                    ->clicklink(link: 'Log in')
                    ->assertPathIs (path: '/login')
                    ->type(field: 'email', value: 'abid@gmail.com')
                    ->type(field: 'password', value: '123')
                    ->press(button: 'LOG IN')
                    ->assertPathIs (path: '/dashboard');
        });
    }
}
