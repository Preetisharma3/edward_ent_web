<?php
$current_page = $_SERVER['REQUEST_URI'];
//echo $current_page; die;
?>

<div class="sidebar">
    <div class="logo-details">
        <img class="img-profile rounded-circle">
        <span class="logo_name">Technician </span>
    </div>
    <ul class="nav-links">
        <li>
            <a class="<?php echo $current_page == '/EE1/pages/users.php' ? 'active' : '' ?>" href="user">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Schedule</span>
            </a>
        </li>

        <li>
            <a class="<?php echo $current_page == '/crmproject33/pages/opportunity.php' ? 'active' : '' ?>" href="jobfolder.php">
                <i class='bx bx-list-ul'></i>
                <span class="links_name">Job Visit Module</span>
            </a>
        </li>
        <li>
            <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="jobvisitmodule.php">
                <i class='bx bx-folder'></i>
                <span class="links_name">Job Folder</span>
            </a>
        </li>

        <li>
            <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="managementcategory.php">
                <i class='bx bx-pie-chart'></i>
                <span class="links_name">Clock In/Out</span>
            </a>
        </li>
        <li>
            <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="jobagreement.php">
                <i class='bx bx-folder'></i>
                <span class="links_name">Estimate</span>
            </a>
        </li>
        <li>
            <a class="<?php echo $current_page == '/crmproject33/pages/customer.php' ? 'active' : '' ?>" href="supplierslist.php">
                <i class='bx bx-mice'></i>
                <span class="links_name">Invoice</span>
            </a>
        </li>

</div>