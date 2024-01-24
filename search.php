<?php
    include("config.php")
?>
<!DOCTYPE html>
<html>
<head>
  <title>Display Search Term</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h3>Your search Result</h3>
 <div class="row">
 <?php
  // Check if the form was submitted and the input is not empty
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["searchterm"])) {
      $searchTerm = $_POST["searchterm"];

     $sql=" SELECT *
      FROM datasetinfo
      WHERE product_name LIKE '%$searchTerm%'";
      $sql=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($sql))
     {
     ?>
      <div class="col-lg-4 mt-3">
      <div class="card" style="width: 90%;">
        <img class="card-img-top" src="<?php echo$row['image_src']?>" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title"><?php echo$row['product_name']?></h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="productdetails.php?pid=<?php echo$row['product_id']?>" class="btn btn-success">Read More</a>
      </div>
      </div>
      </div>

        
    <?php
     }
      
  }  
?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
