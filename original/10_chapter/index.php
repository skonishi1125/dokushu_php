<?php

class Animal {
    private array $list = ['a','b','c','d','e'];
    public function __invoke(int $index) : mixed {
        return $this->list[$index];
    }
}

$list = new Animal();
print $list(1);


?>