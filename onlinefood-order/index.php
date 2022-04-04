    <?php include('partials-front/menu.php'); ?>




    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search Foods" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Various Food Categories</h2>

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white" ><mark style="background-color:white;"><?php echo $title; ?></mark></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Our Food Menu</h2>

            <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">$<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>

            

 

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>


<body>
<style>
*{
    font-family: 'Open Sans', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    border:none; outline: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}
.contact{
    background:#111;
    text-align:center;
    padding: 2rem;
}

.contact .heading{
    color:#ffd;
}

.contact .row{
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-wrap: wrap;
}

.contact .row form{
    flex:1 1 50rem;
    background:#222;
    padding:2rem;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 3rem;
    align-items: flex-start;
}

.contact .row form .box{
    height:3rem;
    width:49%;
    border:.1rem solid #eee;
    padding:0 1rem;
    margin:1rem 0;
    font-size: 1.5rem;
    color:#fff;
    background:none;
    text-transform: none;
}

.contact .row form .box:focus{
    border-color: #f39c12;
}

.contact .row form .box::placeholder{
    text-transform: capitalize;
}

.contact .row form .address{
    height:8rem;
    padding:1rem;
    resize: none;
    width:100%;
}

.contact .row form .btn:hover{
    background:#fff;
    color:#333;
}

.contact .row .image img{
    height: 80vh;
    margin-top: 2rem;
}
@media (max-width:768px){

html{
    font-size: 55%;
}
.contact .row .image{
        display: none;
    }

}

@media (max-width:500px){

    html{
        font-size: 50%;
    }

    .contact .row form .box{
        width:80%;
    }

}
</style>
<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">

    <form action="">
        <input type="text" placeholder="full name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <input type="number" placeholder="your number" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
        <input type="submit" class="btn" value="send now">
    </form>

    <div class="image">
        <img src="images/contact.png" alt="">
    </div>

</div>

</section>
    <!-- fOOD Menu Section Ends Here -->
>
    <?php include('partials-front/footer.php'); ?>