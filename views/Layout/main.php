<html>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"
       style="margin-bottom: 5.5px; padding: 8px; margin-inline-end: 8px; font-size: smaller; align-items: center">Tux
        News
        <div class="logo-image">
            <img src="https://training.linuxfoundation.org/wp-content/uploads/2021/03/TuxRewards_Badge.svg"
                 class="img-fluid" style="align-items: center">
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contactUs">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutUs">About</a>
            </li>


            <?php
            if (!empty($_SESSION['userInfo'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hi <?= $_SESSION['userInfo']['user_name'] ?></a>
                </li>
                <li class="nav-item ms-auto">
                    <a class="nav-link ml-auto" href="/logout">Logout</a>
                </li>
                <a href="/addNews"><img src="/public/Images/addpost.png"></a>
            <?php else : ?>
                <li class="nav-item ms-auto">
                    <a class="nav-link ml-auto" href="/login">Login</a>
                </li>
            <?php endif; ?>
        </ul>
        <form class="form-inline" style="justify-content: center;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                   style="display: inline-block; width: auto;  margin-top: 20px;  margin-bottom: 5px; ">
            <button class="btn btn-outline-primary position-absolute " type="submit" style="margin-top: 1.27rem ">Search
            </button>
        </form>
    </div>
</nav>

[contents]

<footer class="bg-body-tertiary text-center">
    <div class="container p-4 pb-0">
        <section class="">
            <form action="">
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <div class="col-md-5 col-12">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form5Example26" class="form-control"/>
                            <label class="form-label" for="form5Example26">Email address</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button data-mdb-ripple-init type="submit" class="btn btn-primary mb-4">
                            Subscribe
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 developer: "mimshemshi"
    </div>
</footer>
<script>
    import {Input, initMDB} from "mdb-ui-kit";

    initMDB({Input});</script>
</body>
</html>