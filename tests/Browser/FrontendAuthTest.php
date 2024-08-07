<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontendAuthTest extends DuskTestCase
{
    public function testVisitLoginPage(): void
    {
        $this->browse(function(Browser $browser) {
            $browser->visit('/login')->assertion('login')->screenshot('login_page');
        });
    }
}
