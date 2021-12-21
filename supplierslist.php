<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br><br>

    <form>
        <h5 class="text-dark font-weight-bolder my-4 col-3">Supplier</h5>
        <input type="search" name="search" id="searchfield" style="margin-left: 20px;" onkeyup="" placeholder="Search supplier">

        <button type="button" id="showinputfrom3" class="btn btn-info">upload Excel</button>
        <button type="button" id="showinputfrom3" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">+New supplier</button>


    </form>



    <div class="container">
        <!-- Search form -->

        <div class="row justify-content-center my-5">
            <div class="col-md-12">


                <table class="table table-striped table-bordered dark" id="table">
                    <thead class="thead-dark align=" center">
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">phone</th>
                            <th scope="col">category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="showsl">

                        <tr>
                            <td>steve Smith</td>
                            <td>(555)-556-5556</td>
                            <td>Carpentry</td>

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


    <!-- ADD NEW SUPPLIER MODAL -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" id="modal-body-custom" role="document">
            <div class="modal-content" id="modal-body-custom">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-lg"">

        <form id=" formdata">

                    <div class="form-row">
                        <div class="form-group col-md-4 ">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" id="firstname" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Last Name</label>
                            <input type="text" id="lastname" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Phone</label>
                            <input type="number" id="sphone" class="form-control" placeholder="" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4 ">
                            <label for="input">Street Address</label>
                            <input type="text" id="streetaddress" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input">State</label>
                            <input type="text" id="state" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input">City</label>
                            <input type="number" id="city" class="form-control" placeholder="" />
                        </div>
                    </div>




                    <div class="form-row">
                        <div class="form-group col-md-4 ">
                            <label for="inputEmail4">ZipCode</label>
                            <input type="text" id="ZipCode" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Company Name</label>
                            <input type="text" id="companyname" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Category</label>
                            <input type="number" id="category" class="form-control" placeholder="" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" id="showinputfrom" class="btn btn-primary" onclick="">Save</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php') ?>