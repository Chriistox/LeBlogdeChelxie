
{<?php

class User 
{

	private $id;
	private $nom;
	private $prenom;
	private $login;
	private $password;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getReference() {
		return $this->nom;
	}

	public function setReference($nom) {
		$this->nom = $nom;
	}

	public function getDateExpedition() {
		return $this->prenom;
	}

	public function setDateExpedition($prenom) {
		$this->prenom = $prenom;
	}

	public function getDateCmd() {
		return $this->login;
	}

	public function setDateCmd($login) {
		$this->login = $login;
	}

	public function getClient() {
		return $this->password;
	}

	public function setClient($password) {
		$this->password = $password;
	}





}