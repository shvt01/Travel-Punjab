<?php
require "header.php";
?>

<div class="u1">
    <?php
    include "config.php";
    $id = $_GET['id'];
    $q = "select * from `category` where id='$id'";
    $result = mysqli_query($conn,$q);
                    $data = mysqli_fetch_assoc($result);
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $q = "update `category` set `name`='$name' where id='$id'";
                        $result = mysqli_query($conn,$q);
                    
                    if($result > 0){
                        
                        echo "<script>window.location.assign('show_category.php?msg=Record Updated');</script>";
                    }else{
                        echo "<script>window.location.assign('show_category.php?msg=Try Again.');</script>";
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
                                <p class="us"></i> <i class="fa-solid fa-bars-staggered px-1"></i>CATEGORY
                                <p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label1">Name</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="name" value="<?php echo $data['name'];?>">

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