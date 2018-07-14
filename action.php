<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start(); 
    require_once('Connection/connection.php');
require_once('validationData.php');
    
    
    // Adding to cart
if(isset($_POST['enableAddToCart']) && isset($_POST['image']) && isset($_POST['id']) && isset($_POST['productPrice']) && isset($_POST['productName']) && isset($_POST['categoryName']) && isset($_POST['quantity'])){
    
     $image= mysqli_real_escape_string($connection,validateData($_POST['image']));
     $productId=(int) mysqli_real_escape_string($connection,validateData($_POST['id']));
    $productPrice = mysqli_real_escape_string($connection,validateData($_POST['productPrice'])); 
    $productName = mysqli_real_escape_string($connection,validateData($_POST['productName']));
    $categoryName = (string)mysqli_real_escape_string($connection,validateData($_POST['categoryName']));
    $quantity = (int) mysqli_real_escape_string($connection,validateData($_POST['quantity']));
    
         if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         else {
             $cart_data=array();
         }
         
        
 $item_id_list = array_column($cart_data, 'item_id');

//If already item is available..
 if(in_array($_POST["id"], $item_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] == $_POST["id"])
   {
    $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
    }
  }
     
  }
   else {
       //If it is a new item....
   
          $item_array=array(
            'item_id' =>$productId, 
             'item_name' =>$productName, 
             'price' =>$productPrice, 
             'image' =>$image,
              'item_quantity' =>$quantity,
              'category_name' => $categoryName
          );
             $cart_data[]=$item_array;
         
         }
        
          $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
    
         
         // time() + ((86400)*30) == One day;    
       }
    /*<//Enable-addtocart-finishes*/
    
  
     
    
 

 if(isset($_POST['enableCookies'])){
          if(isset($_COOKIE['shopping_cart'])){
           $total=0;
              $count=0; 
              $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
             foreach($cart_data as $keys =>$values){
                  ?>
               <div class="row" id="cartTable">
               
                <div class="col-md-5">
                    <div class="img-division">
                        <img src="<?php echo $values['image']?>" alt="" class="img-fluid">
                    </div>
                </div>
                    <div class="col-md-6 text-center">
                      <a href="javascript:void(0);" class="text text-danger deleteProduct" id="deleteProduct" removeProductId="<?php echo $values['item_id']?>" category_name="<?php echo $values['category_name']?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <p><?php echo $values['item_name']?></p>
                        <p class="text-muted">$<?php echo number_format($values['price'],2)?></p><br/>
                        <p>
                            <div class="quantity-area">
                                <label for="QuantityLabel">Quantity</label>
                                 <div class="d-flex justify-content-center mb-3">
                                     <div class="p-1"><button id="increaseQuantity" class="increaseQuantity" dataId="<?php echo $values['item_id']?>" category_name="<?php echo $values['category_name']?>">+</button></div>
                                     <div class="p-1">
                                     <input type="text" value="<?php echo $values['item_quantity']?>" min="1" id="value" size="1" pattern="[0-9]+" class="quantityValue" dataId="<?php echo $values['item_id']?>" category_name="<?php echo $values['category_name']?>"></div>
                                     <div class="p-1"><button id="decreaseQuantity" class="decreaseQuantity" dataId="<?php echo $values['item_id']?>" category_name="<?php echo $values['category_name']?>" quantity="<?php echo $values['item_quantity']?>">-</button></div>
                                </div></div>
                                
                        </p>
                         
                    </div>
                    <?php
                      $total+=($values['price'] * $values['item_quantity']);
                 $_SESSION['totalPrice']=number_format($total,2);
                      $count++; //This count is used to detect If item is on shopping_cart cookies. 
                       ?>
              </div>
                   <hr>
                
                  <?php
             }
              if($count!=0){
                 ?>
                <div class="row" id="subTotalArea">
                    <div class="col-md-6">
                        <div class="text-center">
                        
                         <span class="text text-muted">SUBTOTAL</span>                         
                          <span class="text text-danger">$<?php echo number_format($total,2)?></span>
                         <br/><br/>
                        <span class="text text-muted">Shipping & taxes calculated at checkout</span>
                        <br/>
                        <a href="checkout.php" class="btn btn-info" id="checkout">Check Out</a>
                      
                        </div>
                       
                    </div
>                </div>
                <?php  
              }
              else {
               echo '<div class="alert alert-warning text-center text-info">Cart is empty</div>';
               }
          }     
         else {
             echo '<div class="alert alert-info text-center text-danger">No item added</div>';
         }
          
          
     }
    
    
     if(isset($_POST['increaseQuantity']) && isset($_POST['id']) && isset($_POST['category_name'])){
         
        $item_id=mysqli_real_escape_string($connection,validateData($_POST['id']));
        $category_name=mysqli_real_escape_string($connection,validateData($_POST['category_name']));
         
         if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
   $item_id_list = array_column($cart_data, 'item_id');
   $item_category_list = array_column($cart_data,'category_name'); 
      if(in_array($item_id, $item_id_list) && in_array($category_name,$item_category_list))
     {
      foreach($cart_data as $keys => $values)
      {
       if($cart_data[$keys]["item_id"] ==$item_id)
       {
        $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + 1;
         $quantity= $cart_data[$keys]['item_quantity'];
        }
          
      }

      }
        else {
          
         $item_array=array(
            'item_id' =>$id, 
             'item_name' =>$name, 
             'price' =>$price, 
             'image' =>$image,
              'item_quantity' =>$quantity
          );
             $cart_data[]=$item_array;
         }
        
       $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
    
    }
    
    
    if(isset($_POST['decreaseQuantity'])){
           $item_id=mysqli_real_escape_string($connection,validateData($_POST['id']));
        $category_name=mysqli_real_escape_string($connection,validateData($_POST['category_name']));
         
         if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
        
   $item_id_list = array_column($cart_data, 'item_id');
   $item_category_list = array_column($cart_data,'category_name'); 
      if(in_array($item_id, $item_id_list) && in_array($category_name,$item_category_list))
     {
      foreach($cart_data as $keys => $values)
      {
       if($cart_data[$keys]["item_id"] ==$item_id)
       {
        $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] - 1;
         $quantity= $cart_data[$keys]['item_quantity'];
        }
          
      }

      }
        else {
          
         $item_array=array(
            'item_id' =>$id, 
             'item_name' =>$name, 
             'price' =>$price, 
             'image' =>$image,
              'item_quantity' =>$quantity
          );
             $cart_data[]=$item_array;
         }
        
       $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
    }
    
      
    if(isset($_POST['enableRemove']) && isset($_POST['productId']) && isset($_POST['category_name'])){
         
        $item_id= (int) mysqli_real_escape_string($connection,validateData($_POST['productId']));
        $category_name=mysqli_real_escape_string($connection,validateData($_POST['category_name']));
        
         if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
        
   $item_id_list = array_column($cart_data, 'item_id');
   $item_category_list = array_column($cart_data,'category_name'); 
      if(in_array($item_id, $item_id_list) && in_array($category_name,$item_category_list))
     {
      foreach($cart_data as $keys => $values)
      {
       if($cart_data[$keys]["item_id"] ==$item_id)
       {
           unset($cart_data[$keys]);
        }
          
      }

      }
        else {
          
         $item_array=array(
            'item_id' =>$id, 
             'item_name' =>$name, 
             'price' =>$price, 
             'image' =>$image,
              'item_quantity' =>$quantity
          );
             $cart_data[]=$item_array;
         }
        
       $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
        
       
    }
    
    
    if(isset($_POST['enableCount'])){
      
         if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
                 echo count($cart_data);
         }
        else {
            echo '0';
        }
   
    }
    
    //Editing quantity from textbox
  if(isset($_POST['quantityEditEnable']) && isset($_POST['itemId']) && isset($_POST['value']) && isset($_POST['category_name'])){
       
      $item_id=(int) mysqli_real_escape_string($connection,validateData($_POST['itemId']));
      $value= mysqli_real_escape_string($connection,validateData($_POST['value']));
      $categoryName=mysqli_real_escape_string($connection,validateData($_POST['category_name']));
      
      if($value <=1){
          $value=1; 
      }
    
        if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
        $item_id_list = array_column($cart_data, 'item_id');
   $item_category_list = array_column($cart_data,'category_name'); 
      
      if(in_array($item_id,$item_id_list) && in_array($categoryName,$item_category_list)){
          
      foreach($cart_data as $keys => $values)
      {
       if($cart_data[$keys]["item_id"] ==$item_id)
       {
           $cart_data[$keys]["item_quantity"] = $value;
         $quantity= $cart_data[$keys]['item_quantity'];
        }
          
      }

      }
        else {
          
         $item_array=array(
            'item_id' =>$id, 
             'item_name' =>$name, 
             'price' =>$price, 
             'image' =>$image,
              'item_quantity' =>$quantity
          );
             $cart_data[]=$item_array;
         }
        
       $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
      
      }
    
    
    //Sign up form 
    if(isset($_POST['enableSignUp']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        
        $name = mysqli_real_escape_string($connection,validateData($_POST['name']));
        $email = mysqli_real_escape_string($connection,validateData($_POST['email']));
        $password= mysqli_real_escape_string($connection,validateData(md5($_POST['password'])));
 
        $validateQuery="select user_email from signupdetails where user_email='$email'";
        $validateResult=mysqli_query($connection,$validateQuery); 
        if(mysqli_num_rows($validateResult) >0){
            echo 'Exists'; 
            exit();
        }
        else {
            
             $sql="INSERT INTO signupdetails values('','$name','$email','$password')";
        $result=mysqli_query($connection,$sql); 
        if($result){
            echo 'Success';
        }
        else 
        {
            echo 'Wrong';
        }
            
        }
        
       
        
    }
    
    
    if(isset($_POST['enableSignIn']) && isset($_POST['email']) &&  isset($_POST['password'])){
       
        $email = mysqli_real_escape_string($connection,validateData($_POST['email']));
        $password= mysqli_real_escape_string($connection,validateData(md5($_POST['password'])));
        
       $query="SELECT user_id,user_name FROM signupdetails where user_email='$email' && user_password='$password'"; 
        
        $result=mysqli_query($connection,$query); 
        if(mysqli_num_rows($result) >0){
            while($row=mysqli_fetch_array($result)){
                $_SESSION['user_name'] =$row['user_name'];
                $_SESSION['user_id'] = $row['user_id'];
                echo 'Ok';
            }
        }
      else {
          echo 'Email or password incorrect';
      }
        
    }
    
    
    //Change password 
     if(isset($_POST['enableChangePassword']) && isset($_POST['oldPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmPassword']) && isset($_SESSION['user_id'])){
        
         $userId=$_SESSION['user_id'];
         $oldPassword = mysqli_real_escape_string($connection,validateData(md5($_POST['oldPassword'])));
         $newPassword = mysqli_real_escape_string($connection,validateData(md5($_POST['newPassword'])));
  $confirmPassword = mysqli_real_escape_string($connection,validateData(md5($_POST['confirmPassword'])));
      
          if($oldPassword==''){
              echo 'All field required';
              exit();
              
          } 
         else {
             
             $checkOldPasswordQuery="select user_password from signupdetails where user_password='$oldPassword' AND user_id='$userId'"; 
             $checkResult=mysqli_query($connection,$checkOldPasswordQuery); 
             
             if(mysqli_num_rows($checkResult) >0){
                  if($newPassword!=$confirmPassword){
                 echo 'Password mismatch';
                      exit();
                }
             else {
                 $query="update signupdetails set user_password='$confirmPassword' where user_id='$userId'"; 
                 $result=mysqli_query($connection,$query); 
                 if($result){
                     echo 'Yes'; 
                 }
                 else {
                     mysqli_error($connection); 
                 }
             }
             }
             else {
                 echo 'OldMismatch'; 
                 exit();
             }
                 
                 
            
         }
         
     }
 
   
    //Feed back form submitting 
    
    if(isset($_POST['enableFeedBackForm']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['feedBackMessage'])){
         
        $firstName = mysqli_real_escape_string($connection,validateData($_POST['firstName'])); 
        $lastName = mysqli_real_escape_string($connection,validateData($_POST['lastName'])); 
        $email = mysqli_real_escape_string($connection,validateData($_POST['email']));
        $feedBackMessage= mysqli_real_escape_string($connection,$_POST['feedBackMessage']);
        $feedBackwebsite=mysqli_real_escape_string($connection,$_POST['website']);
    
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          echo 'InvalidEmail';
          exit(); 
      }
        else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$feedBackwebsite)){
            echo 'InvalidWebsite'; 
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z ]*$/",$firstName)){
            echo 'InvalidFirstName'; 
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z ]*$/",$lastName)){
            echo 'InvaidLastName'; 
            exit(); 
        }
        else {
             $query="INSERT INTO feedbacks (first_name,last_name,email,website,Message) values('$firstName','$lastName','$email','$feedBackwebsite','$feedBackMessage')";
      $result=mysqli_query($connection,$query); 
        if($result){
            echo 'yes'; 
        }
        else 
        {
            echo mysqli_error($connection); 
        }
            
        }
        
        
     
    
    }
    
    
    if(isset($_POST['enableCheckOut']) && isset($_POST['fullName']) && isset($_POST['companyName']) && isset($_POST['mobileNumber']) && isset($_POST['address']) && isset($_POST['apartment']) && isset($_POST['city'])){
        
        $fullName=mysqli_real_escape_string($connection,validateData($_POST['fullName'])); 
        $companyName=mysqli_real_escape_string($connection,validateData($_POST['companyName']));
        $mobileNumber=mysqli_real_escape_string($connection,validateData($_POST['mobileNumber']));
        $address=mysqli_real_escape_string($connection,validateData($_POST['address']));
        $apartment=mysqli_real_escape_string($connection,validateData($_POST['apartment']));
        $city=mysqli_real_escape_string($connection,validateData($_POST['city']));
        
      
        if(!preg_match("/^[a-zA-Z ]*$/",$fullName)){
            echo 'InvalidName';
            exit();
        }
        
        $checkOutQuery="INSERT INTO checkoutcustomerdetails (full_name,companyName,mobileNumber,address,apartment,city) VALUES('$fullName','$companyName','$mobileNumber','$address','$apartment','$city')";
        if(mysqli_query($connection,$checkOutQuery)){
            echo 'yes'; 
        }
        else {
          echo mysqli_error($connection); 
        }
       
         
        
        
    }
    
    
    
    } //POST method    

    
 


mysqli_close($connection); 
?>