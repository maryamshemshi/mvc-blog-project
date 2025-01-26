<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#" style="margin-bottom: 5.5px; padding: 8px; margin-inline-end: 8px; font-size: smaller; align-items: center">Tux News<div class="logo-image">
            <img src="https://training.linuxfoundation.org/wp-content/uploads/2021/03/TuxRewards_Badge.svg" class="img-fluid" style="align-items: center">
        </div></a>
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
<!--<div class="offcanvas offcanvas-start w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">-->
<!--    <div class="offcanvas-header">-->
<!--        <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>-->
<!--        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
<!--    </div>-->
<!--    <div class="offcanvas-body px-0">-->
<!--        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">-->
<!--            <li class="nav-item">-->
<!--                <a href="#" class="nav-link text-truncate">-->
<!--                    <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-truncate">-->
<!--                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#" class="nav-link text-truncate">-->
<!--                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Orders</span></a>-->
<!--            </li>-->
<!--            <li class="dropdown">-->
<!--                <a href="#" class="nav-link dropdown-toggle  text-truncate" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                    <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Bootstrap</span>-->
<!--                </a>-->
<!--                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">-->
<!--                    <li><a class="dropdown-item" href="#">New project...</a></li>-->
<!--                    <li><a class="dropdown-item" href="#">Settings</a></li>-->
<!--                    <li><a class="dropdown-item" href="#">Profile</a></li>-->
<!--                    <li>-->
<!--                        <hr class="dropdown-divider">-->
<!--                    </li>-->
<!--                    <li><a class="dropdown-item" href="#">Sign out</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#" class="nav-link text-truncate">-->
<!--                    <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Products</span></a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#" class="nav-link text-truncate">-->
<!--                    <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Customers</span> </a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container-fluid">-->
<!--    <div class="row">-->
<!--        <div class="col min-vh-100 py-3">-->
<!--            <button class="btn float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">-->
<!--                <i class="bi bi-arrow-right-square-fill fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>-->
<!--            </button>-->
<!--            Content..-->

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Register Form</h2>
            <div class="text-center mb-5 text-dark">Welcome To News Blog</div>
            <div class="card my-5">

                <form action="/register" method="post" class="card-body cardbody-color p-lg-5">
                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png"
                             class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                             alt="profile">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="full_name" aria-describedby="emailHelp"
                               placeholder="User Name">
<!--                        <svg xmlns="http://127.0.0.1/register" width="16" height="16" fill="red">-->
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
<!--                        </svg>-->
                        <span class="EmailInput_email_error__IJxXf">Please enter your UserName</span>
                    </div>
<!--                    <div class="mb-3">-->
<!--                        <input type="password" class="form-control" id="password" placeholder="Password">-->
<!--                    </div>-->
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Phone number" name="phone">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"  placeholder="Password" name="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button>
                    </div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registered? <a href="#" class="text-dark fw-bold">Create an Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
