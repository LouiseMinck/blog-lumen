<html>

<head>
    <title>Blog-lumen</title>
</head>

<body>

<div class="container">
    <h1>Editer un article</h1>
    <form>

        Titre :
        <input id="title" type="text" name="titre" value=""/><br/>

        Auteur :
        <input id="author" type="text" name="auteur" value=""/><br/>

        Contenu :
        <textarea id="content" name="contenu"></textarea>

        <input id="button" type="submit" value="Modifier"/>

        <p id="respons"></p>

    </form>

    <button id="button" class="return" onclick="window.location.href='/blog-slim/public/blog'">Retour</button>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script>

        $.get( "/blog-slim/public/api/single/{{$slug}}", function( data ) {
            $('input#title').attr("value", data.titre)
            $('input#author').attr("value", data.auteur)
            $('textarea#content').html(data.contenu)
        });

        $('input#button').click(function(event){
            console.log("ok")
            event.preventDefault()
            envoiData()
        });

        function envoiData(){
            var titre = $('input#title').val()
            var auteur = $('input#author').val()
            var contenu = $('textarea#content').val()

            $.post("/blog-slim/public/api/edit/{{$slug}}", {
                titre : titre,
                auteur : auteur,
                contenu : contenu
            }, function(response){
                $('p#respons').html(response.message)
            } );

        };

    </script>
</div>

</body>

</html>