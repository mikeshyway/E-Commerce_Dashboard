<?php 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

// Edit Product - Admin Page 
?>

<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <?php
                // Check if ID is in the url or not 
                if(isset($_GET['id']))
                {
                    // Call getByID function
                    $id = $_GET['id'];

                    $product = getByID("products", $id);

                    if(mysqli_num_rows($product) > 0)
                    {
                        $data = mysqli_fetch_array($product);
                        ?>
                            <div class="card">
                                <div class="card-header text-bg-warning">
                                    <h4 class="text-white">Edit Product
                                    <a href="products.php" class="btn btn-primary float-end"><i class="fa fa-reply"></i> Back</a>
                                    </h4>
                                </div>
                                <!-- Application form to upload new products -->
                                <div class="card-body">
                                    <!-- This attribute is used to specify the encoding format, in which the data submitted in the form has to be encoded into URLs before sending it to the server.
                                            This enables image files to be uploaded and accepted to the server. -->
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="mb-0">Select Category</label>
                                                <select name = "category_id" class="form-select mb-2">
                                                    <option selected>Select Category</option>

                                                    <?php
                                                        $categories = getAll("categories");

                                                        if(mysqli_num_rows($categories) > 0)
                                                        {
                                                            foreach($categories as $item) 
                                                            {
                                                                ?>
                                                    <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?> ><?= $item['name']; ?></option>
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
                                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="mb-0">Name</label>
                                                <input type="text" required name="name" value="<?= $data['name']; ?>" placeholder="Enter category name" class="form-control mb-2">
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <label class="mb-0">Slug</label>
                                                <input type="text" required name="slug" value="<?= $data['slug']; ?>" placeholder="Enter slug" class="form-control mb-2">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="mb-0">Small Description</label>
                                                <textarea rows="3" required name="small_description" placeholder="Enter small description"
                                                    class="form-control mb-2"><?= $data['small_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="mb-0">Description</label>
                                                <textarea rows="3" required name="description" placeholder="Enter description"
                                                    class="form-control mb-2"><?= $data['description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="mb-0">Original Price</label>
                                                <input type="text" required name="original_price" value="<?= $data['original_price']; ?>" placeholder="Enter original price" class="form-control mb-2">
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <label class="mb-0">Selling Price</label>
                                                <input type="text" required name="selling_price" value="<?= $data['selling_price']; ?>" placeholder="Enter selling price" class="form-control mb-2">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="mb-0">Upload Image Thumbnail
                                                <input type="hidden" name="old_image_thumbnail" value="<?= $data['image_thumbnail']; ?>">
                                                <input type="file" name="image_thumbnail" value="<?= $data['image_thumbnail']; ?>" class="form-control mb-2"></label>
                                                <label class="mb-0">Current Image Thumbnail
                                                <img src="../uploads/<?= $data['image_thumbnail']; ?>" alt="Product Image Thumbnail" height="50px" width="50px"></label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="mb-0">Upload Image 1</label>
                                                <input type="hidden" name="old_image_1" value="<?= $data['image_1']; ?>">
                                                <input type="file" name="image_1" value="<?= $data['image_1']; ?>" class="form-control mb-2">
                                                <label class="mb-0">Current Image_1</label>
                                                <img src="../uploads/<?= $data['image_1']; ?>" alt="Product Image 1" height="50px" width="50px">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0">Upload Image 2</label>
                                                <input type="hidden" name="old_image_2" value="<?= $data['image_2']; ?>">
                                                <input type="file" name="image_2" value="<?= $data['image_2']; ?>" class="form-control mb-2">
                                                <label class="mb-0">Current Image 2</label>
                                                <img src="../uploads/<?= $data['image_2']; ?>" alt="Product Image 2" height="50px" width="50px">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="mb-0">Upload Image 3</label>
                                                <input type="hidden" name="old_image_3" value="<?= $data['image_3']; ?>">
                                                <input type="file" name="image_3" value="<?= $data['image_3']; ?>" class="form-control mb-2">
                                                <label class="mb-0">Current Image 3</label>
                                                <img src="../uploads/<?= $data['image_3']; ?>" alt="Product Image 3" height="50px" width="50px">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0">Upload Image 4</label>
                                                <input type="hidden" name="old_image_4" value="<?= $data['image_4']; ?>">
                                                <input type="file" name="image_4" value="<?= $data['image_4']; ?>" class="form-control mb-2">
                                                <label class="mb-0">Current Image 4</label>
                                                <img src="../uploads/<?= $data['image_4']; ?>" alt="Product Image 4" height="50px" width="50px">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label class="mb-0">Quantity</label>
                                                <input type="number" required name="qty" value="<?= $data['qty']; ?>" placeholder="Enter quantity" class="form-control mb-2">
                                            </div>    
                                            <div class="col-md-4">
                                                <input type="checkbox" name="status" <?= $data['status'] == '0'?'':'checked' ?> >
                                                <label class="mb-0">Status</label> <br>
                                                <br>
                                                <input type="checkbox" name="trending" <?= $data['trending'] == '0'?'':'checked' ?> >
                                                <label class="mb-0">Trending</label> <br>
                                                <br>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="checkbox" name="new_arrival" <?= $data['new_arrival'] == '0'?'':'checked' ?> >
                                                <label class="mb-0">New Arrival</label> <br>
                                                <br>
                                                <input type="checkbox" name="sales" <?= $data['sales'] == '0'?'':'checked' ?> >
                                                <label class="mb-0">Sales</label> <br>
                                            </div>
                                        </div>

                                        <!-- <div class="row mb-3">
                                            <div class="col-md-2">
                                                <input type="checkbox" name="gender" <?= $data['gender'] == '0'?'':'checked' ?> >
                                                <label class="mb-0">Gender</label> <br>
                                                <br>
                                                <label class="mb-2">  Adults [18yo - 30yo]</label>
                                                <br><input type="checkbox" name="age_kids"> Age Range Kids [8yo - 12yo] <?= $data['age_kids'] == '0'?'':'checked' ?> </label> 
                                                <br><input type="checkbox" name="age_teenagers"> <?= $data['age_teenagers'] == '0'?'':'checked' ?> </label> 
                                                <br><input type="checkbox" name="age_adults"> <?= $data['age_adults'] == '0'?'':'checked' ?> </label>     
                                            </div>
                                        </div> -->
                                            
                                        <!-- When "update" button is clicked, the form submits the data to a file named code.php. -->
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                    }
                    else
                    {
                        echo "Product Not Found for Given ID";
                    }
                }
                else
                {
                    echo "ID is missing from url";
                }
            ?>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>