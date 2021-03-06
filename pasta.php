<?php require_once('includes/header.php')?>
<main>
    <section class="pasta-section">
        <div class="container">
          <div class="row">
                  <?php
            $query="select * from pasta"; 
            $result=mysqli_query($connection,$query); 
            if($result){
               while($row=mysqli_fetch_array($result)){
                   ?>
                 
                       <div class="col-md-3 mb-3">
                           <div class="card wow fadeIn">
  <img class="card-img-top img-fluid" src="Images/pasta/<?php echo $row['image']?>" alt="<?php echo $row['name']?>">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['name']?></h4>
    <p class="card-text"><?php echo $row['des']?></p>
    <p class="card-text">Rs. <?php echo number_format($row['price'])?> (LKR)</p>
    <a href="javascript:void(0)" 
            class="btn btn-outline-info add_to_cart"
            productId="<?php echo $row[0];?>"
            productPrice="<?php echo $row['price']?>"
            productName ="<?php echo $row['name']?>"    
            category='Pasta'
             image='Images/pasta/<?php echo $row['image']?>'
              quantity = '1'>Add to cart</a>
  </div>
</div>
                       </div>
                        
                 
                   <?php
               }
            }
            ?>
              </div>
        </div>
    </section>
</main>

<?php require_once('includes/footer.php')?>