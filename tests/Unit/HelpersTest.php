<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
		@test
     */
    public function page_title_should_return_correct_title()
    {
    	// dd(page_title(''));

        $this->assertEquals("Laracarte - List of Artisans", page_title(''));
    }
}
