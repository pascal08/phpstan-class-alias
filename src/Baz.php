<?php

namespace App;

class Baz
{
    public function __construct(private Foo $foo) {}

    public function getFoo(): Foo
    {
        return $this->foo;
    }
}