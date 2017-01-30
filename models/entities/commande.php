
<?php

class commande
{

	private $id;
	private $Reference;
	private $DateExpedition;
	private $DateCmd;
	private $Client;
	private $Statut;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getReference() {
		return $this->Reference;
	}

	public function setReference($Reference) {
		$this->Reference = $Reference;
	}

	public function getDateExpedition() {
		return $this->	$DateExpedition;
	}

	public function setDateExpedition($DateExpedition) {
		$this->DateExpedition = $DateExpedition;
	}

	public function getDateCmd() {
		return $this->DateCmd;
	}

	public function setDateCmd($DateCmd) {
		$this->DateCmd = $DateCmd;
	}

	public function getClient() {
		return $this->Client;
	}

	public function setClient($Client) {
		$this->Client = $Client;
	}

	public function getStatut() {
		return $this->Statut;
	}

	public function setStatut($Statut) {
		$this->Statut = $Statut;
	}

}