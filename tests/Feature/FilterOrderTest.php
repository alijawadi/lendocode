<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class FilterOrderTest extends TestCase
{
    public function test_order_list_http_200(): void
    {
        $response = $this->get('/api/backoffice/orders');

        $response->assertOk();
    }
}
