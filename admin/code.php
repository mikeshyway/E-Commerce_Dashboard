<?php
include('../config/dbcon.php');
include('../functions/myfunctions.php');

// Detaches specific data required to be edited/deleted, then submit back into MySQL query from the application form - Admin Page 

if(isset($_POST['add_category_btn']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];

    // It writes a query to insert the category data into the categories table. 
    // The query includes logic to set the status field to 1 if the corresponding checkbox is selected, and 0 otherwise.
    $status = isset($_POST['status']) ? '1':'0';

    $image = $_FILES['image']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    // Query to insert category data
    $cate_query = "INSERT INTO categories 
    (name, slug, description, status, image) 
    VALUES ('$name','$slug','$description','$status','$filename') ";

    // To execute mysqli_query function 
    $cate_query_run = mysqli_query($con, $cate_query);

    if($cate_query_run) 
    {
        // Creates temporary new filename for the image by combining the current time and the file extension.
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

        // Successful = image file uploaded in folder "uploads" with move_uploaded_file function 
        // Once done, redirect user back to add-category page
        redirect("add-category.php", "Category Added Successfully");

    }
    else 
    {
        // Failed = error messaage pop-up
        // Once done, redirect user back to add-category page
        redirect("add-category.php", "Something Went Wrong");
    }

}   
else if(isset($_POST['update_category_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];

    // It writes a query to insert the category data into the categories table. 
    // The query includes logic to set the status field to 1 if the corresponding checkbox is selected, and 0 otherwise.
    $status = isset($_POST['status']) ? '1':'0';

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;

    }
    else
    {
        $update_filename = $old_image;
    }

    $path = "../uploads";

    $update_query = "UPDATE categories SET name='$name', slug='$slug', description='$description',
    status='$status', image='$update_filename' WHERE id='$category_id' ";

    $update_query_run = mysqli_query($con, $update_query);

    // If the update query run is successful, image with new filename will be uploaded in "uploads" folder. 
    if($update_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            
            // If the old image still exists, it will be deleted.
            if(file_exists("../uploads/".$old_image))
            {
                unlink("../uploads/".$old_image);
            }
        }

        redirect("edit-category.php?id=$category_id", "Category Updated Successfully");
    }
    else
    {
        redirect("edit-category.php?id=$category_id", "Something Went Wrong");
    }
}
else if(isset($_POST['delete_category_btn']))
{
    // If the button 'delete_category_btn' is clicked, this function will remove the category saved in SQL query
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $category_query = "SELECT * FROM categories WHERE id='$category_id' ";
    $category_query_run = mysqli_query($con, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);
    $image = $category_data['image'];

    $delete_query = " DELETE FROM categories WHERE id='$category_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        // If the old image still exists, it will be deleted.
        if(file_exists("../uploads/".$image))
        {
            unlink("../uploads/".$image);
        }
        
        // redirect("category.php", "Category Deleted Successfully");
        echo 200;
    }
    else 
    {
        // redirect("category.php", "Something Went Wrong");
        echo 500;
    }
}
else if(isset($_POST['add_product_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];
    $qty = $_POST['qty'];

    // It writes a query to insert the category data into the categories table. 
    // The query includes logic to set the status (to hide/show visibility) and trending fields (to show on trending on index.php)
    // Conditions of 1 if the corresponding checkbox is selected, and 0 otherwise.
    $status = isset($_POST['status']) ? '1':'0';
    $trending = isset($_POST['trending']) ? '1':'0'; 
    $new_arrival = isset($_POST['new_arrival']) ? '1':'0';
    $sales = isset($_POST['sales']) ? '1':'0'; 
    // $gender = isset($_POST['gender']) ? '1':'0';
    // $age_kids = isset($_POST['age_kids']);
    // $age_teenagers = isset($_POST['age_teenagers']);
    // $age_adults = isset($_POST['age_adults']);

    $image_thumbnail = $_FILES['image_thumbnail']['name'];
    $image_1 = $_FILES['image_1']['name'];
    $image_2 = $_FILES['image_2']['name'];
    $image_3 = $_FILES['image_3']['name'];
    $image_4 = $_FILES['image_4']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image_thumbnail, PATHINFO_EXTENSION);
    $filename_thumbnail = time().'.'.$image_ext;

    $image_ext = pathinfo($image_1, PATHINFO_EXTENSION);
    $filename_1 = time().'.'.$image_ext;

    $image_ext = pathinfo($image_2, PATHINFO_EXTENSION);
    $filename_2 = time().'.'.$image_ext;

    $image_ext = pathinfo($image_3, PATHINFO_EXTENSION);
    $filename_3 = time().'.'.$image_ext;

    $image_ext = pathinfo($image_4, PATHINFO_EXTENSION);
    $filename_4 = time().'.'.$image_ext;



    // Validation to not allow null for all fields mentioned by having pop-up warning
    if($category_id != "" && $name != "" && $slug !== "" && $description != "" && $original_price !== "" && $selling_price !== "" && $qty !== "" &&
    $filename_thumbnail !== "" && $filename_1 !== "" && $filename_2 !== "" && $filename_3 !== "" && $filename_4 !== "")
    {
        
        // Query to insert info into database
        $product_query = "INSERT INTO products (category_id, name, slug, small_description, description, original_price, selling_price, 
        qty, status, trending, new_arrival, sales,
        image_thumbnail, image_1, image_2, image_3, image_4) VALUES 
        ('$category_id','$name','$slug','$small_description','$description','$original_price','$selling_price','$qty',
        '$status','$trending','$new_arrival','$sales',
        '$filename_thumbnail','$filename_1','$filename_2','$filename_3','$filename_4') ";

        $product_query_run = mysqli_query($con, $product_query);  

        if($product_query_run) 
        {
            // Creates temporary new filename for the image by combining the current time and the file extension.
            move_uploaded_file($_FILES['image_thumbnail']['tmp_name'], $path.'/'.$filename_thumbnail);
            move_uploaded_file($_FILES['image_1']['tmp_name'], $path.'/'.$filename_1);
            move_uploaded_file($_FILES['image_2']['tmp_name'], $path.'/'.$filename_2);
            move_uploaded_file($_FILES['image_3']['tmp_name'], $path.'/'.$filename_3);
            move_uploaded_file($_FILES['image_4']['tmp_name'], $path.'/'.$filename_4);

            // Successful = image file uploaded in folder "uploads" with move_uploaded_file function 
            // Once done, redirect user back to add-category page
            redirect("add-product.php", "Product Added Successfully");
        }
        else
        {
            redirect("add-product.php", "Something Went Wrong");
        }
    }
    else
    {
        redirect("add-product.php", "All Fields are Mandatory");
    }

    

}
else if(isset($_POST['update_product_btn']))
{
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];
    $qty = $_POST['qty'];

    // It writes a query to insert the category data into the categories table. 
    // The query includes logic to set the status (to hide/show visibility) and trending fields (to show on trending on index.php)
    // The same goes for new arrival and recommendation to show on index.php
    // Conditions of 1 if the corresponding checkbox is selected, and 0 otherwise.
    $status = isset($_POST['status']) ? '1':'0';
    $trending = isset($_POST['trending']) ? '1':'0'; 
    $new_arrival = isset($_POST['new_arrival']) ? '1':'0';
    $sales = isset($_POST['sales']) ? '1':'0'; 
    // $gender = isset($_POST['gender']) ? '1':'0';
    // $age_kids = isset($_POST['age_kids']);
    // $age_teenagers = isset($_POST['age_teenagers']);
    // $age_adults = isset($_POST['age_adults']);

    $path = "../uploads";

    $new_image_thumbnail = $_FILES['image_thumbnail']['name'];
    $old_image_thumbnail = $_POST['old_image_thumbnail'];

    $new_image_1 = $_FILES['image_1']['name'];
    $old_image_1 = $_POST['old_image_1'];

    $new_image_2 = $_FILES['image_2']['name'];
    $old_image_2 = $_POST['old_image_2'];

    $new_image_3 = $_FILES['image_3']['name'];
    $old_image_3 = $_POST['old_image_3'];

    $new_image_4 = $_FILES['image_4']['name'];
    $old_image_4 = $_POST['old_image_4'];
    
    // Image_Thumbnail
    if($new_image_thumbnail != "")
    {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image_thumbnail, PATHINFO_EXTENSION);
        $update_filename_thumbnail = time().'.'.$image_ext;

    }
    else
    {
        $update_filename_thumbnail = $old_image_thumbnail;
    }

    // Image_1
    if($new_image_1 != "")
    {
        // $update_filename_1 = $new_image_1;
        $image_ext = pathinfo($new_image_1, PATHINFO_EXTENSION);
        $update_filename_1 = time().'.'.$image_ext;

    }
    else
    {
        $update_filename_1 = $old_image_1;
    }

    // Image_2
    if($new_image_2 != "")
    {
        // $update_filename_2 = $new_image_2;
        $image_ext = pathinfo($new_image_2, PATHINFO_EXTENSION);
        $update_filename_2 = time().'.'.$image_ext;

    }
    else
    {
        $update_filename_2 = $old_image_2;
    }

    // Image_3
    if($new_image_3 != "")
    {
        // $update_filename_3 = $new_image_3;
        $image_ext = pathinfo($new_image_3, PATHINFO_EXTENSION);
        $update_filename_3 = time().'.'.$image_ext;

    }
    else
    {
        $update_filename_3 = $old_image_3;
    }

    // Image_4
    if($new_image_4 != "")
    {
        // $update_filename_4 = $new_image_4;
        $image_ext = pathinfo($new_image_4, PATHINFO_EXTENSION);
        $update_filename_4 = time().'.'.$image_ext;

    }
    else
    {
        $update_filename_4 = $old_image_4;
    }



    // Query to update the database
    $update_product_query = "UPDATE products SET name='$name', slug='$slug', small_description='$small_description', 
    description='$description',original_price='$original_price',selling_price='$selling_price',qty='$qty',
    trending='$trending', new_arrival='$new_arrival', sales='$sales', status='$status',
    image_thumbnail='$update_filename_thumbnail',image_1='$update_filename_1',image_2='$update_filename_2',image_3='$update_filename_3',image_4='$update_filename_4' WHERE id='$product_id' ";
    
    $update_product_query_run = mysqli_query($con, $update_product_query);

    if($update_product_query_run)
    {
        // Image_Thumbnail
        if($_FILES['image_thumbnail']['name'] != "")
        {
            move_uploaded_file($_FILES['image_thumbnail']['tmp_name'], $path.'/'.$update_filename_thumbnail);
            
            // If the old image_thumbnail still exists, it will be deleted.
            if(file_exists("../uploads/".$old_image_thumbnail))
            {
                unlink("../uploads/".$old_image_thumbnail);
            }
        }

        // Image_1
        if($_FILES['image_1']['name'] != "")
        {
            move_uploaded_file($_FILES['image_1']['tmp_name'], $path.'/'.$update_filename_1);
            
            // If the old image_1 still exists, it will be deleted.
            if(file_exists("../uploads/".$old_image_1))
            {
                unlink("../uploads/".$old_image_1);
            }
        }

        // Image_2
        if($_FILES['image_2']['name'] != "")
        {
            move_uploaded_file($_FILES['image_2']['tmp_name'], $path.'/'.$update_filename_2);
            
            // If the old image_2 still exists, it will be deleted.
            if(file_exists("../uploads/".$old_image_2))
            {
                unlink("../uploads/".$old_image_2);
            }
        }

        // Image_3
        if($_FILES['image_3']['name'] != "")
        {
            move_uploaded_file($_FILES['image_3']['tmp_name'], $path.'/'.$update_filename_3);
            
            // If the old image_3 still exists, it will be deleted.
            if(file_exists("../uploads/".$old_image_3))
            {
                unlink("../uploads/".$old_image_3);
            }
        }

        // Image_4
        if($_FILES['image_4']['name'] != "")
        {
            move_uploaded_file($_FILES['image_4']['tmp_name'], $path.'/'.$update_filename_4);
            
            // If the old image_4 still exists, it will be deleted.
            if(file_exists("../uploads/".$old_image_4))
            {
                unlink("../uploads/".$old_image_4);
            }
        }

        redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
    }
    else
    {
        redirect("edit-product.php?id=$product_id", "Something Went Wrong");
    }

}
else if(isset($_POST['delete_product_btn']))
{
     // If the button 'delete_product_btn' is clicked, this function will remove the product saved in SQL query
     $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

     $product_query = "SELECT * FROM products WHERE id='$product_id' ";
     $product_query_run = mysqli_query($con, $product_query);
     $product_data = mysqli_fetch_array($product_query_run);
     $image_thumbnail = $product_data['image_thumbnail'];
     $image_1 = $product_data['image_1'];
     $image_2 = $product_data['image_2'];
     $image_3 = $product_data['image_3'];
     $image_4 = $product_data['image_4'];
 
     $delete_query = " DELETE FROM products WHERE id='$product_id' ";
     $delete_query_run = mysqli_query($con, $delete_query);
 
     if($delete_query_run)
     {
         // If the old image still exists, it will be deleted.
        //  if(file_exists("../uploads/".$image))
        //  {
        //      unlink("../uploads/".$image);
        //  }
         
         // If the old image_thumbnail still exists, it will be deleted.
         if(file_exists("../uploads/".$image_thumbnail))
         {
             unlink("../uploads/".$image_thumbnail);
         }
     
         // If the old image_1 still exists, it will be deleted.
         if(file_exists("../uploads/".$image_1))
         {
             unlink("../uploads/".$image_1);
         }
     
         // If the old image_2 still exists, it will be deleted.
         if(file_exists("../uploads/".$image_2))
         {
             unlink("../uploads/".$image_2);
         }
     
         // If the old image_3 still exists, it will be deleted.
         if(file_exists("../uploads/".$image_3))
         {
             unlink("../uploads/".$image_3);
         }
     
         // If the old image_4 still exists, it will be deleted.
         if(file_exists("../uploads/".$image_4))
         {
             unlink("../uploads/".$image_4);
         }
         
         // redirect("products.php", "Product Deleted Successfully");
         echo 200;
     }
     else 
     {
         // redirect("products.php", "Something Went Wrong");
         echo 500;
     }
}
else if(isset($_POST['update_order_btn']))
{
    $track_no = $_POST['tracking_no'];
    $order_status = $_POST['order_status'];

    $updateOrder_query = "UPDATE orders SET status='$order_status' WHERE tracking_no='$track_no' ";
    $updateOrder_query_run = mysqli_query($con, $updateOrder_query);

    redirect("view-order.php?t=$track_no", "Order Status Updated Successfully");
}
else if(isset($_POST['update_admin_client_btn']))
{
    $userId = $_POST['user_id'];
    $role_status = $_POST['role_status'];

    // Query to update the database
    $updateAdminUser_query = "UPDATE users SET role_as='$role_status' WHERE id='$userId' ";
    $updateAdminUser_query_run = mysqli_query($con, $updateAdminUser_query);

        redirect("edit-user.php?id=$userId", "User Record Updated Successfully");

}
else if(isset($_POST['delete_admin_client_btn']))
{
     // If the button 'delete_product_btn' is clicked, this function will remove the product saved in SQL query
     $userId = mysqli_real_escape_string($con, $_POST['user_id']);

     $user_query = "SELECT * FROM users WHERE id='$userId' ";
     $user_query_run = mysqli_query($con, $user_query);
     $user_data = mysqli_fetch_array($user_query_run);
     $image = $user_data['image'];
 
     $delete_query = " DELETE FROM users WHERE id='$userId' ";
     $delete_query_run = mysqli_query($con, $delete_query);
 
     if($delete_query_run)
     {
         // If the old image still exists, it will be deleted.
         if(file_exists("../uploads/".$image))
         {
             unlink("../uploads/".$image);
         }
         
         // redirect("users.php", "Product Deleted Successfully");
         echo 200;
     }
     else 
     {
         // redirect("users.php", "Something Went Wrong");
         echo 500;
     }
}
else if(isset($_POST['update_user_btn']))
{
    $userId = $_POST['user_id'];
    $role_status = $_POST['role_status'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $path = "../uploads";

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    
    if($new_image != "")
    {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;

    }
    else
    {
        $update_filename = $old_image;
    }



    // Query to update the database
    $updateUser_query = "UPDATE users SET name='$name', email='$email', phone='$phone', 
    password='$password', image='$update_filename', role_as='$role_status' WHERE id='$userId' ";
    
    $updateUser_query_run = mysqli_query($con, $updateUser_query);

    if($updateUser_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            
            // If the old image still exists, it will be deleted.
            if(file_exists("../uploads/".$old_image))
            {
                unlink("../uploads/".$old_image);
            }
        }

        redirect("edit-user.php?id=$userId", "Product Updated Successfully");
    }
    else
    {
        redirect("edit-user.php?id=$userId", "Something Went Wrong");
    }

}
else
{
    header('Location: ../index.php');
}
?>