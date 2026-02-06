<?php
/**
 * Tests for apiBlaze
 */

use PHPUnit\Framework\TestCase;
use Apiblaze\Apiblaze;

class ApiblazeTest extends TestCase {
    private Apiblaze $instance;

    protected function setUp(): void {
        $this->instance = new Apiblaze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apiblaze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
