<html>

    <head>
        <title>Blog-lumen</title>

        <style>
            body{
                color: #323232;
                font-family: Calibri;
            }
            div.post{
                background-color: #ededed;
                padding: 20px;
                margin-bottom: 20px;
            }
        </style>

    </head>

    <body>

        <div class="container">
            <h1>Blog</h1>
            @foreach($posts as $post)
                <a href="blog/{{ $post->slug }}">


                    <div class="post">
                        <h3>{{ $post->titre }}</h3>
                        <p>Auteur : {{ $post->auteur }}</p>
                        <p>Date : {{ $post->date }}</p>
                    </div>
                </a>
            @endforeach
            <button id="button" onclick="window.location.href='/blog-lumen/public/'">Retour</button>
            <button id="button" onclick="window.location.href='/blog-lumen/public/insert'">Ajouter un article</button>
        </div>

    </body>

</html>