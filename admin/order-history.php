<?php 

// Orders --> View Order --> Order History - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php'); 

?>


<div class="container-fluid w-85 ms-11">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bg-warning">
                    <h4 class="text-white"> All Orders / Order History
                        <a href="orders.php" class="btn btn-primary float-end"><i class="fa fa-reply"></i> Back</a>
                    </h4>
                </div>
                <div class="card-body" id="">
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $orders = getOrderHistory();

                                if(mysqli_num_rows($orders) > 0)
                                {
                                    foreach ($orders as $item) {
                                        ?>
                                        <tr>
                                            <td> <?= $item['id']; ?> </td>
                                            <td> <?= $item['name']; ?> </td>
                                            <td> <?= $item['tracking_no']; ?> </td>
                                            <td> <?= $item['total_price']; ?> </td>
                                            <td> <?= $item['created_at']; ?> </td>
                                            <td>
                                                <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-info">
                                                <i class="material-icons opacity-10">visibility</i> View Details</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else      
                                {
                                        ?>
                                        <tr>
                                            <td colspan="5">No orders yet</td>
                                        </tr>
                                        <?php
                                    echo "No data available";
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