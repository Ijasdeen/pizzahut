$(function(){
   $(".add_to_cart").click(function(){
       $(this).text('Adding to cart...');
      let image = $(this).attr('image');
       let productId= parseInt($(this).attr('productId'));
       let productPrice =parseFloat( $(this).attr('productPrice'));
       let productName= String($(this).attr('productName'));
       let categoryName = String($(this).attr('category'));
       let quantity =parseInt( $(this).attr('quantity'));
        $('.drawer').drawer();
       $.ajax({
          url:'action.php',
           method:'POST',
           data:{enableAddToCart:1,image:image,id:productId,productPrice:productPrice,productName:productName,categoryName:categoryName,quantity:quantity},
           success:function(data){
               console.log(data);
               $(".add_to_cart").text('Add to cart');
                view();
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
         let category_name=$(this).attr('category_name');
         
         //,price:price,name:name,image:image
         $.ajax({
             url:'action.php',
             method:'POST',
             data:{increaseQuantity:1,id:itemId,category_name:category_name},
             success:function(data){
                 view();
                 console.log(data);
               
              },
             error:function(err){
                 console.log(err); 
             }
          
         });
     });
    
    
   $("body").delegate('.decreaseQuantity','click',function(){
        let itemId = $(this).attr('dataId');
         let category_name=$(this).attr('category_name');
         let quantity = $(this).attr('quantity');
       if(isNaN(quantity) || quantity <=0){
           quantity=1;
       }
       alert(quantity); 
        $.ajax({
             url:'action.php',
             method:'POST',
             data:{decreaseQuantity:1,id:itemId,category_name:category_name},
             success:function(data){
                 view();
                 console.log(data);
               
              },
             error:function(err){
                 console.log(err); 
             }
          
         });
       
       
      
   });
    
});