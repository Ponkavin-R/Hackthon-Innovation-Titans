<?php
    include("config.php");
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
    <h3>Product detail</h3>
 <?php
  
     $searchTerm=$_REQUEST['pid'];
     $sql=" SELECT *
      FROM datasetinfo
      WHERE product_id = $searchTerm";
      $sql=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($sql))
     {
     ?>
      <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo $row['image_src'];?>" alt="">
            </div>
            <div class="col-lg-6">
                <p><?php echo$row['Description']?></p>
                <a href="graph.php?pid=<?php echo$row['product_id']?>" class="btn btn-secondary">Get Price</a>
            </div>
        </div>
     </div>
    <?php
     }
      
   
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>