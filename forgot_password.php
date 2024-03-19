<?php
// core configuration
include_once "config/core.php";
// set page title
$page_title = "Forgot Password";
$require_login=true;
// include login checker
include_once "login_checker.php";
// include classes
include_once "config/database.php";
include_once 'objects/user.php';
//include_once "libs/php/utils.php";
// get database connection
$database = new Database();
$db = $database->getConnection();
// initialize objects
$user = new User($db);
//$utils = new Utils();
// include page header HTML
include_once "layout_head.php";
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
$new_password_err_class = !empty($new_password_err) ? 'is-invalid' : '';
$confirm_password_err_class = !empty($new_password_err) ? 'is-invalid' : '';
// if the login form was submitted
if($_POST){
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        $user->password = $new_password;
        $user->id = $_SESSION['user_id'];
        if($user->reset()){
            echo "<div class='alert alert-info'>";
                echo "Successfully reset password.";
            echo "</div>";
            // empty posted values
            $_POST=array();
        }else{
            echo "<div class='alert alert-danger' role='alert'>Unable to register. Please try again.</div>";
        }
    }
    
}
// show reset password HTML form
echo "<div class='col-md-4'></div>";
echo "<div class='col-md-4'>";
    echo "<div class='account-wall'>
        <div id='my-tab-content' class='tab-content'>
            <div class='tab-pane active' id='login'>
                <img class='profile-img' src='images/login-icon.png'>
                <form class='form-signin' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>
                    <input type='password' name='new_password' class='form-control " . $new_password_err_class . "' 
                    value='" . $new_password . "'
                    placeholder='Your password' required autofocus>
                    <span class='invalid-feedback'>" . $new_password_err . "</span>
                    <input type='password' name='confirm_password' class='form-control " . $confirm_password_err_class . "'
                    placeholder='Your password' required autofocus>
                    <input type='submit' class='btn btn-lg btn-primary btn-block' value='Send Reset Link' style='margin-top:1em;' />
                    <span class='invalid-feedback'>" . $confirm_password_err . "</span>
                </form>
            </div>
        </div>
    </div>";
echo "</div>";
echo "<div class='col-md-4'></div>";
// footer HTML and JavaScript codes
include_once "layout_foot.php";
?>