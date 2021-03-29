<?php

class Cat
{
    public $name;
    public $gender;
    public $age;
    public $weight;
    public $color;
    //....

    public function breathe() {}
    public function eat() {}
    public function run() {}
    public function sleep() {}
    public function meow() {}
    //...
}

$oscar = new Cat();
$luna = new Cat();

$oscar->name = "Oscar";
$oscar->gender = "male";
$oscar->age = 3;
$oscar->weight = 7;
$oscar->color = "brown";
$oscar->name = "striped";

$luna->name = "Luna";
$luna->gender = "female";
$luna->age = 2;
$luna->weight = 5;
$luna->color = "gray";
$luna->name = "plain";
