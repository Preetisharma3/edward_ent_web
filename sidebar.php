<?php
$current_page = $_SERVER['REQUEST_URI'];
//echo $current_page; die;
?>

<div class="sidebar">
  <div class="logo-details">
    <img class="img-profile rounded-circle">
    <span class="logo_name">Admin </span>
  </div>
  <ul class="nav-links">
    <li>
      <a class="<?php echo $current_page == '/EE1/pages/users.php' ? 'active' : '' ?>" href="users.php">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Users</span>
      </a>
    </li>
    <li>
      <a class=" <?php echo $current_page == '/crmproject33/pages/lead.php' ? 'active' : '' ?>" href="technicianlist.php">
        <i class='bx bx-box'></i>
        <span class="links_name">Technician List</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/opportunity.php' ? 'active' : '' ?>" href="jobfolder.php">
        <i class='bx bx-list-ul'></i>
        <span class="links_name">Job Folder</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="jobvisitmodule.php">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Job Visit Module</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="assigntemplate.php">
        <i class='bx bx-file'></i>
        <span class="links_name">Assign Template</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="managementcategory.php">
        <i class='bx bx-pencil'></i>
        <span class="links_name">Manage Categories</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="jobagreement.php">
        <i class='bx bx-folder'></i>
        <span class="links_name">Job Agreement</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="supplierslist.php">
        <i class='bx bx-list-ol'></i>
        <span class="links_name">Suppliers List</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="zipcodemanagement.php">
        <i class='bx bx-area'></i>
        <span class="links_name">Zipcode Management</span>
      </a>
    </li>
    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="pricing.php">
        <i class='bx bx-rupee'></i>
        <span class="links_name">Pricing</span>
      </a>
    </li>

    <li>
      <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="estimate.php">
        <i class='bx bx-note'></i>
        <span class="links_name">Estimate
        </span>
      </a>
    </li>
    <!-- <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li> -->
  </ul>
</div>