<?php
$api = "http://localhost/myapi/carts";
$iniciarCurl = curl_init($api);
curl_setopt($iniciarCurl, CURLOPT_RETURNTRANSFER, true);
$respuesta = curl_exec($iniciarCurl);
if (curl_errno($iniciarCurl)) {
    echo "" . curl_error($iniciarCurl);
} else {
    $carts = json_decode($respuesta, true);
    echo '<h2 class="page_heading">Más Pedidos</h2>
                                            <div class="product-listing__index">
                            <div class="product_listing_main">
                                <div class="row">
                                        ';
    foreach ($carts as $cart) {

        echo '
        mas pedidos
<div class="wow col-sm-3 product product__'.$cart['id'].'">
    <div>
        <div class="product_img">
            <a href="index.php?action=cart_&id='.$cart['id'].'" class="hover__1">
                <img src="'.$cart['imagen'].'" alt="Bolle Bandido Safety Glasses Smoke Lens">                
                    ';
                     if($cart['descuento']){echo "<div class='sale'>Sale</div>";};

                     echo ' 
            </a>
        </div>

        <div class="product_info">
            <div class="product_price">
                <span class="money">$'.$cart['precio'].'</span>
                <span class="money compare-at-price">$'.$cart['precio_antes'].'</span>
            </div>
            <div class="product_name">
                <a href="index.php?action=products/'.$cart['titulo'].'">'.$cart['titulo'].'</a>
            </div>';

            if($cart['descuento']){
                echo '<div class="product_desc">Producto en oferta. obtenga un descuento de el %'.$cart['descuento'].'</div>';
            };

            echo'             

            <div class="product_links">
                <form id="pst" method="post" action="/cart/add&id='.$cart['id'].'">

                    <input type="hidden" name="id" value="'.$cart['id'].'">

                    <!-- START BUY -->

                    <button class="btn btn-cart" type="submit">Add to cart</button>
                    <!-- END BUY -->
                </form>
                <a class="btn" href="index.php?action=products/'.$cart['titulo'].'l">Details</a>
            </div>
        </div>

    </div>
</div>

';
    }
};
?>

</div>
</div>
</div>