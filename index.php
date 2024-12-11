<?php 

// Main Index - User Page 
include('functions/userfunctions.php'); 
include('includes/header.php'); 

?>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner text-center">
        <div class="carousel-item active">
            <img src="uploads/ad6.jpg" alt="Product Image_Thumbnail" class="w-95" height="700px">
        </div>
        <div class="carousel-item">
            <img src="uploads/ad4.webp" alt="Product Image_1" class="w-95" height="700px">
        </div>
        <div class="carousel-item">
            <img src="uploads/ad5.jpg" alt="Product Image_2" class="w-95" height="700px">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <h4>Trending Products</h4>
                <hr>
                <div class="owl-carousel">
                    <?php
                    $trendingProducts = getAllTrending();
                    if(mysqli_num_rows($trendingProducts) > 0)
                    {
                        foreach($trendingProducts as $item)
                        {
                            ?>
                    <div class="item">
                        <a href="product-view.php?product=<?= $item['slug']; ?>">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="uploads/<?= $item['image_thumbnail']; ?>" alt="Product Image_Thumbnail"
                                        class="w-100 img-fluid">
                                    <h6 class="text-center"><?= $item['name']; ?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <h4>New Arrival</h4>
                <hr>
                <div class="owl-carousel">
                    <?php
                    $newArrivalProducts = getAllNewArrival();
                    if(mysqli_num_rows($newArrivalProducts) > 0)
                    {
                        foreach($newArrivalProducts as $item)
                        {
                            ?>
                    <div class="item">
                        <a href="product-view.php?product=<?= $item['slug']; ?>">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="uploads/<?= $item['image_thumbnail']; ?>" alt="Product Image_Thumbnail"
                                        class="w-100 img-fluid">
                                    <h6 class="text-center"><?= $item['name']; ?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <h4>Sales</h4>
                <hr>
                <div class="owl-carousel">
                    <?php
                    $salesProducts = getAllSales();
                    if(mysqli_num_rows($salesProducts) > 0)
                    {
                        foreach($salesProducts as $item)
                        {
                            ?>
                    <div class="item">
                        <a href="product-view.php?product=<?= $item['slug']; ?>">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="uploads/<?= $item['image_thumbnail']; ?>" alt="Product Image_Thumbnail"
                                        class="w-100 img-fluid">
                                    <h6 class="text-center"><?= $item['name']; ?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>

<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    });
</script>