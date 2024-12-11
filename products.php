<?php 

// Categories ->  Products - User Page
include('functions/userfunctions.php'); 
include('includes/header.php'); 

if(isset($_GET['category']))
{

    $category_slug = $_GET['category'];
    $category_data = getSlugActive("categories", $category_slug);
    $category = mysqli_fetch_array($category_data);
    
    if($category)
    {
        $cid = $category['id'];

        ?>

        <div class="py-3 bg-primary">
            <div class="container">
                <h6 class="text-white">
                    <a class="text-white link-underline-primary" href = "index.php">
                        Home / 
                    </a>
                    <a class="text-white link-underline-primary" href = "categories.php">
                        Categories / 
                    </a>
                    <?= $category['name']; ?></h6>
            </div>
        </div> 

        <div class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?= $category['name']; ?></h2>
                        <hr>
                        <div class="row">
                            <?php
                                $products = getProdByCategory($cid); 

                                if(mysqli_num_rows($products) > 0) 
                                {
                                    foreach($products as $item)
                                    {
                                        ?>
                                            <div class="col-md-3 mb-2">
                                                <a href="product-view.php?product=<?= $item['slug']; ?>">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <img src="uploads/<?= $item['image_thumbnail']; ?>" alt="Product Image_Thumbnail" class="w-100 img-fluid">
                                                            <h4 class="text-center mt-3"><?= $item['name']; ?></h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php
                                    }
                                }
                                else 
                                {
                                    echo "No data available";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
    }
    else
    {
        echo "Something Went Wrong";
    }

}
else
{
    echo "Something Went Wrong";
}

include('includes/footer.php'); ?>