<?php
// login checker for 'customer' access level
// if access level was not 'Admin', redirect him to login page
if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="Admin"){
    header("Location: {$home_url}admin/index.php?action=logged_in_as_admin");
}
// if $require_login was set and value is 'true'
else if(isset($require_login) && $require_login==true){
    // if user not yet logged in, redirect to login page
    if(!isset($_SESSION['user_id'])){
        header("Location: {$home_url}login.php?action=please_login");
    }
}
if(isset($_SESSION['user_id']) && isset($page_title) && ($page_title=="Login" || $page_title=="Sign Up")) {
    header("Location: {$home_url}profile.php?action=already_logged_in");
}
// if it was the 'login' or 'register' or 'sign up' page but the customer was already logged in
else if(isset($page_title) && ($page_title=="Login" || $page_title=="Sign Up")){
    // if user not yet logged in, redirect to login page
    if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="Customer"){
    }  
}
else{
    // no problem, stay on current page
}
?>