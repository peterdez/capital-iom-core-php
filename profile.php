<?php
// core configuration
include_once "config/core.php";
// set page title
$page_title="Profile";
// include login checker
$require_login=true;
include_once "login_checker.php";
// include page header HTML
include_once 'layout_head.php';
echo "<div class='col-md-12'>";
    // to prevent undefined index notice
    $action = isset($_GET['action']) ? $_GET['action'] : "";
    // if login was successful
    if($action=='login_success'){
        echo "<div class='alert alert-info'>";
            echo "<strong>Hi " . $_SESSION['firstname'] . ", welcome back!</strong>";
        echo "</div>";
    }
    // if user is already logged in, shown when user tries to access the login page
    else if($action=='already_logged_in'){
        echo "<div class='alert alert-info'>";
            echo "<strong>You are already logged in.</strong>";
        echo "</div>";
    }
    // content once logged in
echo "</div>";
?>
<section>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $_SESSION['username']?></span><span class="text-black-50"><?php echo $_SESSION['email']?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Personal Information</h4>
                </div>
                <div class="row mt2">
                <h6 class="text-muted">Name</h6>
                <h2><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<?php
// footer HTML and JavaScript codes
include 'layout_foot.php';
?>