<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br><br>




<!-- 
    <form>
        <h5 class="text-dark font-weight-bolder my-4 col-3">Assigned Templates</h5>
        <input type="search" width="20px;" placeholder="search Technician& Template">
        <button type="button" bg-color="gray" data-toggle="modal" data-target="#exampleModal">Assign Template</button>



    </form> -->


<!-- 


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-toggle="modal" data-target="#exampleModal">
        <div id="modal-body-custom" class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Enter Following details
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="myForm">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Last Name" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter the Email" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputAddress2">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter the phone" />
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="gender">User Type</label>
                                    <select class="form-control" name="role" id="usertype">
                                        <option value="0">--Select--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">User Name </label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter the Username" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress2">Password</label>
                                        <input type="text" class="form-control" id="pass" placeholder="Enter the Password" />
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="inputZip">Attach Passport Size Image</label>
                                        <input type="file" class="form-control" id="image" placeholder="state" />
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="addEmployee()">
                        Submit
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div> -->


    <div class="container">
        <!-- Search form -->

        <div class="row justify-content-center my-5">
            <div class="col-md-12">


                <table class="table table-striped table-bordered dark" id="table">
                    <thead class="thead-dark align=" center">
                        <tr>
                            <th scope="col">Template name</th>
                            <th scope="col">Technician</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="showjvf">

                        <tr>
                            <td>Basic Info</td>
                            <td>steve Smith</td>


                            <td>
                                <button type="button" class="btn mx-1" name="edit">
                                    <i class="fa fa-pencil text-warning"></i>
                                </button>
                                <button type="button" class="btn mx-2" name="delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include_once('footer.php') ?>