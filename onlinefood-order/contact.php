<?php include('partials-front/menu.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>
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
.btn{
    padding:.7rem 3rem;
    font-size: 2rem;
    color:#fff;
    background:var(--gradient);
    border-radius: 5rem;
    margin-top: 1rem;
    cursor: pointer;
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
    position: relative;
    overflow: hidden;
    z-index: 0;
}

.btn::before{
    content: '';
    position: absolute;
    top:-1rem; left:-100%;
    background:#fff9;
    height:150%;
    width:20%;
    transform: rotate(25deg);
    z-index: -1;
}

.btn:hover::before{
    transition: .3s linear;
    left: 120%;
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

<body>
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

<?php include('partials-front/footer.php'); ?>