<?php 

// Add New Category - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>



<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bg-warning">
                    <h4 class="text-white">Add Category</h4>
                </div>
                <!-- Application form to upload new categories --> 
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter category name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Slug</label>
                                <input type="text" name="slug" placeholder="Enter slug" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea rows="3" name="description" placeholder="Enter description"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Upload Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Status</label>
                                <input type="checkbox" name="status">
                            </div>
                        </div>
                        <!-- When "save" button is clicked, the form submits the data to a file named code.php. -->
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>