<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--logo icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>News - Events</title>
    <link rel="stylesheet" href="css/newsEvents.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <!-- NavBar-->
    <?php include 'includes/navbar.php'; ?>

    <h2 style="text-align: center; padding-top: 15px;">News - Events</h2>

    <div class="container-fluid main">
        <div class="row bg">
            <div class="col-md-10 offset-md-1 ">
                <div class="row">
                    <div class="col-md-5">
                        <img src="css/Pictures/earrings.jpg" class="d-block w-100" alt="" width="" height="150px"
                            alt="">
                    </div>
                    <div class="col-md-7">
                        <h3><u> Event Name</u></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti ullam excepturi quo
                            porro consequatur
                            minima consequuntur! Necessitatibus, molestias delectus illum,
                            recusandae magnam, consectetur porro tempora distinctio est dignissimos dolorum?
                            <span id="dots">...</span><span id="more">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                A, corporis qui voluptatum reiciendis deleniti quae velit modi! Eligendi,
                                nostrum maiores fugiat veritatis omnis dolorem voluptatum quam quidem autem velit
                                cupiditate?</span>
                        </p>
                        <button onclick="myFunction()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row bg">
            <div class="col-md-10 offset-md-1 ">
                <div class="row">
                    <div class="col-md-5">
                        <img src="css/Pictures/earrings.jpg" class="d-block w-100" alt="" width="" height="150px"
                            alt="">
                    </div>
                    <div class="col-md-7">
                        <h3><u> Event Name</u></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti ullam excepturi quo
                            porro consequatur
                            minima consequuntur! Necessitatibus, molestias delectus illum,
                            recusandae magnam, consectetur porro tempora distinctio est dignissimos dolorum?
                            <span id="dots">...</span><span id="more">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                A, corporis qui voluptatum reiciendis deleniti quae velit modi! Eligendi,
                                nostrum maiores fugiat veritatis omnis dolorem voluptatum quam quidem autem velit
                                cupiditate?</span>
                        </p>
                        <button onclick="myFunction()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row bg">
            <div class="col-md-10 offset-md-1 ">
                <div class="row">
                    <div class="col-md-5">
                        <img src="css/Pictures/earrings.jpg" class="d-block w-100" alt="" width="" height="150px"
                            alt="">
                    </div>
                    <div class="col-md-7">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti ullam excepturi quo
                            porro consequatur
                            minima consequuntur! Necessitatibus, molestias delectus illum,
                            recusandae magnam, consectetur porro tempora distinctio est dignissimos dolorum?
                            <span id="dots">...</span><span id="more">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                A, corporis qui voluptatum reiciendis deleniti quae velit modi! Eligendi,
                                nostrum maiores fugiat veritatis omnis dolorem voluptatum quam quidem autem velit
                                cupiditate?</span>
                        </p>
                        <button onclick="myFunction()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>