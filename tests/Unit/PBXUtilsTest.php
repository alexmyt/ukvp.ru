<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use ukvp\CallbackRequest;
use ukvp\PBXUtils;

class PBXUtilsTest extends TestCase
{

	protected function setUp(): void {
		parent::setUp();
		$this->markTestSkipped('Disabled');
	}

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_processCallbackRequest()
    {
        $pbx = new PBXUtils;
        
        $cbRequest = CallbackRequest::find(1);
        $pbx->processCallbackRequest($cbRequest);
        
        $this->assertTrue(true);
    }
}
