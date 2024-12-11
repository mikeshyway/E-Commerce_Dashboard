 <?php 

// Trending Products under Trending Section - User Page
include('functions/userfunctions.php'); 
include('includes/header.php'); 

if(isset($_GET['product']))
{
    // Fetch the product record
    $product_slug = $_GET['product'];
    $product_data = getSlugActive("products", $product_slug);
    $product = mysqli_fetch_array($product_data);

    // If product record is available, it will be displayed
    if($product)
    {
        ?>
 <div class="py-3 bg-primary">
     <div class="container">
         <h6 class="text-white">
             <a class="text-white link-underline-primary" href="index.php">
                 Home /
             </a>
             <a class="text-white link-underline-primary" href="categories.php">
                 Categories /
             </a>
             <?= $product['name']; ?>
         </h6>
     </div>
 </div>

 <div class="bg-light py-4">
     <div class="container product_data mt-3">
         <div class="row">
             <div class="col-md-4">
                 <div class="shadow">
                     <div id="carouselExampleDark" class="carousel carousel-dark slide">
                         <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                         </div>
                         <div class="carousel-inner">
                             <div class="carousel-item active">
                                 <img src="uploads/<?= $product['image_thumbnail']; ?>" alt="Product Image_Thumbnail" class="w-100">
                             </div>
                             <div class="carousel-item">
                                <img src="uploads/<?= $product['image_1']; ?>" alt="Product Image_1" class="w-100">
                             </div>
                             <div class="carousel-item">
                                <img src="uploads/<?= $product['image_2']; ?>" alt="Product Image_2" class="w-100">
                             </div>
                             <div class="carousel-item">
                                <img src="uploads/<?= $product['image_3']; ?>" alt="Product Image_3" class="w-100">
                             </div>
                             <div class="carousel-item">
                                <img src="uploads/<?= $product['image_4']; ?>" alt="Product Image_4" class="w-100">
                             </div>
                         </div>
                         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                             data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                             data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                         </button>
                     </div>
                     
                 </div>
             </div>
             <div class="col-md-8">
                 <h4 class="fw-bold"><?= $product['name']; ?>
                     <span
                         class="float-end badge bg-warning text-white">
                            <?php 
                                if($product['trending'])
                                { 
                                    echo "Trending"; 
                                } 
                                else if($product['new_arrival'])
                                {
                                    echo "New arrival"; 
                                }
                                else if($product['sales'])
                                {
                                    echo "Sales"; 
                                }
                            ?>
                    </span>
                 </h4>
                 <hr>
                 <p><?= $product['small_description']; ?></p>
                 <div class="row">
                     <div class="col-md-6">
                         <h4> RM <span class="text-success fw-bold"> <?= $product['selling_price']; ?> </span></h4>
                     </div>
                     <div class="col-md-6">
                         <h5> RM <s class="text-danger"> <?= $product['original_price']; ?> </s></h5>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-4">
                         <div class="input-group mb-3" style="width:130px">
                             <button class="input-group-text decrement-btn">-</button>
                             <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                             <button class="input-group-text increment-btn">+</button>
                         </div>
                     </div>
                 </div>

                 <div class="row mt-3">
                     <div class="col-md-6">
                         <button class="btn btn-primary px-4 addToCartBtn" value="<?= $product['id']; ?>"> <i
                                 class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                     </div>
                 </div>

                 <hr>

                 <h6><b>Product Description: </b></h6>
                 <p><?= $product['description']; ?></p>

             </div>
         </div>
     </div>
 </div>

 

 <?php
    }
    else
    {
        echo "Product Not Found";
    }
}
else
{
    echo "Something Went Wrong";
}

include('includes/footer.php'); ?>