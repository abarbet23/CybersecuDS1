<?php

$nom = filter_input(INPUT_POST,'nom',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST,'age',FILTER_VALIDATE_FLOAT,);
$commentaire = filter_input(INPUT_POST,'commentaire',FILTER_SANITIZE_STRING);


echo "| NAME : $nom |\n <br/>";
echo "| EMAIL : $email  |\n <br/>";
echo "| AGE : $age |\n <br/>";
echo "| COMMENTAIRE : $commentaire  |\n <br/>";