<?php
require_once 'core/init.php';
 ?>



<DOCTYPE html>

  <html>
  <head>
    <title>GadgetGet </title>
    <link rel="Stylesheet" href="css/bootstrap.min.css"/>
    <link rel ="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width,inital-scale=1,user-scaleable=no" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src ="js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
  $sql="SELECT * FROM catagories WHERE parent=0";
  $pquery=$db->query($sql);
  ?>

    <nav class ="navbar navbar-default navbar-fixed-top" id="navbar">
      <div class="container">
      <a href="/udemyT/index.php" class=" navbar-brand " id="text">  GadgetGet Online Store </a>
      <ul class="nav navbar-nav">
        <?php while($parent=mysqli_fetch_assoc($pquery)):  ?>
        <?php
        $parent_id=$parent['id'];
        $sql2=" SELECT * FROM catagories WHERE parent='$parent_id' ";
        $cquery=$db->query($sql2);
         ?>



<!--dropdown menu-->
<li class="dropdown">
<a href="#" class ="dropdown-toggle" data-toggle="dropdown" id="text"><?php echo $parent['catagory'];?> <span class="caret"> </span> </a>
<ul class="dropdown-menu" role="menu">

  <?php while($child=mysqli_fetch_assoc($cquery)):?>
    <li><a href="#"> <?php echo $child['catagory']; ?> </a></li>
  <?php endwhile ; ?>


  </ul>
  </li>

  <?php endwhile; ?>

  </ul>
</div>
</nav>
<div id="background-image">
<div id="image-1"></div>
<div id="image-2"></div>
</div>
<!--remove spaces-->
<div class="col-md-2" > </div>
<!-- main content -->
<div class ="col-md-8">
  <div class ="row">
    <h2 class="text-center">Featured Product</h2>

    <div class="col-md-3">
      <h4>Samsung Note-7 </h4>
      <img src="Images/Note7.jpg" alt="Note 7" id="images"/>
      <p class="list-price-text-danger">List price:<s>70000Tk</s></p>
      <p class="price">Our Price:65000Tk</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
    </div>

  <div class="col-md-3">
    <h4>Asus Rogue</h4>
    <img src="Images/laptop.jpg" alt="Laptop" id="images"/>
    <p class="list-price-text-danger">List price:<s>180000Tk</s></p>
    <p class="price">Our Price:165000Tk</p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
  </div>

  <div class="col-md-3">
    <h4>Moto 360 V-2 </h4>
    <img src="Images/smartwatch.jpg" alt="Moto 360" id="images"/>
    <p class="list-price-text-danger">List price:<s>35000Tk</s></p>
    <p class="price">Our Price:27000Tk</p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
  </div>

  <div class="col-md-3">
    <h4>Microsoft Surface </h4>
    <img src="Images/tablet3.jpg" alt="Microsoft surface pro-3" id="images"/>
    <p class="list-price-text-danger">List price:<s>135000Tk</s></p>
    <p class="price">Our Price:125000Tk</p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
  </div>

  <div class="col-md-3">
    <h4>Bose HeadPhones </h4>
    <img src="Images/Headphone.jpg" alt="Bose HeadPhone" id="images"/>
    <p class="list-price-text-danger">List price:<s>13000Tk</s></p>
    <p class="price">Our Price:12000Tk</p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
  </div>

 </div>

<footer class ="text-center" id="footer" > &copy; Copyright 2016 GadgetGet Online Shop </footer>
</div>
<?php include "details-modal-note7.php";
      include "details-modal-AsusRogue.php";
      include "details-modal-MicrosoftSurfacePro3.php";
      include "details-modal-Moto360.php";
      include "details-modal-BoseHeadphone.php";


      ?>


</body>
</html>
