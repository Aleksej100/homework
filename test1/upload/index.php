<?php


class Animal{

    public $name;
    public $sound;

    function setName($name) {
		$this->name = $name;
    }
    
	function get_name() {
		return $this->name;
	}

	function setSound($sound) {
		$this->sound = $sound;
	}

	function get_sound() {
		return $this->sound;
	}
}

$cat = new Animal;

$cat->setName('Cat');
$cat->setSound('meow');

$dog = new Animal;

$dog->setName('Dog');
$dog->setSound('woof');

$horse = new Animal;

$horse->setName('Horse');
$horse->setSound('neigh');

$animals = [$cat, $dog, $horse];
foreach ($animals as $animal) {
	echo "Name: " . $animal->get_name();
    echo "<br>";
    echo "Sound: " .  $animal->get_sound();

	echo "<br><br>";
}