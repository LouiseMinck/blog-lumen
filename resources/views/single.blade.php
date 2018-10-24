<html>

<head>
    <title>Blog-lumen</title>
</head>

<body>

<div class="container">
    <h1>{{ $post->titre }}</h1>

    <p>Auteur : {{ $post->auteur }}</p>
    <p>Date : {{ $post->date }}</p>
    <p>{{ $post->contenu }}</p>

    <button id="button" class="return" onclick="window.location.href='/blog'">Voir les autres articles</button>
    <button id="button" onclick="window.location.href='/blog-lumen/public/edit/{{ $post->slug }}'">Editer l'article</button>
    <form action="/blog-slim/public/delete/{{$post->slug}}" method="POST">
        <input id="button" class="supp" type="submit" value="Supprimer l'article">
    </form>

</div>

</body>

</html>