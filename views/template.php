<!DOCTYPE html>
<html>
<?php include "Http/modulos/head.php" ?>
<body id="sunglasses" class="template-index">
    <div id="wrapper">
        <div id="wrapper2">
            <!-- HEADER -->
            <header id="header">
                <div class="header_top">
                    <div class="container">
                        <!-- USER MENU -->
                        <?php include "Http/home/navegations/userMenu.php"; ?>
                        <!-- HEADER CART -->
                        <div class="header_cart">
                            <a href="index.php?action=cart"><i class="fa fa-shopping-cart"></i><span class="cart-total-items"><span class="count">0</span></span></a>
                        </div>     
                        <!-- HEADER SEARCH -->
                        <div class="header_search">
                            <form action="index.php?action=search" method="get" class="search-form" role="search">
                                <input id="search-field" name="q" type="text" placeholder=" " class="hint">
                                <button id="search-submit" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="header_center">
                    <div class="container">
                        <!-- LOGO -->
                        <div id="logo">
                            <a href="index.php?action=inicio">
                                <b>Chalecos</b>
                            </a>
                        </div>
                        <!-- NAVIGATION -->
                        <div id="navigation">
                            <?php include "Http/home/navegations/navigation.php";?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- SHOWCASE CUSTOM BLOCKS -->
            <?php
            $link = new Enlaces();
            $link->enlacesController();
            ?>
            <!-- FOOTER -->
            <?php include "./Http/modulos/pie.php" ?>
        </div><!-- / #wrapper2 -->
    </div><!-- / #wrapper -->
    <div class="cart_popup">Product Added to Cart</div>
</body>
</html>