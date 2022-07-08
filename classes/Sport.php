<?php

class Sport extends Autovehicle {
	use Esempio2;

	private int $wins;

	public function __construct($model, $numberTires, $fuelTankCapacity, $fuelLevel, Person $person, $wins) {
		parent::__construct($model, $numberTires, $fuelTankCapacity, $fuelLevel, $person);
		$this->wins = $wins;
	}

	public function setDoors($doors) {
		echo 'sono il setdoors di Sport<br>';
		parent::setDoors($doors);
	}

	public function getWins()
	{
		return $this->wins;
	}

	public function setWins($wins)
	{
		$this->wins = $wins;
		return $this;
	}
}
