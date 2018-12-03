<?php declare(strict_types = 1);

namespace PHPStan\Type\Symfony;

use Iterator;

final class DenormalizerInterfaceDynamicReturnTypeExtensionTest extends ExtensionTestCase
{

	/**
	 * @dataProvider getProvider
	 */
	public function testDenormalize(string $expression, string $type): void
	{
		$this->processFile(
			__DIR__ . '/serializer.php',
			$expression,
			$type,
			new DenormalizerInterfaceDynamicReturnTypeExtension()
		);
	}

	public function getProvider(): Iterator
	{
		yield ['$object3', 'Foo\Bar'];
		yield ['$object4', 'object'];
	}

}
