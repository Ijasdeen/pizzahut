$(function(){
    
    //Adding to cart when ".add_to_cart" button is clicked
   $(".add_to_cart").click(function(){
               $('.drawer').drawer();
        $(this).text('Adding to cart...');
      let image = $(this).attr('image');
       let productId= parseInt($(this).attr('productId'));
       let productPrice =parseFloat( $(this).attr('productPrice'));
       let productName= String($(this).attr('productName'));
       let categoryName = String($(this).attr('category'));
       let quantity =parseInt($(this).attr('quantity'));
       $.ajax({
          url:'action.php',
           method:'POST',
           data:{enableAddToCart:1,image:image,id:productId,productPrice:productPrice,productName:productName,categoryName:categoryName,quantity:quantity},
           success:function(data){
               console.log(data);
               $(".add_to_cart").text('Add to cart');
                view();
               countTotalProducts();
           },
           error:function(err){
           console.log(err); 
       }
       });
       
       
       
   });
    
    
    
    view();
    function view(){
        $.ajax({
           url:'action.php',
            method:'POST',
            data:{enableCookies:1},
            success:function(data){
                $(".form-area").html(data);
            }
        });
    }
    
    
    
    //Increasing value
    
        $("body").delegate('.increaseQuantity','click',function(){
         let itemId = $(this).attr('dataId');
         let category_name=String($(this).attr('category_name'));
         
         
         $.ajax({
             url:'action.php',
             method:'POST',
             data:{increaseQuantity:1,id:itemId,category_name:category_name},
             success:function(data){
                 view();
                 countTotalProducts();
                 console.log(data);
               
              },
             error:function(err){
                 console.log(err); 
             }
          
         });
     });
    
    
   $("body").delegate('.decreaseQuantity','click',function(){
        let itemId =parseInt( $(this).attr('dataId'));
         let category_name=String($(this).attr('category_name'));
         let quantity = parseInt($(this).attr('quantity'));
       if(isNaN(quantity) || quantity <=1){
           quantity=1;
           return; 
       }
        $.ajax({
             url:'action.php',
             method:'POST',
             data:{decreaseQuantity:1,id:itemId,category_name:category_name},
             success:function(data){
                 view();
                 countTotalProducts();
                 console.log(data);
               
              },
             error:function(err){
                 console.log(err); 
             }
          
         });
       
       
      
   });
    
     countTotalProducts();
    function countTotalProducts(){
        $.ajax({
            url:'action.php',
            method:'POST',
            data:{enableCount:1},
            success:function(data){
             $(".shopping-cart").html(data);     
            }
        });
    }
    
    $(".drawer-toggle").click(function(){
           $('.drawer').drawer();
    });
    
    
    
    $("body").delegate('.deleteProduct','click',function(){
        
        let productId = parseInt($(this).attr('removeProductId'));
        let category_name= String($(this).attr('category_name'));
        
        if(productId===0){
            return; 
        }
        
          $.ajax({
            url:'action.php',
            method:'POST',
            data:{enableRemove:1,productId:productId,category_name:category_name},
            success:function(data){
                view();
                countTotalProducts();
                
            },
          error:function(err){
              console.log(err); 
          }
        })
        
    });
    
  
    
    $("body").delegate('.quantityValue','change',function(){
         let itemId= parseInt($(this).attr('dataId'));
          let category_name=String( $(this).attr('category_name'));
          let value = parseInt($(this).val());
          
            if(value <=1 || isNaN(value)){
                value=1; 
            }
          
            $.ajax({
           url:'action.php',
            method:'POST',
            data:{quantityEditEnable:1,itemId:itemId,value:value,category_name:category_name},
            success:function(data){
              console.log(data);
               view();
                 countTotalProducts();
               
            },
            error:function(err){
                console.log(err); 
            }
        });
    });
    
    
     $('#closeDrawer').click(function(){
        $('.drawer').drawer('close');
       
    })
    
    
}); //Document finishes