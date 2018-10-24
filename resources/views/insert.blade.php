<html>

<head>
    <title>Blog-lumen</title>
</head>

<body>

<div class="container">
    <h1>Inserer un article</h1>
    <form method="POST">

        Titre :
        <input type="text" name="titre"/><br/>

        Auteur :
        <input type="text" name="auteur"/><br/>

        Contenu :
        <textarea name="contenu">Texte</textarea>

        <input type="submit" value="Ajouter"/>

    </form>

    <button id="button" class="return" onclick="window.location.href='/blog'">Retour</button>
</div>

</body>

</html>