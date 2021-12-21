<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br><br>

    <div class="myClass">
        <div class="text-right" id="add_btn">
            <button type="button" class="btn btn-primary" id="add_button" data-toggle="modal" data-target="#exampleModal">Add New User</button>


        </div>
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="search" name="search" id="searchfield" class="form-control" width="50px;" onkeyup="searchshow()" placeholder="Search">
        </div>


    </div>

    <style>
        .modal-content {
            width: 100%;
        }
    </style>


    <div class="container">
        <!-- Search form -->

        <div class="row justify-content-center my-5">
            <div class="col-md-12">


                <table class="table table-striped table table-bordered dark" id=" table">
                    <thead class="thead-dark align=" center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <!-- <th scope="col">Password</th> -->
                            <th scope="col">Phone</th>
                            <th scope="col">Role Type</th>
                            <th scope="col">Inactive/Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center" id="show">

                        <!-- <tr>
                            <td>1</td>
                            <td>A</td>
                            <td>A@gmail.com</td>
                            <td>Admin</td>
                            <td>password</td>
                            <td>567890</td>
                            <td>Employee</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class=" slider round" ></span>
                                </label>
                            </td>
                            <td>
                                <button type="button" class="btn mx-1" name="edit">
                                    <i class="fa fa-pencil text-warning"></i>
                                </button>
                                <button type="button" class="btn mx-2" name="delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr> -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include_once('footer.php') ?>