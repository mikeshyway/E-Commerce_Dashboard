<?php 
// Edit Category - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>

<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $category = getByID("categories", $id);

                    if(mysqli_num_rows($category) > 0) 
                    {
                        $data = mysqli_fetch_array($category);
                        ?>
                            <div class="card">
                                <div class="card-header text-bg-warning">
                                    <h4 class="text-white">Edit Category
                                    <a href="category.php" class="btn btn-primary float-end"><i class="fa fa-reply"></i> Back</a>
                                    </h4>
                                </div>
                                <!-- Application form to edit categories --> 
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                                                <label for="">Name</label>
                                                <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Enter category name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Slug</label>
                                                <input type="text" name="slug" value="<?= $data['slug'] ?>"placeholder="Enter slug" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Description</label>
                                                <textarea rows="3" name="description" placeholder="Enter description" class="form-control"><?= $data['description'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Upload Image</label>
                                                <input type="file" name="image" class="form-control">
                                                <label for="">Current Image</label>
                                                <img src="../uploads/<?= $data['image'] ?>" height="50px" weight="50px" alt="image">
                                                <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Status</label>
                                                <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                                            </div>
                                        </div>
                                        <!-- When "update" button is clicked, the form saves the changes to a file named code.php. ??? -->
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php  
                    }
                    else
                    {
                        echo "Category not found";
                    }
                    
                }
                else
                {
                    echo "Id missing from url";
                }

                ?>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>