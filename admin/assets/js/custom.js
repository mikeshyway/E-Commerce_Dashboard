$(document).ready(function () {

    // Manually inserted JS for pop-up notification when clicked deleting products button

    // Delete Products from products.php page
    $(document).on('click', '.delete_product_btn', function (e) {
        e.preventDefault();
    
        var id = $(this).val();
        // alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover the record!",
            icon: "warning",
            buttons: true,
            dangerMode: true, 
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "POST",
                    url: "code.php",
                    data: {
                        'product_id':id,
                        'delete_product_btn': true
                    },
                    success: function (response) {
                        console.log(response);
                        if(response == 200)
                        {
                            swal("Success!", "Product Deleted Successfully!", "success");
                            $("#products_table").load(location.href + " #products_table"); // ensure there's space to ensure code works
                        }
                        else if(response == 500)
                        {
                            swal("Error!", "Something Went Wrong!", "error");
                        }
                    }
                });
            }
          });
  
    });

    // Delete Categories from categories.php page
    $(document).on('click', '.delete_category_btn', function (e) {
        e.preventDefault();
    
        var id = $(this).val();
        // alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover the record!",
            icon: "warning",
            buttons: true,
            dangerMode: true, 
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "POST",
                    url: "code.php",
                    data: {
                        'category_id':id,
                        'delete_category_btn': true
                    },
                    success: function (response) {
                        console.log(response);
                        if(response == 200)
                        {
                            swal("Success!", "Category Deleted Successfully!", "success");
                            $("#category_table").load(location.href + " #category_table"); // ensure there's space to ensure code works
                        }
                        else if(response == 500)
                        {
                            swal("Error!", "Something Went Wrong!", "error");
                        }
                    }
                });
            }
          });
  
    });


    // Delete Users from users.php page
    $(document).on('click', '.delete_admin_client_btn', function (e) {
        e.preventDefault();
    
        var id = $(this).val();
        // alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover the record!",
            icon: "warning",
            buttons: true,
            dangerMode: true, 
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "POST",
                    url: "code.php",
                    data: {
                        'user_id':id,
                        'delete_admin_client_btn': true
                    },
                    success: function (response) {
                        console.log(response);
                        if(response == 200)
                        {
                            swal("Success!", "Product Deleted Successfully!", "success");
                            $("#admin_client_table").load(location.href + " #admin_client_table"); // ensure there's space to ensure code works
                        }
                        else if(response == 500)
                        {
                            swal("Error!", "Something Went Wrong!", "error");
                        }
                    }
                });
            }
          });
  
    });

}); 
 