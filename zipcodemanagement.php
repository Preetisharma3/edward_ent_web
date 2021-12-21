<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br><br>

    <form>
        <h5 class="text-dark font-weight-bolder my-4 col-3">Zipcode Management</h5>
        <input type="search" name="search" id="searchfield" style="margin-left: 20px;" onkeyup="" placeholder="Search Zipcode">

        <button type="button" id="showinputfrom4" class="btn btn-primary">upload Excel</button>
        <button type="button" id="showinputfrom4" class="btn btn-primary">+New Zipcode </button>




    </form>



    <div class="container">
        <!-- Search form -->

        <div class="row justify-content-center my-5">
            <div class="col-md-12">


                <table class="table table-striped table-bordered dark" id="table">
                    <thead class="thead-dark align=" center">
                        <tr>
                            <th scope="col">Zone</th>
                            <th scope="col">Zipcode</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="showjcm">

                        <tr>
                            <td>Zone 1 </td>
                            <td>99501</td>
                            <td> Houston </td>
                            <td>Alaska </td>
                            <td>Available</td>



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