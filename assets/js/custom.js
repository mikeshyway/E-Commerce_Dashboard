$(document).ready(function () {

    $(document).on('click','.increment-btn', function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        // If user changed the value through webpage inspection, check either allow or set = 0
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if(value < 10)
        {
            value++;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }

    });

    $(document).on('click','.decrement-btn', function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        // If user changed the value through webpage inspection, check either allow or set = 0
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }

    });

    // When user click 'addToCartBtn' button, all selected values by users will be saved
    $(document).on('click','.addToCartBtn', function (e) {
    
        e.preventDefault();
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).val();

        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: {
                "prod_id":prod_id,
                "prod_qty":qty,
                "scope": "add"
            },
            
            success: function (response) { 

                if(response == 201)
                {
                    alertify.success('Product Added to Cart'); 
                }
                else if(response == "existing")
                {
                    alertify.success('Product Already in Cart');  
                }
                else if(response == 401)
                {
                    alertify.success('Login to Continue');  
                }
                else if(response == 500)
                {
                    alertify.success('Something Went Wrong');  
                }
            }
        });
    });

    // To update product qty in shopping cart
    $(document).on('click','.updateQty', function (e) {
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).closest('.product_data').find('.prodId').val();

        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "update"
            },
            success: function (response) {
                // alert(response);

            }
        });
    });

    $(document).on('click','.deleteItem', function (e) {
        var cart_id = $(this).val();
        // alert(cart_id);

        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: {
                "cart_id": cart_id,
                "scope": "delete"
            },
            success: function (response) {
                if(response == 200)
                {
                    alertify.success('Item Deleted Successfully');
                    // Doesn't refresh page 
                    $("#mycart").load(location.href + " #mycart");
                }
                else
                {
                    alertify.success(response); 
                }

            }
        });
    });

});