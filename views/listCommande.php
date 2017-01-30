<a href="./index.php?action=formAddCommande">Ajouter</a>

<table>
  <thead>
    <th>Id</th>
    <th>Reference</th>
    <th>Date d'expedition</th>
    <th>Date de la commande</th>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Statut</th>
    <th>Modifier</th>
    <th>Supprimer</th>
  </thead>
  <tbody>
    <?php
    foreach ($listCommande as $commande) {
      echo '<tr>';
      echo '<td>' . $commande->getId() . '</td>';
      echo '<td>' . $commande->getReference() . '</td>';
      echo '<td>' . $commande->getDateExpedition() . '</td>';
      echo '<td>' . $commande->getDateCmd() . '</td>';
      echo '<td>' . $commande->getClient()->getPrenom() . '</td>';
      echo '<td>' . $commande->getClient()->getNom() . '</td>';
      echo '<td>' . $commande->getStatut()->getLibelle() . '</td>';
      echo '<td><a href="./index.php?action=formEditClient&id=' . $commande->getId() . '"">Editer</a></td>';
      echo '<td><a href="./index.php?action=deleteClient&id=' . $commande->getId() . '">Supprimer</a></td>';
      echo '</tr>';  
    }
    ?>
  </tbody>
</table>
<!-- Afficher ici le message d'erreur ou de confirmation lors d'une suppression -->
<label><?php if(isset($message)) echo $message ?></label>