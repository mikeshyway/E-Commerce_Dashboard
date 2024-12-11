<?php 
// All Category - Admin Page 

include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>

<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bg-warning">
                    <h4 class="text-white">All Categories</h4>
                </div>
                <div class="card-body" id="category_table">
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <!-- Query to fetch database records -->
                            <?php
                                $category = getAll("categories");

                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                            <tr>
                                                <td> <?= $item['id']; ?> </td>
                                                <td> <?= $item['name']; ?> </td>
                                                <td>
                                                    <img src="../uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                </td>
                                                
                                                <!-- use an image tag to display small category image, and a ternary operator to display the visibility status -->
                                                <td> 
                                                    <?= $item['status'] == '0'? "Visible":"Hidden" ?> 
                                                </td>

                                                <!-- To make changes in category, either edit or delete -->
                                                <td>
                                                    <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-primary">
                                                    <i class="material-icons opacity-10">edit</i> Edit</a>

                                                    <button type="button" class="btn btn-danger delete_category_btn" value="<?= $item['id']; ?>">
                                                    <i class="material-icons opacity-10">delete</i> Delete</button>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else 
                                {
                                    echo "No records found";
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>