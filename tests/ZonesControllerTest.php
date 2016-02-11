<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ZonesControllerTest extends TestCase
{
    /**
     * Test that / is 200 OK
     *
     * @return void
     */
    public function testIndexStatusIs200()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }
}
