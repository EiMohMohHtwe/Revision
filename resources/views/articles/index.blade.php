<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
   
    <section class="row-posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What people say...</h3></header>
            @foreach($articles as $article)
                <article class="post">
                    <p>
                        <a href="{{ route('articles.show', $article)}}">
                            {{ $article->body }}
                        </a>
                    </p>
                    <div class="info">
                        Posted by {{ $article->user->first_name }} on {{ $article->created_at }}
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</body>
</html>