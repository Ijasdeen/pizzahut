<?php require_once('includes/header.php')?>
<main>
    <div class="checkout-wrapper">
        <div class="container">
    <div class="row">
     <div class="col-md-6">
        <h3 class="text text-left title text-danger">Shipping Address</h3>
        
         <form method="POST" id="checkOutSubmitForm">
             <div class="form-group">
                 <label for="Fullname">Your full name</label>
                 <input type="text" name="fullName" id="fullName" class="form-control" required>
                 <div class="fullNameMessage text text-danger"></div>
             </div>
             <div class="form-group">
                 <label for="Company name">Company Name (optional)</label>
                 <input type="text" class="form-control" id="companyName">
                 <div class="companyNameMessage text text-danger"></div>
             </div>
             <div class="form-group">
                 <label for="tel">Mobile number</label>
                 <input type="tel" class="form-control" id="mobileNumber" required>
                 <div class="mobileNumberMessage text text-danger"></div>
             </div>
             <div class="form-group">
                 <label for="Address">Address</label>
                 <input type="text" class="form-control" id="address" required>
                 <div class="addressMessage text text-danger"></div>
             </div>
             <div class="form-group">
                 <label for="apartment">Apartment, Suite, etc</label>
                 <input type="text" class="form-control" id="apartment" required>
                 <div class="apartmentMessage text text-danger"></div>
             </div>
             <div class="form-group">
                 <label for="City">City</label>
                 <select name="city" id="city" class="form-control">
                     <option value="Colombo">Colombo</option>
                     <option value="Jaffna">Jaffna</option>
                     <option value="Batticaloa">Batticaloa</option>
                 </select>
             </div>
             <div class="form-group">
                 <input type="submit" value="Check out" class="form-control btn btn-info">
             </div>
         </form>
     </div>
     <div class="col-md-6">
          <div class="product-wrapper bg-secondary text-white text-center align-middle">
              <?php
               if(isset($_COOKIE['shopping_cart'])){
                   $cookie_data=stripslashes($_COOKIE['shopping_cart']);
                   $cart_data=json_decode($cookie_data,true); 
                   
                   foreach($cart_data as $keys =>$values){
                       ?>
                       <div class="d-flex flex-row">
                           <div class="p-2">
                               <img src="<?php echo $values['image']?>" alt="" class="img-fluid">
                           </div>
                           <div class="p-2">
                               <?php echo $values['item_name']?>
                           </div>
                           <div class="p-2">
                               <?php echo number_format($values['price'],2)?>
                           </div>
                       </div>
                       <?php
                   }
               }
              ?>
          </div>
     </div>
    </div>
</div>
    </div>
</main>
<div style="height:1800px;"></div>
<?php require_once('includes/footer.php')?>