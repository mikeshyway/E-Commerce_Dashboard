<?php 
// All Products - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>

<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bg-warning">
                    <h4 class="text-white">All Products</h4>
                </div>
                <div class="card-body" id="products_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Images [1 Thumbnail & 4 Images]</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Query to fetch database records -->
                            <?php
                                $products = getAll("products");

                                if(mysqli_num_rows($products) > 0)
                                {
                                    foreach($products as $item)
                                    {
                                        ?> 
                                            <tr>
                                                <td class="text-center"> <?= $item['id']; ?> </td>
                                                <td class="text-center"> <?= $item['name']; ?> </td>
                                                <td>
                                                    <img src="../uploads/<?= $item['image_thumbnail']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                    <img src="../uploads/<?= $item['image_1']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                    <img src="../uploads/<?= $item['image_2']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                    <img src="../uploads/<?= $item['image_3']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                    <img src="../uploads/<?= $item['image_4']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                </td>
                                                
                                                <!-- use an image tag to display small product image, and a ternary operator to display the visibility status -->
                                                <td class="text-center"> 
                                                    <?= $item['status'] == '0'? "Visible":"Hidden" ?> 
                                                </td>

                                                <!-- To make changes in product, either edit or delete -->
                                                <td class="text-center">
                                                    <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-primary">
                                                    <i class="material-icons opacity-10">edit</i> Edit</a>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-danger delete_product_btn" value="<?= $item['id']; ?>"> 
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

<!-- Using the classname to fetch the product_id using jQuery -->

<?php include('includes/footer.php'); ?>