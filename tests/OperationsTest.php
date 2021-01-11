<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

final class OperationsTest extends TestCase
{
    public function testAdd():void {
        $value = Yaml::parseFile('credentials.yml');

        $this->assertEquals('some key here',$value['parameters']['github.au_key']);
	}
}