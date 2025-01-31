<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
</head>
<section class="mb-4" style="display: inline-block; margin-left: 300px">

    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
        directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="/index" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control"
                                   style="border: 0; border-bottom: 1px solid #ced4da; border-radius: 0; outline: 0;">
                            <label for="name" class="" style="">Your name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control"
                                   style="border: 0; border-bottom: 1px solid #ced4da; border-radius: 0; outline: 0;">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control"
                                   style="border: 0; border-bottom: 1px solid #ced4da; border-radius: 0; outline: 0;">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"
                                      style="border: 0; border-bottom: 1px solid #ced4da; border-radius: 0; outline: 0;"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();"
                   style="margin-right: 700px">Send</a>
            </div>
            <div class="status"></div>
        </div>

        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0" style="margin-top: 0 !important;">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>ISFAHAN, IR</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>0123456789</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@tuxnews.com</p>
                </li>
            </ul>
        </div>

    </div>

</section>
</html>