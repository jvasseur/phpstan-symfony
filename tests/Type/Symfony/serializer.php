<?php declare(strict_types = 1);

$serializer = new Symfony\Component\Serializer\Serializer();

$object1 = $serializer->deserialize([], 'Foo\Bar', 'json');
$object2 = $serializer->deserialize([], $class, 'json');

$object3 = $serializer->denormalize([], 'Foo\Bar');
$object4 = $serializer->denormalize([], $class);

die;
