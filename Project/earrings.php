<!DOCTYPE html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--logo icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Rings</title>
    <link rel="stylesheet" type="text/css" href="css/jewellery.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>

    <!-- Nav Bar -->
    <?php include 'includes/navbar.php'; ?>

    <!--Side navbar-->
    <?php include 'includes/sideNavBar.php'; ?>

    <div id="main">
        <div class="container bg1">
            <div class="row">
                <div class="col-md-7 offset-md-4">
                    <div class=row>
                        <div class=col-md-4>
                            <a href=""><img src="css/Pictures/earrings.jpg" class="d-block " alt="" width=" 160px"
                                    height="150px"></a>
                        </div>
                        <div class=col-md-3>
                            <h4><u>item name</u></h4>
                            <p>Description</p>
                            <h6><i class="fa fa-eur">15</i></h6>
                            <h6><i class="fa fa-heart-o"></i>Add to favorites</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container bg1">
            <div class="row">
                <div class="col-md-7 offset-md-4">
                    <div class=row>
                        <div class=col-md-4>
                            <a href=""><img src="css/Pictures/earrings.jpg" class="d-block " alt="" width=" 160px"
                                    height="150px"></a>
                        </div>
                        <div class=col-md-3>
                            <h4><u>item name</u></h4>
                            <p>Description</p>
                            <h6><i class="fa fa-eur">15</i></h6>
                            <h6><i class="fa fa-heart-o"></i>Add to favorites</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container bg1">
            <div class="row">
                <div class="col-md-7 offset-md-4">
                    <div class=row>
                        <div class=col-md-4>
                            <a href=""><img src="css/Pictures/earrings.jpg" class="d-block " alt="" width=" 160px"
                                    height="150px"></a>
                        </div>
                        <div class=col-md-3>
                            <h4><u>item name</u></h4>
                            <p>Description</p>
                            <h6><i class="fa fa-eur">15</i></h6>
                            <h6><i class="fa fa-heart-o"></i>Add to favorites</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container bg1">
            <div class="row">
                <div class="col-md-7 offset-md-4">
                    <div class=row>
                        <div class=col-md-4>
                            <a href=""><img src="css/Pictures/earrings.jpg" class="d-block " alt="" width=" 160px"
                                    height="150px"></a>
                        </div>
                        <div class=col-md-3>
                            <h4><u>item name</u></h4>
                            <p>Description</p>
                            <h6><i class="fa fa-eur">15</i></h6>
                            <h6><i class="fa fa-heart-o"></i>Add to favorites</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container bg1">
            <div class="row">
                <div class="col-md-7 offset-md-4">
                    <div class=row>
                        <div class=col-md-4>
                            <a href=""><img src="css/Pictures/earrings.jpg" class="d-block " alt="" width=" 160px"
                                    height="150px"></a>
                        </div>
                        <div class=col-md-3>
                            <h4><u>item name</u></h4>
                            <p>Description</p>
                            <h6><i class="fa fa-eur">15</i></h6>
                            <h6><i class="fa fa-heart-o"></i>Add to favorites</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
    </div>
<br>


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


    <!--Search-->
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i;
            input = document.getElementById("mySearch");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myMenu");
            li = ul.getElementsByTagName("li");

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>

    <!--logo icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>

</html>