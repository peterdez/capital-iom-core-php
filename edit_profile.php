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
// if the form was submitted
if($_POST){
    //$user->username=$_POST['username'];
    $user->id = $_SESSION['user_id'];
    $user->firstname=$_POST['firstname'];
    //$user->lastname=$_POST['lastname'];
    if($user->update_profile()){
        $_SESSION['firstname'] = $user->firstname;
        echo "<div class='alert alert-info'>";
            echo "Successfully updated profile.";
        echo "</div>";
        // empty posted values
        $_POST=array();
    }else{
        echo "<div class='alert alert-danger' role='alert'>Unable to update profile. Please try again.</div>";
    }
    
}
// show profile edit form
?>
<section>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method='post'>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="" value="<?php echo $_SESSION['firstname'] ?>">
                    </div>
                    <div class="col-md-6"><label class="labels">Surname</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $_SESSION['lastname'] ?>" placeholder="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <!--div class="mt-5 text-center"><button type="submit" class="btn btn-primary profile-button">Save Profile</button></div-->
                <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" value="Save Profile"></div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
       </form>
    </div>
</div>
</div>
</div>
</section>
<?php
// footer HTML and JavaScript codes
include_once "layout_foot.php";
?>