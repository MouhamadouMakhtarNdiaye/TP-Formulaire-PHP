<?php
$prenom    = '';
$nom       = '';
$email     = '';
$age       = '';
$filiere   = '';
$motivation = '';
$erreurs   = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$prenom     = $_POST['prenom']     ?? '';
$nom        = $_POST['nom']        ?? '';
$email      = $_POST['email']      ?? '';
$age        = $_POST['age']        ?? '';
$filiere    = $_POST['Filiere']    ?? '';
$motivation = $_POST['Motivation'] ?? '';
}
$reglement = isset($_POST['reglement']);
if (empty($prenom)) {
    $erreurs[] = "Le prénom est obligatoire.";
}
if (empty($nom)) {
    $erreurs[] = "Le nom est obligatoire.";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = "L'adresse email est invalide.";
}
if (empty($age)) {
    $erreurs[] = "L'âge doit être un nombre entre 16 et 30.";
}
if (empty($filiere)) {
    $erreurs[] = "Veuillez choisir une filière.";
}
if (empty($motivation)) {
    $erreurs[] = "La motivation doit contenir au moins 30 caractères.";
}
if (empty($reglement)) {
    $erreurs[] = "Vous devez accepter le règlement.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Formulaire de Candidature</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (!empty($erreurs)): ?>
    <ul class="erreurs">
        <?php foreach ($erreurs as $e): ?>
            <li><?php echo $e; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <form action="" method = "Post">
        <div class = "container">
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom"  >
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" >
        <label for="email">Email:</label>
        <input type="email"  name="email" >
        <label for="age">Age:</label>
        <input type="number"  name="age" >
        <label for="Filière">Filière:</label>
        <select name ="Filière">
            <option value="">--Choisir--</option>
            <option value="informatique">Informatique</option>
            <option value="electronique">Électronique</option>
            <option value="mecanique">Mécanique</option>
            <option value="chimie">Chimie</option>
        </select>
        <label for="Motivation">Lettre De Motivation:</label>
        <textarea  name="Motivation" ></textarea>
        <div>
        <label for="reglement">J'ai lu et j'accepte le règlement du club</label>
            <input type="checkbox" id="accord" name="reglement" value = "1">
        </div>
        <div>
        <button type="submit">"Envoyer ma candidature"</button>
        </div>
    </form>
</body>
