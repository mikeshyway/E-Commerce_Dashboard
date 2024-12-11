<?php 

// My Orders - User Page (make it visible, and only show records after user made payment and checkout)
include('functions/userfunctions.php'); 
include('includes/header.php'); 

include('authenticate.php'); 

?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href = "index.php" class="text-white link-underline-primary">
                Home / 
            </a>
            <a href = "#" class="text-white link-underline-primary">
                My Orders 
            </a>
        </h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <h4>My Orders</h4>
                        <div class="underline mb-2"></div>
                        <br><br>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tracking Number</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $orders = getOrders();

                                if(mysqli_num_rows($orders) > 0)
                                {
                                    foreach ($orders as $item) {
                                        ?>
                                        <tr>
                                            <td> <?= $item['id']; ?> </td>
                                            <td> <?= $item['tracking_no']; ?> </td>
                                            <td>RM <?= $item['total_price']; ?> </td>
                                            <td> <?= $item['created_at']; ?> </td>
                                            <td>
                                                <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-primary">View details</a>
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