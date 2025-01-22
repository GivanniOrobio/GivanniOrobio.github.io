<h1>men</h1>
<div class="product_listing_main">
                                <div class="row">
                                    <?php
                                    $api="http://localhost/myapi/men";
                                    $iniciarCurl = curl_init($api);
                                    curl_setopt($iniciarCurl, CURLOPT_RETURNTRANSFER, true);
                                    $respuesta = curl_exec($iniciarCurl);
                                    if(curl_errno($iniciarCurl)) {
                                        echo "". curl_error($iniciarCurl);
                                    }else{
                                        $carts = json_decode($respuesta, true);
                                        foreach($carts as $cart) {
                                            
                                            echo '
                                            de men
                                            </div>
                                            <div class="page_content">
                                            <form action="/cart" method="post" class="">
                                            <div class="cart-list">
                                            <div class="row cart-item">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="item_image">
                                            <a href="index.php?action=collections/all/products/gucci-oversized-square-sunglasses">
                                                <img src="'.$cart['imagen'].'">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <div class="item_remove pull-right">
                                            <a href="/cart/change?line=1&amp;quantity=0"><i class="fa fa-times"></i></a>
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