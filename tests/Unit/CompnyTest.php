<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Compny;
use Mockery;
use Illuminate\Support\Facades\URL;

class CompnyTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function testDestroyMethod()
    {
        // Mock the Compny model
        $compnyMock = Mockery::mock('alias:App\Models\Compny');
        $compnyMock->shouldReceive('destroy')->with(1)->andReturn(true);

        // Call the destroy method using a HTTP DELETE request
        $response = $this->delete(route('compny.destroy', ['id' => 1]));

        // Assert the response
        $response->assertRedirect();

        // Check if the redirect goes back to the previous page
        $response->assertStatus(302);
    }
}
