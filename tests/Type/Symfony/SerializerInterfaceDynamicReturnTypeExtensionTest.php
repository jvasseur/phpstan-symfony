<?php declare(strict_types = 1);

namespace PHPStan\Type\Symfony;

use Iterator;

final class SerializerInterfaceDynamicReturnTypeExtensionTest extends ExtensionTestCase
{

	/**
	 * @dataProvider getProvider
	 */
	public function testDeserialize(string $expression, string $type): void
	{
		$this->processFile(
			__DIR__ . '/serializer.php',
			$expression,
			$type,
			new SerializerInterfaceDynamicReturnTypeExtension()
		);
	}

	public function getProvider(): Iterator
	{
		yield ['$object1', 'Foo\Bar'];
		yield ['$object2', 'object'];
	}

}
