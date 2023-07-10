<!DOCTYPE html>
<html>
<head>
</head>
<body>

    
    <form method="POST" action="traitement_formulaire.php">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" required><br><br>
        
        <label for="chapo">Châpo :</label>
        <input type="text" name="chapo" id="chapo" required><br><br>
        
        <label for="categorie">Catégorie :</label>
        <input type="text" name="categorie" id="categorie" required><br><br>
        
        <label for="contenu">Contenu :</label><br>
        <textarea name="contenu" id="contenu" rows="5" cols="40" required></textarea><br><br>
        
        <input type="submit" value="Ajouter le Post">
    </form>
</body>
</html>
