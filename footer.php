<!-- Add user Modal -->
<style>
  .modal-body-custom {
    width: 100%;
  }
</style>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" id="modal-body-custom" role="document">
    <div class="modal-content" id="modal-body-custom">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-lg"">

        <form id=" formdata">

        <div class="container">
          <img src="./img/avtar1.png" class="img-circle" alt="" width="100" height="100">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6 ">
            <label for="inputEmail4">First Name</label>
            <input type="text" id="fname" class="form-control" placeholder="" />
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Last Name</label>
            <input type="text" id="lname" class="form-control" placeholder="" />
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="number" id="phone" class="form-control" placeholder="" />
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" id="email" class="form-control" placeholder="" />
          </div>
        </div>
        <!-- username and password -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Username</label>
            <input type="text" id="username" class="form-control" placeholder="" />
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" id="password" class="form-control" placeholder="" />
          </div>
        </div>
        <div class="form-row">
          <!-- user type -->
          <div class="form-group col-md-6">
            <label for="role-type">User type</label>
            <select class="form-control" name="role-type" id="roletype">
              <option value="Admin">Select User Type</option>
              <option value="Admin">Admin</option>
              <option value="Employee">Employee</option>
              <option value="Technician">Technician</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <select name="status" id="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" id="showinputfrom" class="btn btn-primary" onclick="userpostdata()">Save</button>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>







<!-- 2nd update modal -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="formdata1" onsubmit="updateUser()">

          <div class="container">
            <img src="./img/avtar1.png" class="img-circle" alt="" width="100" height="100">
          </div>

          <div class="form-row">
            <div class="form-group col-md-6 ">
              <label for="inputEmail4">First Name</label>
              <input type="text" id="fname1" class="form-control" placeholder="" />
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Last Name</label>
              <input type="text" id="lname1" class="form-control" placeholder="" />
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Phone</label>
              <input type="number" id="phone1" class="form-control" placeholder="" />
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" id="email1" class="form-control" placeholder="" />
            </div>
          </div>
          <!-- username and password -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Username</label>
              <input type="text" id="username1" class="form-control" placeholder="" />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" id="password1" class="form-control" placeholder="" />
            </div>
          </div>
          <div class="form-row">
            <!-- user type -->
            <div class="form-group col-md-6">
              <label for="role-type">User type</label>
              <select class="form-control" name="role-type" id="roletype1">
                <option value="Admin">Select User Type</option>
                <option value="Admin">Admin</option>
                <option value="Employee">Employee</option>
                <option value="Technician">Technician</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <select name="status" id="status1" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>

            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
      </div>
      </form>

    </div>
  </div>
</div>
</div>

<!-- Assign Folder Modal -->



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assignFolder">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="assignFolder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Folder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-auto">
                <select class="form-control mt-2" name="role-type" name="role" >
                    <option value="0">Choose Job Folder</option>
                    <option value="one" class="form-check-input" type="checkbox">Folder One</option>
                    <option value="Two">Folder Two</option>
                    <option value="Three">Folder Three</option>
                    <option value="Four">Folder Four</option>
                    <option value="Five">Folder Five</option>
                    <option value="Six">Folder Six</option>

                </select>
            </div>
</br>
            <div class="col-auto">
                <select class="form-control" name="role-type" name="role">
                    <option value="0">Choose Technician</option>
                    <option value="one" class="form-check-input" type="checkbox">Folder One</option>
                    <option value="Two">Folder Two</option>
                    <option value="Three">Folder Three</option>
                    <option value="Four">Folder Four</option>
                    <option value="Five">Folder Five</option>
                    <option value="Six">Folder Six</option>

                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
  //let sidebar = document.querySelector(".sidebar");
  //let sidebarBtn = document.querySelector(".sidebarBtn");
  // sidebarBtn.onclick = function() {
  //   sidebar.classList.toggle("active");
  //   if(sidebar.classList.contains("active")){
  //   sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
  // }else
  //   sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  // }
  //  
</script>
<script src="./js/custom.js"></script>
<script src="./js/script.js"></script>
</body>

</html>