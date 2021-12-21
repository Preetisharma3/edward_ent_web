<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/fonts/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fonts/font-awesome.min.css">

    <title>EE</title>
    <style>
        #btn {
            border: none;
            border-bottom: 1px solid #ccc;
            margin-top: 2px solid black;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .hover {
            border: none;
            /* width: 50px;
  height: 32px; */
            background-color: #eee;
            transition: all ease-in-out 0.2s;
            cursor: pointer;

        }

        .hover:hover {
            /* border: 1px solid #888; */
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <div class="row bg-light" style="display: flex; justify-content: center ;margin-top: 15%; align-items: center;">
                    <div class="col-sm-3 ">
                        <!-- One of three columns -->
                        <img src="./img/login.png" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-sm-3 ">
                        <h5 class="text-center">Login</h5>
                        <form class="my-4">
                            <div class="input-group input-group-sm mb-3">

                                <span class="border-bottom border-dark"></span>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter Email">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder=" Enter Password">
                                </div>
                            </div>


                            <div class="dropdown">
                                <label for="button" style=" cursor: pointer;" class="font-weight-bold" id="btn">Forget Password?</label>
                                <button class="btn btn-primary dropdown-toggle float-right" type="button" data-toggle="dropdown">Login
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <label for="button" style=" cursor: pointer;" class="hover"> As Admin</label><br>
                                    <label for="button" style=" cursor: pointer;" class="hover">As Employee</label><br>
                                    <label for="button" style=" cursor: pointer;" class="hover">As Technician</label>


                                    </button>
                                </ul>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>