<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tux News Presents^^</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</head>
<style>
    .bg-dark {
        background-color: #199AD6 !important;
    }
</style>
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark"
     style="border-radius: 5px; !important;  margin-bottom: 2rem;box-sizing: border-box;">
    <div class="col-md-6 px-0" style="">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3" style="">Multiple lines of text that form the lede, informing new readers quickly and
            efficiently about what's most interesting in this post's contents.</p>
        <p class="lead mb-0">Continue reading...</p>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6" style="padding-right: 150px;padding-left: 150px; max-width: 100%;position: relative;">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">

            <?php foreach ($result as $post): ?>
                <div class="card-body  d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><?= $post['category'] ?></strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#"><?= $post['title'] ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?= $post['time_news'] ?></div>
                    <p class="card-text mb-auto"><?= $post['short_news'] ?></p>
                    <?php if ($post['is_liked']): ?>
                        ️️<a href="/dis_like?id=<?= $post['id'] ?>">❤️</a>
                    <?php else: ?>
                        <a href="/like?id=<?= $post['id'] ?>">🤍</a>
                    <?php endif; ?>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                     alt="Card image cap">
                <a href="/editNews?id=<?= $post['id'] ?>">
                    <button class="btn">Edit</button>
                </a>
                <a href="/deleteNews"><?= $post['id'] ?>
                    <button class="btn btn-outline-warning">Delete</button>
                </a>
            <?php endforeach; ?>

        </div>

    </div>
</div>

</html>