<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                ->Clicklink('Register')
                ->assertPathIs('/register')
                ->type('name', 'chika')
                ->type('email', 'dewanti45@gmail.com')
                ->type('password', 'anjay')
                ->type('password_confirmation', 'anjay')
                ->press('REGISTER')
                ->assertPathIs('/dashboard')
                ->creenshot ("regis");
                ;

        });
    }
}