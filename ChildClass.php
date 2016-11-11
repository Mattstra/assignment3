<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $w;
		private $p;
		private $e;

		public function __construct($w, $p, $e) {
			$this->weapon = $w;
			$this->potions = $p;
			$this->elixers = $e;
		}

		public function getWeapon() {
			return $this->weapon;
		}

		public function getPotionNum() {
			return $this->potions;
		}

		public function getElixerNum() {
			return $this->elixers;
		}

		public function __toString() {
			return "Name: " . $this->getName() . "<br> Weapon: " . $this->getWeapon() . "<br> Health: " . $this->getHealth() ."<br> Mana:" . $this->getMana() . "<br> Potions: " . $this->getPotionNum() . "<br> Elixers: " . $this->getElixerNum();
		}

		public function __clone() {
			$this->ChildClass = clone $this->ChildClass;
		}

	}
?>
