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
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="border-radius: 5px; !important;  margin-bottom: 2rem;box-sizing: border-box;">
    <div class="col-md-6 px-0" style="">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3" style="">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6" style="padding-right: 150px;padding-left: 150px; max-width: 100%;position: relative;">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">Featured post</a>
                </h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
    </div>
    <div class="col-md-6" style=" padding-right: 150px;padding-left: 150px; max-width: 100%;position: relative;">
        <div class="card flex-md-row mb-4 box-shadow h-md-250" >
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Design</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">Post title</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
    </div>
</div>
</div>

</html>
<!--                        <h3>--><?php //= "hello " . ($_SESSION['user']['full_name'] ?? 'welcome !') ?><!--</h3> //keep this line!!!!!!!!!!-->
<!--                        <h4 class="text-center my-3 pb-3">To Do App</h4>-->
<!--                        --><?php //if (!empty($_SESSION['user'])){
//                            ?>
<!--                            <form action="/tasks" method="post" enctype="multipart/form"-->
<!--                        --><?php //} else {?>
<!--                            <h5 class="text-info text-center"> Log in to create post</h5>-->
<!--                        --><?php //} ?>
<!---->
<!--                            --><?php //$counter = 1; ?>
<!--                            --><?php //foreach($tasks as $task) : ?>
<!--                                <tr>-->
<!--                                    <th scope="row">--><?php //= $counter ?><!--</th>-->
<!--                                    <td>--><?php //= $task['title'] ?><!--</td>-->
<!--                                    <td class="--><?php //= $task['is_done'] ? 'bg-success text-white' : '' ?><!--"-->
<!--                                    >--><?php //= $task['is_done'] ? "Done" : "Pending" ?><!--</td>-->
<!--                                    <td>--><?php //= $task['label'] ?? "-" ?><!--</td>-->
<!--                                    <td>-->
<!--                                        <a  class="btn btn-danger" href=--><?php //= "/tasks/delete?task_id=" . $task['id'] ?><!-->Delete</a>-->
<!--                                        <a  class="btn btn-info ms-1" href=--><?php //= "/tasks/edit?task_id=" . $task['id'] ?><!-->Edit</a>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                --><?php //$counter++; ?>
<!--                            --><?php //endforeach; ?>
