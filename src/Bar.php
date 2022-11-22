<?php declare(strict_types=1);

namespace App;

class Bar {}

class_alias(Bar::class, Foo::class);