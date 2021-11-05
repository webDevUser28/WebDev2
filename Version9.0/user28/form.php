<html>
<!--Version 5.0
    Name: Lisa Latzelsberger
    Date Completed: 11/05/2021
-->

<head>
    <title>Bootstrap Form</title>

    <!-- Bootstrap meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Bootstrap sample">

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="icon" type="image/x-icon" href="images/log in.jpeg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- Custom styles for this template -->
    <style>
        .administration {
            margin: 20px;
        }

        .btn-primary {
            color: #fff;
            background-color: rgb(147, 23, 179);
            ;
            border-color: rgb(147, 23, 179);
            ;
        }
    </style>

</head>

<body>

    <h1>Lessons for learning how to Paint & Draw</h1>
    <h5>The lessons are available on Fridays from 5pm - 7pm</h5>
    <p>Login to register for lesson</p>

    <div class="administration">
        <form>
            <!--action="confirmation.html" method="post">-->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <a href="ebay.php" class="btn btn-primary">Sign in</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>