<?php
$prenom    = '';
$nom       = '';
$email     = '';
$age       = '';
$filiere   = '';
$motivation = '';
$erreurs   = [];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Formulaire de Candidature  </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="candidature.php" method = "Post">
        <div class = "container">
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <label for="Email">Email:</label>
        <input type="email"  name="Email" required>
        <label for="Age">Age:</label>
        <input type="number"  name="Age" required>
        <label for="Filière">Filière:</label>
        <select name ="Filière">
            <option value="">--Choisir--</option>
            <option value="">Informatique</option>
            <option value="">Électronique</option>
            <option value="">Mécanique</option>
            <option value="">Chimie</option>
        </select>
        <label for="Lettre Motivation">Lettre De Motivation:</label>
        <textarea  name="Motivation"></textarea>
        <div>
        <label for="reglement">J'ai lu et j'accepte le règlement du club</label>
            <input type="checkbox" id="accord" name="reglement" value = "1">
        </div>
        <div>
        <button type="submit">"Envoyer ma candidature"</button>
        </div>
    </form>
</body>
