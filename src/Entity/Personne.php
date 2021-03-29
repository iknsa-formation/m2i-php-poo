<?php

class Personne
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "$this->name a $this->age ans";
    }

    public function __clone() {
        $this->name = ucwords($this->name);
    }
}
