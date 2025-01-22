<!-- ALL CONTENT -->
<div class="container">
    <?php include_once "app/Http/home/navegations/titlePag.php"; ?>
    <div class="row sidebar_right ">
        <div class="column_center">
            <div id="main_content" class="col-sm-9">
                <div class="collection-scope">
                    <div class="page_header">
                        <h1 class="page_heading">Productos</h1>
                    </div>
                    <!-- barra de contenido en pagina -->
                    <div class="page_content">
                        <?php include_once "app/Http/home/navegations/page_content.php"; ?>
                        <!-- collection image & description -->
                        <!-- products sorting -->
                        <?php include_once "app/Http/home/navegations/sort.php"; ?>
                        <!-- products listing -->
                        <div class="product-listing__collection">
                            <div class="product_listing_main">
                                <div class="row" id="0inicio">
                                    <?php
                                    $api="http://localhost/myapi/carts";
                                    $iniciarCurl = curl_init($api);
                                    curl_setopt($iniciarCurl, CURLOPT_RETURNTRANSFER, true);
                                    $respuesta = curl_exec($iniciarCurl);
                                    if(curl_errno($iniciarCurl)) {
                                        echo "". curl_error($iniciarCurl);
                                    }else{
                                        $carts = json_decode($respuesta, true);
                                        foreach($carts as $cart) {
                                            
                                            echo '
                                            de all
                                            </div>
                                            <div class="page_content">
                                            <form action="/cart" method="post" class="">
                                            <div class="cart-list">
                                            <div class="row cart-item">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="item_image">
                                            <a href="localhost://myapi/carts/@id ='.$cart['id'].'">
                                                <img src="'.$cart['imagen'].'">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <div class="item_remove pull-right">
                                            <a href="/cart/change?line=1&amp;quantity=0">
                                            <i class="fa fa-times"></i></a>
                                        </div>
                                        <div class="product_name">
                                            <a href="'.$cart['titulo'].'">
                                                '.$cart['titulo'].'
                                            </a>
                                        </div>
                                        <h3 class="item_vendor">'.$cart['codigo'].'</h3>
                                        <div class="item_price">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="price"><span class="money" data-currency-usd="$'.$cart['precio'].'" data-currency-gbp="&amp;pound;55.85" data-currency="GBP">$'.$cart['precio'].'</span></div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="qty"><label for="updates[]">Qty: <input type="number" name="updates[]" id="updates_793485587" value="1" class="input-small form-control"></label></div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                            </div>                          
                          
                        </form>
                    </div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- SEGUNDA SECCION -->
                            <div class="product_listing_main">
                                <div class="row">
                                    <!-- 
                                    < ?php
                                    $rowDown = new ArticuloControllers();
                                    $rowDown->unArticulo(1);
                                    $rowDown->unArticulo(2);
                                    $rowDown->unArticulo(12);
                                    ?> -->
                                </div>
                            </div>
                        </div>
                        <!-- pagination -->
                        <div id="pagination">
                            <span class="page current">1</span> <span class="page"><a href="all-1.html?page=2" title="">2</a></span> <span class="page"><a href="all-2.html?page=3" title="">3</a></span> <span class="next"><a href="all-1.html?page=2" title="">Next &raquo;</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column_right column col-sm-3">
            <?php include_once "views/collections/collections.php" ?>
            <?php include_once "views/collections/types.php" ?>
            <?php include_once "views/collections/bestSellers.php" ?>   
        </div>
    </div>
</div>