<?php
/**
 * Tests for SketchSpiral
 */

use PHPUnit\Framework\TestCase;
use Sketchspiral\Sketchspiral;

class SketchspiralTest extends TestCase {
    private Sketchspiral $instance;

    protected function setUp(): void {
        $this->instance = new Sketchspiral(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchspiral::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
