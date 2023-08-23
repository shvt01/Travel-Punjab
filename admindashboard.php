<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <section class="header">
        <div class="logo" style="width:80% ;">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Exploring<span><em>ਪੰਜਾਬ</em></span></h2>
        </div>
        <?php
session_start();
?>
        <div style="width:20% ;"><h3 style="color: #01b3a7; font-size: 1.5em;" >Welcome <?php echo $_SESSION['name'];?></h3></div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="add_city.php">
                        <span class="icon icon-2"><i class="ri-building-2-line"></i></span>
                        <span class="sidebar--item">Add Cities</span>
                    </a>
                </li>
                <li>
                    <a href="show_city.php">
                        <span class="icon icon-3"><i class="ri-eye-fill"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">View Cities</span>
                    </a>
                </li>
                <li>
                    <a href="ADD_CATEGORY.php">
                        <span class="icon icon-4"><i class="ri-bar-chart-horizontal-line"></i></span>
                        <span class="sidebar--item">Add Categories</span>
                    </a>
                </li>
                <li>
                    <a href="show_category.php">
                        <span class="icon icon-5"><i class="ri-eye-fill"></i></span>
                        <span class="sidebar--item">View Categories</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-6"><i class="ri-shield-user-fill"></i></span>
                        <span class="sidebar--item">View Vendors</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="icon icon-4"><i class="ri-order-play-line"></i></span>
                        <span class="sidebar--item">View Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-8"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">View Users</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                
                <li>
                    <a href="logout.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Overview</h2>
                    
                </div>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <a href="add_city.php"><div class="card--content">
                                <h5 class="card--title" style="font-size: 1.5em;">Cities</h5>
                                <h1></h1>
                            </div>
</a>
                            <i class="ri-building-2-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                        <?php
 include 'config.php';
 $selectquery = "SELECT * from city";
 $query = mysqli_query($conn,$selectquery);
 $num = mysqli_num_rows($query);
 
 
 
    ?>
                            
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i><?php echo $num; ?></span>
                            
                        </div>
                    </div>
               
                    <div class="card card-2">
                   
                        <div class="card--data">
                       
                            <div class="card--content">
                                <h5 class="card--title" style="font-size: 1.5em;">Total Categories</h5>
                                <h1></h1>
                            </div>

                            <i class="ri-bar-chart-horizontal-line card--icon--lg"></i>
                        </div>


                        <div class="card--stats">


                        <?php
 include 'config.php';
 $selectquery1 = "SELECT * from category ";
 $query1 = mysqli_query($conn,$selectquery1);
 $num1 = mysqli_num_rows($query1);
 
 
 
    ?>
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i><?php echo $num1; ?></span>
                            
                        </div>
                    </div>
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title" style="font-size: 1.5em;">Vendors</h5>
                                <h1></h1>
                            </div>
                            <i class="ri-shield-user-fill card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>27</span>
                           
                        </div>
                    </div>
                    <div class="card card-4">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title" style="font-size: 1.5em;">orders</h5>
                                <h1></h1>
                            </div>
                            <i class="ri-order-play-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>8</span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctors">
                <div class="title">
                    <h2 class="section--title">Cities</h2>
                    <div class="doctors--right--btns">
                       
                       <a href="add_city.php"> <button class="add"><i class="ri-add-line"></i>Add city</button></a>
                       
                    </div>
                </div>
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
         <td><a href="delete_city.php?id=<?php echo $data['id'];?>" class="text-danger"><i class="ri-delete-bin-line"></i></a></td>
         <td><a href="editcity.php?id=<?php echo $data['id'];?>" class="text-danger"><i class="ri-pencil-line"></i></a></td>
        
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
            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title">Categories</h2>
                    <a href="ADD_CATEGORY.php"><button class="add"><i class="ri-add-line"></i>Add Category</button>
                    </a>
                </div>
                <div class="col-md-7 mx-auto py-4 ">
        <section class="no-padding msection section-sm section-first bg-default text-md-left" style="  border-radius: 10px;">
            <div class="container">
                <div class="row row-50 justify-content-center align-items-xl-center">
                    <div class="col-md-12 col-lg-8 col-xl-5">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CATEGORY NAME</th>
      <th scope="col">DELETE</th>
      <th scope="col">EDIT</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
 include 'config.php';
 $selectquery = "SELECT * from category";
 $query = mysqli_query($conn,$selectquery);
 $i=1;
 foreach($query as $data){
    ?>
    <tr>
         <td><?php echo $i;?></td> 
         <td><?php echo $data['name'];?></td>
         <td><a href="delete_category.php?id=<?php echo $data['id'];?>" class="text-danger"><i class="ri-delete-bin-line"></i></a></td>
         <td><a href="edit_category.php?id=<?php echo $data['id'];?>" class="text-danger"><i class="ri-pencil-line"></i></a></td>
        
        </a></td>
        <td></td>
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
               
            </div>

        
    </section>
    <script src="/main.js"></script>
</body>

</html>