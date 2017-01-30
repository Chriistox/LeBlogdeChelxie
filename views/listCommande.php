<a href="./index.php?action=formAddCommande">Ajouter</a>
<table>
  <thead>
    <th>Id</th>
    <th>Reference</th>
    <th>Date d'expedition</th>
    <th>Date de la commande</th>
    <th>Identifiant Client</th>
    <th>Statut</th>
    <th>Modifier</th>
    <th>Supprimer</th>
  </thead>
  <tbody>
    <?php
    foreach ($listCommande as $commande) {
      echo '<tr>';
      echo '<td>' . $commande->getId() . '</td>';
      echo '<td>' . $commande->getRef() . '</td>';
      echo '<td>' . $commande->getDateExpedition() . '</td>';
      echo '<td>' . $commande->getDateCmd() . '</td>';
      echo '<td>' . $commande->getclientId() . '</td>';
      echo '<td>' . $commande->getstatutId() . '</td>';
      echo '<td><a href="./index.php?action=formEditClient&id=' . $client->getId() . '"">Editer</a></td>';
      echo '<td><a href="./index.php?action=deleteClient&id=' . $client->getId() . '">Supprimer</a></td>';
      echo '</tr>';  
    }
    ?>
  </tbody>
</table>
<!-- Afficher ici le message d'erreur ou de confirmation lors d'une suppression -->
<label><?php if(isset($message)) echo $message ?></label>