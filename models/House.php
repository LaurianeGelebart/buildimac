<?php

class House extends Model
{


	public function __construct()
	{
		parent::__construct();
		$this->table = "house";
		$this->idName = "Id_H";
	}

	public function addHouse($date, $toit, $mur, $fenetre, $porte, $terrain){
		$sql = "INSERT INTO HOUSE (Date_H) VALUES (?); ";
		$query = $this->connexion->prepare($sql);
		$query->execute(array($date));
		$lastId = $this->connexion->lastInsertId();

		$sql = "INSERT INTO rela_house_element ( Id_H ,Id_E) VALUES (?,?); ";
		$query = $this->connexion->prepare($sql);
		$query->execute(array($lastId, $toit));

		$sql = "INSERT INTO rela_house_element (Id_H,Id_E) VALUES (?,?); ";
		$query = $this->connexion->prepare($sql);
		$query->execute(array($lastId, $mur));

		$sql = "INSERT INTO rela_house_element ( Id_H,Id_E) VALUES (?,?); ";
		$query = $this->connexion->prepare($sql);
		$query->execute(array($lastId, $fenetre));

		$sql = "INSERT INTO rela_house_element (Id_H ,Id_E) VALUES (?,?); ";
		$query = $this->connexion->prepare($sql);
		$query->execute(array($lastId, $porte));

		$sql = "INSERT INTO rela_house_element (Id_H ,Id_E) VALUES (?,?); ";
		$query = $this->connexion->prepare($sql);
		$query->execute(array($lastId, $terrain));

		/*$sql = "INSERT INTO rela_house_element (".$lastId. " ,Id_E) VALUES (?); ";
		$query = $this->connexion->prepare($sql);
		$query->execute(array($array[6]));*/

	}
	

}
