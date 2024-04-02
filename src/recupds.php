<?php

$nom = filter_input(INPUT_POST,'nom',);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT,);
$commentaire = filter_input(INPUT_POST,'commentaire',FILTER_SANITIZE_STRING);


//verif Nom

if(empty($nom)){
    echo "le nom est vide";
} else {

if(preg_match('([^A-Za-z\s])',$nom)){
        echo "le nom n'as que des lettres !";
    }
}

//verif Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est considérée comme non valide.";
}

//verif age 
if(empty($age)){
    echo "l'age ne contient pas que des chiffre ! ";
}else{
    if($age<18){
        echo "vous etes mineur !";
    }
}

//verif commentaire
if(empty($commentaire)){
    echo "le commentaire est vide";
}
echo "Inscription valider \n <br/>";
echo "\n <br/>";
echo "| NAME : $nom |\n <br/>";
echo "| EMAIL : $email  |\n <br/>";
echo "| AGE : $age |\n <br/>";
echo "| COMMENTAIRE : $commentaire  |\n <br/>";