<?php
/**
 * Tests for ForgeStream
 */

use PHPUnit\Framework\TestCase;
use Forgestream\Forgestream;

class ForgestreamTest extends TestCase {
    private Forgestream $instance;

    protected function setUp(): void {
        $this->instance = new Forgestream(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgestream::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
