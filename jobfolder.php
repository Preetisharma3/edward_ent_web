<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br><br>
kk
    <form>
        <h5 class="text-dark font-weight-bolder my-4 col-3">Job Folder</h5>
        <div class="form-class align-items-center d-flex">
            <div class="col-auto">
                <select class="form-control" name="role-type" id="role" name="role">
                    <option value="Admin">Choose Agreements</option>
                    <option value="one">One Agreement</option>
                    <option value="Two">Two Agreement</option>
                    <option value="Three">Three Agreement</option>
                    <option value="Four">Four Agreement</option>
                    <option value="Five">Five Agreement</option>
                    <option value="Six">Six Agreement</option>
                </select>
            </div>
            <div class="col-auto">
                <select class="form-control" name="role-type" id="role" name="role">
                    <option value="Admin">Choose Job Folder</option>
                    <option value="one" class="form-check-input" type="checkbox">Folder One</option>
                    <option value="Two">Folder Two</option>
                    <option value="Three">Folder Three</option>
                    <option value="Four">Folder Four</option>
                    <option value="Five">Folder Five</option>
                    <option value="Six">Folder Six</option>

                </select>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">Assign Folder</button>
                <button type="submit" class="btn btn-primary mb-2">Save</button>
            </div>
        </div>
    </form>


    <!-- ASSIGN-FOLDER MODAL -->

    <!-- The Modal -->
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

        <form id=" formdata1">
                    <div class="form-class align-items-center d-flex">
                        <div class="col-auto">
                            <select class="form-control" name="role-type" id="role" name="role">
                                <option value="Admin">Choose Agreements</option>
                                <option value="one">One Agreement</option>
                                <option value="Two">Two Agreement</option>
                                <option value="Three">Three Agreement</option>
                                <option value="Four">Four Agreement</option>
                                <option value="Five">Five Agreement</option>
                                <option value="Six">Six Agreement</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <select class="form-control" name="role-type" id="role" name="role">
                                <option value="Admin">Choose Job Folder</option>
                                <option value="one" class="form-check-input" type="checkbox">Folder One</option>
                                <option value="Two">Folder Two</option>
                                <option value="Three">Folder Three</option>
                                <option value="Four">Folder Four</option>
                                <option value="Five">Folder Five</option>
                                <option value="Six">Folder Six</option>

                            </select>
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

        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-md-12">


                    <table class="table table-striped table-bordered dark" id="table">
                        <thead class="thead-dark align=" center">
                            <tr>
                                <th scope="col">Folder</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Date of Original visit</th>
                                <th scope="col">Short Description</th>
                                <!-- <th scope="col">Password</th> -->
                                <th scope="col">Status</th>
                                <th scope="col">Assigned Staff</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody align="center" id="showjf">

                            <tr>
                                <td>Folder One</td>
                                <td>Steve Smith</td>
                                <td>October 10, 2021</td>
                                <td>Plumbing Work</td>
                                <td>Active</td>
                                <td>Robert Henry </td>


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