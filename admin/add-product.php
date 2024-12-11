<?php 

// Add New Product - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>



<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bg-warning">
                    <h4 class="text-white">Add Product</h4>
                </div>
                <!-- Application form to upload new products -->
                <div class="card-body">
                    <!-- This attribute is used to specify the encoding format, in which the data submitted in the form has to be encoded into URLs before sending it to the server.
                            This enables image files to be uploaded and accepted to the server. -->
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="mb-2">Select Category</label>
                                <select name = "category_id" class="form-select mb-2">
                                    <option selected>Select Category</option>

                                    <?php
                                        $categories = getAll("categories");

                                        if(mysqli_num_rows($categories) > 0)
                                        {
                                            foreach($categories as $item) 
                                            {
                                                ?>
                                    <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                    <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Category Available";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="mb-2">Name</label>
                                <input type="text" required name="name" placeholder="Enter category name" class="form-control mb-2">
                            </div>
                        
                            <div class="col-md-6">
                                <label class="mb-2">Slug</label>
                                <input type="text" required name="slug" placeholder="Enter slug" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="mb-2">Small Description</label>
                                <textarea rows="3" required name="small_description" placeholder="Enter small description"
                                    class="form-control mb-2"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="mb-2">Description</label>
                                <textarea rows="3" required name="description" placeholder="Enter description"
                                    class="form-control mb-2"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="mb-">Original Price</label>
                                <input type="text" required name="original_price" placeholder="Enter original price" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-2">Selling Price</label>
                                <input type="text" required name="selling_price" placeholder="Enter selling price" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="mb-2">Upload Image Thumbnail</label>
                                <input type="file" name="image_thumbnail" class="image_thumbnail form-control mb-2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="mb-2">Quantity</label>
                                <input type="number" required name="qty" placeholder="Enter quantity" class="form-control mb-2">
                            </div>    
                            <div class="col-md-2">
                                <label class="mb-2">Status 
                                <input type="checkbox" name="status"> </label>
                                <br>
                                <label class="mb-2">Trending
                                <input type="checkbox" name="trending"> </label>
                            </div>
                            <div class="col-md-2">
                                <label class="mb-2">New Arrival 
                                <input type="checkbox" name="new_arrival"> </label>
                                <br>
                                <label class="mb-2">Sales
                                <input type="checkbox" name="sales"> </label>
                            </div>
                        </div>

                        <!-- When "save" button is clicked, the form submits the data to a file named code.php. -->
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>