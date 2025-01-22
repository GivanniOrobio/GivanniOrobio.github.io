<!-- MAIN CONTENT -->

<div class="container">

    <?php include 'Http/home/navegations/titlePag.php' ?>

    <div class="row sidebar_right ">

        <div class="column_center">

            <div id="main_content" class="col-sm-9">

                <div class="cart-scope">

                    <div class="page_header">
                        <h1 class="page_heading">Carrito de compras</h1>
                    </div>

                    <div class="page_content">
                        <div>
                            <h2>¡Parece que tu carrito está actualmente vacío!</h2>
                            <h3>Puedes seguir navegando <a href="index.php?action=collections/all">aquí</a>.</h3>
                        </div>
                    </div>

                    <div id="payment-methods">
                        <ul>
                            <li> <img class="nequi" src="views/img/cc-PagoNequi.jpg" alt=""> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="column_right column col-sm-3">
            <div class="widget widget__collections">
                <h3 class="widget_header">Colección</h3>
                <div class="widget_content">
                    <ul class="list">

                        <li class="frontpage">
                            <a href="index.php?action=collections/brands" title="Brands">Marcas</a>
                        </li>

                        <li class="men">
                            <a href="index.php?action=collections/men" title="Men">Men</a>
                        </li>



                        <li class="styles">
                            <a href="index.php?action=collections/styles" title="Styles">Styles</a>
                        </li>



                        <li class="women">
                            <a href="index.php?action=collections/women" title="Women">Women</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="widget widget__types">
                <h3 class="widget_header">Product Types</h3>
                <div class="widget_content">
                    <ul class="list">

                        <li class="Butterfly"><a href="collections/types.html?q=Butterfly" title="Butterfly">Butterfly</a></li>

                        <li class="Oval"><a href="index.php?action=collections/types-1?q=Oval" title="Oval">Oval</a></li>

                        <li class="Rimless"><a href="index.php?action=collections/types-2?q=Rimless" title="Rimless">Rimless</a></li>

                        <li class="Shield"><a href="index.php?action=collections/types-3?q=Shield" title="Shield">Shield</a></li>

                        <li class="Wayfarer"><a href="index.php?action=collections/types-4?q=Wayfarer" title="Wayfarer">Wayfarer</a></li>

                    </ul>
                </div>
            </div>
            <?php 
            include 'views/collections/bestSellers.php';
            ?>
        </div>


    </div>

</div>