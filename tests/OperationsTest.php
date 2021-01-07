<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class OperationsTest extends TestCase
{
    public function testAdd():void {
		$operations = new learninggit\Operations();
		$this->assertEquals($_SERVER['DEP_KEY'],"MY_DEPLOYMENT_KEY_123456");
		$this->assertEquals(4,$operations->add(1,3));
	}
}