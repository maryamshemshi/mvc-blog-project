<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"
       style="margin-bottom: 5.5px; padding: 8px; margin-inline-end: 8px; font-size: smaller; align-items: center">Tux
        News
        <div class="logo-image">
            <img src="/public/Images/TuxRewards_Badge.svg" class="img-fluid" style="align-items: center">
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/index">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contactUs">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutUs">About</a>
            </li>
        </ul>
        <form class="form-inline" style="justify-content: center;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                   style="display: inline-block; width: auto;  margin-top: 20px;  margin-bottom: 5px; ">
            <button class="btn btn-outline-primary position-absolute " type="submit" style="margin-top: 1.27rem ">Search
            </button>
        </form>
    </div>
</nav>

<script>
    alert("Please register first!");
</script>

<style>
    .btn-color {
        background-color: #0e1c36;
        color: #fff;
    }

    .profile-image-pic {
        height: 200px;
        width: 200px;
        object-fit: cover;
    }

    .cardbody-color {
        background-color: #E3F2FD;
    }

    a {
        text-decoration: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Register Form</h2>
            <div class="text-center mb-5 text-dark">Welcome To News Blog</div>
            <div class="card my-5">

                <form action="/register" method="post" class="card-body cardbody-color p-lg-5">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="user_name" aria-describedby="emailHelp"
                               placeholder="User Name">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        <span class="EmailInput_email_error__IJxXf">Please enter your UserName</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="user_password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-color px-5 mb-5 w-100">Sign Up</button>
                    </div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Do you have already an account? <a
                                href="../login" class="text-dark fw-bold">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>