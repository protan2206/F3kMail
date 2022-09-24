<?php
echo '
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail Sender | Home </title>
    <script src="https://kit.fontawesome.com/f85d117a1e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container">
        <p class="text-light h2 text-center font-weight-bold">Mail Sender</p>
        <p class="h5 text-center font-weight-bold text-uppercase" , style="color:rgb(255, 0, 0);">Created by : Protan
            Halder</p>
        <div class="w-100 alert alert-danger" role="alert">
            <p class="h6 text-center font-weight-bold">Do it for Fun. Do not MissUse it.</p>
        </div>
        <form action="sender.php" method="GET">

            <div class="rounded p-1 bg-success mb-2 form-group">
                <label class="text-light"  for="exampleInputEmail1">Sender Email address</label>
                <input type="text" name="from" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Sender Enter email">
            </div>

            <div class="rounded p-1 bg-primary mb-2 form-group">
                <label class="text-light"   for="exampleInputEmail1">Recever Email address</label>
                <input type="email" name="to" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Recever Enter email">
            </div>

            <div class="rounded p-1 bg-success mb-2 form-group">
                <label class="text-light" for="exampleInputEmail1">Email Subject</label>
                <input type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Email Subject">
            </div>

            <div class="rounded p-1 bg-primary mb-2 form-group">
                <label class="text-light" for="exampleInputEmail1">Information</label>
                <input type="text" name="message" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Information">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class=" btn btn-primary">Send</button>
            </div>
        </form>





        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/protanhalder.2/" role="button"><i
                            class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/ProtanHalder" role="button"><i
                            class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://protan2206.github.io/ProtanHalder/" role="button"><i
                            class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/protanhalder/" role="button"><i
                            class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://bd.linkedin.com/in/protanhalder" role="button"><i
                            class="fab fa-linkedin-in"></i></a>

                    <!-- Telegram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://t.me/protan2206" role="button"><i
                        class="fab fa-brands fa-telegram"></i></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/protan2206/"
                        role="button"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="rounded text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-white" href="https://www.github.com/protan2206/">PROTAN HALDER</a>
            </div>
            <!-- Copyright -->
        </footer>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>
';