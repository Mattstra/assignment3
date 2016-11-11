<?php
	// This is the file for the parent class

	class ParentClass {
		private $n;
		private $h;
		private $m;

		public function __construct($n, $h, $m) {
			$this->name = $n;
			$this->health = $h;
			$this->mana = $m;
		}

		public function getName() {
			return $this->name;
		}

		public function getHealth() {
			return $this->health;
		}

		public function getMana() {
			return $this->mana;
		}

		public function setName($newName) {
			$this->name = $newName;
		}

		public function setHealth($newHealth) {
			$this->health = $newHealth;
		}

		public function setMana($newMana) {
			$this->mana = $newMana;
		}

		public function __toString() {
			return "Name: " . $this->getName() . "<br> Health: " . $this->getHealth() ."<br> Mana:" . $this->getMana();
		}

	}

	?>
