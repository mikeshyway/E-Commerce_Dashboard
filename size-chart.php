<?php 

// Shoe Size Chart- User Page

include('functions/userfunctions.php'); 
include('includes/header.php'); 

include('authenticate.php'); 
?>

<div class="py-5 bg-f2f2f2">
    <div class="container mb-5">
        <div class="row">
            <h1>Footwear Size Chart</h1>
            <div class="underline mb-2 text-align-right"></div>
            <br><br>
            <h3>Find your shoe size measurements now!</h3>
            <p>
                Make sure you are standing, wearing the socks or stockings you will wear with your new shoes. Then
                convert the measurement to your shoe size using the following charts:
            </p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4><b>Women</b></h4>
            </div>
            <div class="col-md-12">
                <img src="uploads/wsizechart.png" class="img-fluid rounded " alt="...">
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4><b>Men</b></h4>
            </div>
            <div class="col-md-12">
                <img src="uploads/msizechart.png" class="img-fluid rounded " alt="...">
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4><b>Kids</b></h4>
            </div>
            <div class="col-md-12">
                <img src="uploads/bksizechart.png" class="img-fluid rounded " alt="...">
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container mt-5">
        <h4>Size Chart Details: </h4>
        <div class="underline mb-2"></div>
        <p>
            Measuring from home is as easy as knowing what size you currently wear and reading below.
        </p>
        <p>
            The below chart will help you find the international conversion chart for womens and mens shoe
            sizing for American, British, European, Australian, Chinese and Japanese, and many more shoe sizes
            systems. Globally there are 7 major shoe size systems, with the US, British, European and Japanese
            size system being the most common ones across the world.
        </p>
        <p>
            The shoe size systems in the UK and the US differ, especially between men's and women's sizes.
            Generally, men's shoe sizes are one size larger than women's in the US. For example, a men's size
            10.5 is equivalent to a women's size 11.5. This knowledge can be useful for shoppers looking for
            deals, as understanding the differences in US men's and women's shoe sizes can open up more options.
        </p>
        <p>
            However, the European shoe size system is not as consistent as others worldwide. For instance, a
            shoe size in France or Germany can vary significantly depending on the manufacturer or brand.
            Therefore, while our size chart is a helpful starting point, please remember that shoe sizes can
            vary based on the brand, manufacturer, and country.
        </p>
    </div>
</div>

<?php include('includes/footer.php'); ?>