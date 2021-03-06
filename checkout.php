<?php
if(!isset($_COOKIE['shopping_cart'])){
    header("location:index.php");
}
?>
<?php require_once('includes/header.php')?>
<main>
    <div class="checkout-wrapper">
        <div class="container">
    <div class="row">
      <div class="col-md-6">
      <div class="d-flex flex-row">
          <div class="p-2"><h3 class="text text-danger">Shipping address</h3></div>
          <div class="p-2 ml-auto"><p class="text text-muted">Have an account? <button class="btn btn-link" data-toggle='modal' data-target='#signInModal'>Login now</button></p></div>
      </div>
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
                 <label for="Email">Email</label>
                 <input type="email" class="form-control" id="checkOutEmail" required>
                 <div class="emailMessage text text-danger"></div>
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
          <div class="product-wrapper">
<!--     Content will be rendered using AJax from PHP-->
          </div>
     </div>
    </div>
</div>
    </div>
</main>
<div style="height:100px;"></div>
<?php require_once('includes/footer.php')?>