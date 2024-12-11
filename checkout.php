<?php 

// Checkout - User Page
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
            <a href = "checkout.php" class="text-white link-underline-primary">
                Checkout 
            </a>
        </h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>Basic Details</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Name</label>
                                    <input type="text" name="name" placeholder="Enter your full name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">E-mail</label>
                                    <input type="email" name="email" placeholder="Enter your email address" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Phone Number</label>
                                    <input type="text" name="phone" placeholder="Enter your phone number" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Pin Code</label>
                                    <input type="text" name="pincode" placeholder="Enter your pin code" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Address</label>
                                    <textarea name="address" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h5>Order Details</h5>
                            <hr>
                                <?php $items = getCartItems(); 
                                $totalPrice = 0;
                                    foreach ($items as $citem) 
                                    {
                                        ?>
                                        <div class="card product_data shadow-sm mb-3">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <img src="uploads/<?= $citem['image_thumbnail'] ?>" alt="Image_Thumbnail" width="60px">
                                                </div>
                                                <div class="col-md-5">
                                                    <label><?= $citem['name'] ?></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>RM <?= $citem['selling_price'] ?></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>x <?= $citem['prod_qty'] ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                    }
                                ?>
                                <hr>
                                <h5>Total Price : <span class="float-end fw-bold"> RM <?=$totalPrice?> </span></h5>
                                <div class="">
                                    <input type="hidden" name="payment_mode" value="COD">
                                    <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Confirm and Place Order | COD</button>
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
