<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
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
            <h2 class="text-center text-dark mt-5">Login Form</h2>
            <div class="text-center mb-5 text-dark">Welcome Back To News Blog</div>
            <div class="card my-5">

                <form action="/login" method="post" class="card-body cardbody-color p-lg-5">
                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png"
                             class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                             alt="profile">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="user_name" aria-describedby="emailHelp"
                               placeholder="User Name">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        <span class="EmailInput_email_error__IJxXf">Please enter your UserName</span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="user_password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button>
                    </div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registered? <a href="/register"
                                                                                                        class="text-dark fw-bold">Create
                            an Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>