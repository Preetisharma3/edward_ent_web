<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br><br>

    <div>
       

            <div class="form-class align-items-center d-flex my-4">
                <div class="col-auto">
                    <h5 class="text-dark font-weight-bolder my-4">Job visit Module</h5>
                </div>
                <div class="form-group has-search col-auto col-4">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search" id="search">
                </div>

                <div class="form-group col-auto ">


                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jobvisitmodule">Add New Template</button>
                </div>
            </div>

        
            <!-- Content for Job Module -->
    <div class="container">
        <!-- Search form -->

        <div class="row justify-content-center my-5">
            <div class="col-md-12">


                <table class="table table-stripedtable table-bordered dark" id="table">
                    <thead class="thead-dark " align="center">
                        <tr>
                            <th scope="col">Template name</th>
                            <th scope="col">Status</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="showjvf" align="center">

                        <tr>
                            <td>Basic Info</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class=" slider round"></span>
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
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- job visit module modal -->

    


<div class="modal fade" id="jobvisitmodule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Template</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="myForm">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Template Name</label>
                                        <input type="text" class="form-control" id="tname"  />
                                    </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress2">Question</label>
                                            <input type="text" class="form-control" id="question"
                                                 />
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label for="gender">Question Type</label>
                                            <select class="form-control" name="role" id="quetype">
                                                <option value="0">--Select--</option>
                                            </select>
                                        </div>
                                        <div class="form-check" style="margin-top:30px;margin-left: 10px;">
                                            <!-- <input type="checkbox" class="form-check-input" id="required"> -->
                                            <!-- <label class="form-check-label" for="exampleCheck1">Required</label>             -->
                                             </div> 
                                             </div>
                                             <div class="form-row">
                                              <div class="form-check" style="margin-top:25px;margin-left: 10px;">
                                                    <!-- <input type="checkbox" class="form-check-input" id="required"> -->
                                                    <label class="form-check-label" for="exampleCheck1"></label>            
                                                     </div> 
                                            <!-- <div class="form-group col-md-11" style="margin-top:-65px;margin-left: 50px;">
                                                <label for="inputAddress">Label</label>
                                                <input type="text" class="form-control" id="lable"
                                                    placeholder="" />
                                            </div>                                           -->
                                        </div>

                                             <div class="form-row">
                                                <div class="form-group col-md-12">
                                                 <label for="inputEmail4">Answer</label>
                                                <input type="text" class="form-control" id="tname"  />
                                                </div>
                                            </div>
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <!-- <label for="inputAddress2">Question</label>
                                                    <input type="text" class="form-control" id="question"
                                                        placeholder="" /> -->
                                                </div> 
                                                 <!-- <div class="form-group col-md-4 ">
                                                    <label for="gender">Question Type</label>
                                                    <select class="form-control" name="role" id="quetype">
                                                        <option value="0">--Select--</option>
                                                    </select>
                                                </div>  -->
                                                <div class="form-check" style="margin-top:35px;margin-left: 10px;">
                                                    <!-- <input type="checkbox" class="form-check-input" id="required"> -->
                                                    <!-- <label class="form-check-label" for="exampleCheck1">Required</label>             -->
                                                     </div> 
                                                     </div>
                                                     <button type="button" class="btn btn-primary"style="margin-top:25px;">
                                                        Save
                                                    </button>
                                                
                                                    <div style="margin-top: 10px;"> 
                                                        <h5>Signatures from customer</h5>
                                                        
                                                        <p id="signature">Is customer on site?</p>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div>
                                                      
                                                      <div class="form-group col-md-12" style="margin-top: 25px;">
                                                        <!-- <label for="inputAddress">Materials</label> -->
                                                        <input type="text" class="form-control" id="materials"
                                                            placeholder="Enter the Materials" />
                                                    </div>
                                                   
                                   </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for show content -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showContent">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="showContent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id=" formdata1">
                    <div class="form-class align-items-center d-flex">
                        <div class="form-group">
                             <label for="exampleFormControlInput1">Template Name</label>
                             <input type="text" class="form-control" id="" placeholder="">
                         </div>
</br>
                        <div class="col-auto">
                            <select class="form-control"  id="" style="margin-top:15px;">
                               <option value="Choose Job Folder">--Choose status--</option> 
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <?php include_once('footer.php') ?>