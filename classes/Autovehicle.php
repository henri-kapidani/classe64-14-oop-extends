<?php
include __DIR__ . '/../traits/Esempio.php';
include __DIR__ . '/../traits/Esempio2.php';

class Autovehicle
{
	use Esempio;

	private string $model;
	private int $numberTires;
	private float $power;
	protected int $doors;
	private int $maxVelocity;
	private int $year;
	private int $fuelTankCapacity;
	private int $fuelLevel;

	public Person $owner;

	public function __construct($model, $numberTires, $fuelTankCapacity, $fuelLevel, Person $person) {
		$this->model = $model;
		// $this->numberTires = $numberTires; // funziona ma i controlli non li fa
		$this->setNumberTires($numberTires);
		$this->fuelTankCapacity = $fuelTankCapacity;
		$this->fuelLevel = $fuelLevel;
		$this->owner = $person;
	}

	public function fillTank() {
		$this->fuelLevel = $this->fuelTankCapacity;
	}

	public function printLibretto() {
		return "<h1>{$this->model}</h1>
					<ul>
						<li>Numero ruote: {$this->numberTires}</li>
						<li>Potenza: {$this->power}</li>
						<li>Porte: {$this->doors}</li>
					</ul>";
	}

	// setter
	public function setNumberTires(int $value) {
		if ($value <= 10) {
			$this->numberTires = $value;
		}
	}

	public function getNumberTires() {
		if (isset($this->numberTires)) {
			return $this->numberTires . ' ruote';
		} else {
			return 'NOT SET';
		}
	}

	public function getMaxVelocity()
	{
		return $this->maxVelocity;
	}

	public function setMaxVelocity($maxVelocity)
	{
		$this->maxVelocity = $maxVelocity;

		return $this;
	}

	public function setDoors($doors) {
		echo 'sono il setdoors di Autovehicles';
		$this->doors = $doors;
	}
}