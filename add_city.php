<?php
require "header.php";
?>

<div class="u1">
<?php
include "config.php";
if (isset ($_POST["submit"])){
    $name = $_POST['name'];
    $q = "insert into `city` (`name`) values ('$name')";
    $result = mysqli_query($conn,$q);
    if($result > 0){
        echo "<div class='col-12 alert alert-success role='alert' style='background-color:lightgreen; font-size:20px' ><i class='fa-solid fa-check' style='color:green;'></i>City Added!</div>";
    }else{ 
        echo "<div class='col-12 alert alert-success role='alert' style='background-color:lightred; font-size:20px' ><i class='fa-solid fa-xmark' style='color:red;'></i>City Added!</div>";
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
                                <p class="us"></i> <i class="fa-solid fa-building px-1"></i>CITY
                                <p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label1">Name</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="name">

                            </div>


                            <div class="container">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary my-3" style="width:70%;" name="submit" >Submit</button>
                                </div>
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