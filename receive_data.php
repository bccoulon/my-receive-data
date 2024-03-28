<?php
// Récupérer les données envoyées depuis le raccourci
$data = json_decode(file_get_contents('php://input'), true);

// Envoyer les données à votre script Python via la ligne de commande
exec('python script.py ' . escapeshellarg(json_encode($data)));

// Répondre à la demande avec un message de confirmation
echo 'Données reçues avec succès!';
?>
