<?php

namespace App;

class Baz
{
    private Foo $foo;

    public function __construct()
    {
        $this->setFoo(new Bar);
    }

    public function setFoo(Foo $foo): void
    {
        $this->foo = $foo;
    }

    public function getFoo(): Foo
    {
        return $this->foo;
    }
}