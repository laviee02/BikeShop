<?php
session_start();
?>

<style>

    .header.shop .right-bar .sinlge-bar .single-icon:hover {
	color: #333 !important;
    }
    .header.shop .right-bar .sinlge-bar .single-icon .total-count {
	position: absolute;
	top: -7px;
	right: -8px;
	background: #333 !important;
	width: 18px;
	height: 18px;
	line-height: 18px;
	text-align: center;
	color: #fff;
	border-radius: 100%;
	font-size: 11px;
}
    .list-main li :hover {
        /* font-weight: bold !; */
    }

    .header.shop .nav li:hover a {
        background-color: white !important ;
        /* color: white ; */
    }
    .row a:hover{
        /* background-color: transparent; */
        color: white !important;
    }
    .cool-link {
    display: inline-block;
    color: #000;
    text-decoration: none;
    }

    .cool-link::after {
        content: '';
        display: block;
        width: 0;
        height: 1px;
        background: #000;
        transition: width .4s;
    }

    .cool-link:hover::after {
        width: 100%;
    }
</style>
<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar" style="background-color: #222 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li style="color:#ffff ;"><i style="color:#ffff ;" class="ti-headphone-alt"></i> +84 0979 840 906</li>
                            <li style="color:#ffff ;"><i style="color:#ffff ;" class="ti-email"></i> support@bikeshop.com</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="right-content">
                        <ul class="list-main">
                            <style>
                                .bs {
                                    color:#ffff !important;
                                }
                                .bs:hover{
                                    -webkit-text-stroke: 1px white !important;
                                }
                            </style>
                            <?php if (empty($_SESSION['id'])) { ?>
                            <?php } else { ?>
                                <li><i style="color: #ffff;font-size: 14px;" class="fa-solid fa-user"></i><a class="bs" href=""><?php echo $_SESSION['name'] ?></a></li>
                                <li><i style="color: #ffff;font-size: 14px;" class="fa-solid fa-right-from-bracket"></i><a class="bs" href="logout.php">Log out</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner" style="background-color: #ffff;">
        <div class="container">
            <div class="cat-nav-head">
                <!-- <div class="row">
                    <div class="col-12"> -->
                <div class="menu-area">
                    <!-- Main Menu -->
                    <nav class="navbar navbar-expand-lg">
                        <a href="index.php"><img src="./images/design_sua/logo.png" alt="logo" style="height: 40px"></a>
                        <div class="navbar-collapse">
                            <div class="nav-inner" style="width: 100%;">
                                <ul class="nav main-menu menu navbar-nav" 
                                        style=" display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                width: 100%;">
                                    <li><a style="color:black " class="cool-link" href="index.php">HOME</a></li>
                                    <li><a style="color:black ;" class="cool-link" href="#">PRODUCTS<i class="ti-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a style="color:black ;" class="cool-link" href="product_1.php">BIKES</a></li>
                                            <li><a style="color:black ;" class="cool-link" href="product_2.php">ACCESSORIES</a></li>
                                        </ul>
                                    </li>
                                    <li><a style="color:black ;" class="cool-link" href="#">STORE<i class="ti-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a style="color:black ;" class="cool-link" href="view_cart.php">CART</a></li>
                                            <!-- <li><a style="color:black ;" class="cool-link" href="checkout.php">CHECK OUT</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a style="color:black ;" class="cool-link" href="contact.php">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                            <div>
                                <div class="right-bar" style="display: flex; flex: right; top:0 !important">
                                    <div class="sinlge-bar">
                                        <a href="login.php" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="sinlge-bar shopping">
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            $cart = $_SESSION['cart'];
                                            $num = count($cart);
                                        } else {
                                            $num = 0;
                                        }
                                        ?>
                                        <a href="view_cart.php" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php echo $num ?></span></a>
                                        <!-- Shopping Item -->
                                        <div class="shopping-item">
                                            <?php if (isset($_SESSION['cart'])) {
                                                if (is_array($cart) || is_object($cart)) foreach ($cart as $id => $each) : ?>
                                                    <ul class="shopping-list">
                                                        <li style="display: flex;">
                                                            <div style="width: 100px;margin-right: 20px;">
                                                                <img src="<?php echo $each['anh'] ?>" width="100px" alt="">
                                                                <p style="color: #74140d"><?php echo $each['gia'] ?>$</p>
                                                            </div>
                                                            <div>
                                                                <p style="display: -webkit-box;
                                                                    max-height: 3.2rem;
                                                                -webkit-box-orient: vertical;
                                                                    overflow: hidden;
                                                                    text-overflow: ellipsis;
                                                                    white-space: normal;
                                                                    -webkit-line-clamp: 2;
                                                                    line-height: 1.6rem;
                                                                    margin-top: 10px;
                                                                    font-size: 12px;"><?php echo $each['ten_san'] ?></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                <?php endforeach ?>
                                            <?php } ?>
                                            <style>
                                                .shopping-item a{
                                                    background: black !important;
                                                    color:white !important;
                                                }
                                                .shopping-item a:hover{
                                                    background: white !important;
                                                    color:black !important;
                                                    border:1px solid black !important;
                                                }
                                            </style>
                                            <a style="color: #ffff;" href="view_cart.php" class="btn animate">ORDER</a>
                                        </div>
                                        <!--/ End Shopping Item -->
                                    </div>
                                </div>
                            </div>
                        </nav>
                    <!--/ End Main Menu -->                   
                    </div>     
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
