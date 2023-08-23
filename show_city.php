<?php
require "header.php";
?>




<div class="u1">
<?php
                    if(isset($_GET['msg'])){
                        echo "<div class='col-12 alert alert-info'style='background-color:lightgreen; font-size:20px'>" .$_GET['msg']."</div>";
                    }
                ?>

<div class="col-md-7 mx-auto py-4 ">
        <section class="no-padding msection section-sm section-first bg-default text-md-left" style="  border-radius: 10px;">
            <div class="container">
                <div class="row row-50 justify-content-center align-items-xl-center">
                    <div class="col-md-12 col-lg-8 col-xl-5">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CITY NAME</th>
      <th scope="col">DELETE</th>
      <th scope="col">EDIT</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
 include 'config.php';
 $selectquery = "SELECT * from city";
 $query = mysqli_query($conn,$selectquery);
 $i=1;
 foreach($query as $data){
    ?>
    <tr>
         <td><?php echo $i;?></td> 
         <td><?php echo $data['name'];?></td>
         <td><a href="delete_city.php?id=<?php echo $data['id'];?>" class="text-danger"><i class="fa-solid fa-trash-can"></i></a></td>
         <td><a href="editcity.php?id=<?php echo $data['id'];?>" class="text-danger"><i class="fa-solid fa-pen-to-square"></i></a></td>
        
    </tr>
    <?php
    $i++;
 }
?>
  </tbody>
</table>
                    </div>
                </div>
            </div>

        </section>
    </div>

    </div>


<?php
require "footer.php";
?>