<?php

  class CommandeRepository
  {

    public function getAll($pdo){

      $req = $pdo->query("SELECT p.nom, p.prenom, cmd.id, cmd.ref, cmd.date_expedition, cmd.date_cmd, s.libelle
      FROM personne p INNER JOIN commande cmd ON p.id=cmd.client_id INNER JOIN statut s ON cmd.statut_id=s.id ORDER BY p.nom, p.prenom");

      $req->setFetchMode(PDO::FETCH_OBJ);


      $listCommande = array();

      while ($obj = $req->fetch()){

        $client = new Client();
        $client->setPrenom($obj->prenom);
        $client->setNom($obj->nom);

        $statut =new Statut();
        $statut->setLibelle($obj->libelle);

        $statut =new statut();
        $commande->setStatut($obj->libelle);

        $commande = new Commande();
        $commande->setId($obj->id);
        $commande->setReference($obj->ref);

        $commande->setNom($client);
        $commande->setPrenom($client);
        $commande->setDateCommande($obj->date_cmd);
        $commande->setDateExpedition($obj->date_expedition);

        $listCommande[] = $commande;

      }

        return $listCommande;

    }
  }
