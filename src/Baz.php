<?php declare(strict_types=1);

namespace App;

class Baz
{
    public function __construct(private Foo $foo) {}

    public function getFoo(): Foo
    {
        return $this->foo;
    }
}