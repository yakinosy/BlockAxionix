<?php
/**
 * Tests for BlockAxionix
 */

use PHPUnit\Framework\TestCase;
use Blockaxionix\Blockaxionix;

class BlockaxionixTest extends TestCase {
    private Blockaxionix $instance;

    protected function setUp(): void {
        $this->instance = new Blockaxionix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockaxionix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
