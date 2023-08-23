<?php
require "header.php";
?>

<div class="u1">
<?php
include "config.php";
if (isset ($_POST["submit"])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $q = "select * from `admin` where `email`='$email' and `password`='$password'";
    $result = mysqli_query($conn,$q);
    if (mysqli_num_rows($result) > 0) {
        //login
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        echo "<script>window.location.assign('about.php');</script>";
    } else {
        // invalid credentials
        echo "<div class='col-12 alert alert-danger'>Invalid Email/Password.</div>";
    }
    if (isset ($_POST["submit"])){

    }

    
}
?>
    <div class="col-md-5 mx-auto py-4 ">
        <section class="no-padding msection section-sm section-first bg-default text-md-left" style="  border-radius: 10px;">
            <div class="container">
                <div class="row row-50 justify-content-center align-items-xl-center">
                    <div class="col-md-12 col-lg-8 col-xl-8">
                        
                        <form method="post" class="myform">

                            <div class="text-center">
                                <p class="us"><i class="fa-solid fa-user px-2"></i>WELCOME
                                <p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label1">EMAIL</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email">

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label1">password</label>
                                <input type="password" class="form-control" id="" aria-describedby="emailHelp" name="password">

                            </div>


                            <div class="container">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary my-3" style="width:70%;" name="submit" >Submit</button>
                                </div><a href="#">Forgot password?</a>
<p>Don't have an account?<a href="user.php">Create account</a></p>
                                
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
<?php
require "footer.php";
?>