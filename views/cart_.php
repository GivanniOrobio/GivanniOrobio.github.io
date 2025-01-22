<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $api = "http://localhost/myapi/carts/$id";
    $iniciarCurl = curl_init($api);
    curl_setopt($iniciarCurl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($iniciarCurl);
    if (curl_errno($iniciarCurl)) {
        echo "" . curl_error($iniciarCurl);
    } else {
        $carts = json_decode($respuesta, true);
        foreach ($carts as $cart) {
        }
    }
    curl_close($iniciarCurl);
    echo'
    <div itemscope="" itemtype="http://schema.org/Product" class="product-scope">  
  <meta itemprop="url" content="'.$cart['titulo'].'/'.$cart['id'].'">
  <meta itemprop="image" content="'.$cart['imagen'].'">
  <div class="product_wrap">
    <div class="row">
    <div id="product_image-container" class="col-sm-5">            
                <div class="product_img_big">
                    <div class="bx-wrapper" style="max-width: 100%;">
                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 286px;">
                    <ul class="product_img_big__list" style="width: auto; position: relative;">
                        <li class="firstItem" style="float: none; list-style: none; position: absolute; width: 286px; z-index: 50; display: block;">
                            <a rel="product_images" class="fancybox" href="'.$cart['imagen'].'" title="'.$cart['titulo'].'">
                                <img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'"></a>
                                </li>                        
                            <li style="float: none; list-style: none; position: absolute; width: 286px; z-index: 0; display: none;">
                            <a rel="product_images" class="fancybox" href="'.$cart['imagen'].'" title="'.$cart['titulo'].'"><img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'"></a></li>
                        
                            <li style="float: none; list-style: none; position: absolute; width: 286px; z-index: 0; display: none;"><a rel="product_images" class="fancybox" href="'.$cart['imagen'].'" title="'.$cart['titulo'].'"><img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'"></a></li>
                        
                            <li class="lastItem" style="float: none; list-style: none; position: absolute; width: 286px; z-index: 0; display: none;"><a rel="product_images" class="fancybox" href="'.$cart['imagen'].'" title="'.$cart['titulo'].'"><img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'"></a></li>
                        
                    </ul>
                    </div>
                    <div class="bx-controls">
                    </div>
                    </div>
                </div>

				<div class="product_img_thumbs">
                    <div class="bx-wrapper" style="max-width: 327px;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 88px;">
                    <div class="product_img_thumbs__list" style="width: 860%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"> 
                        <a href="" data-slide-index="0" class="active" style="float: left; list-style: none; position: relative; width: 101px; margin-right: 12px;">
                            <img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'" Chalecos">
                        </a>
                        
                            <a href="" data-slide-index="1" style="float: left; list-style: none; position: relative; width: 101px; margin-right: 12px;">
                                <img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'" Chalecos">
                            </a>
                        
                            <a href="" data-slide-index="2" style="float: left; list-style: none; position: relative; width: 101px; margin-right: 12px;">
                                <img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'" Chalecos">
                            </a>
                        
                            <a href="" data-slide-index="3" style="float: left; list-style: none; position: relative; width: 101px; margin-right: 12px;">
                                <img src="'.$cart['imagen'].'" alt="'.$cart['titulo'].'" Chalecos">
                            </a>
                        
                    </div>
                    </div>
                    <div class="bx-controls bx-has-pager bx-has-controls-direction">
                    <div class="bx-pager bx-default-pager">
                    <div class="bx-pager-item">
                    <a href="" data-slide-index="0" class="bx-pager-link active">1</a>
                    </div>
                    <div class="bx-pager-item">
                    <a href="" data-slide-index="1" class="bx-pager-link">2</a>
                    </div>
                    </div>
                    <div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
                </div>        
	</div>
    <!-- #product-photos -->

      <div class="col-sm-7">
<div itemprop="name" class="product_name">'.$cart['titulo'].'" Chalecos</div>        
             
            
            <form action="/cart/add" method="post" enctype="multipart/form-data" class="form-horizontal" id="product-actions">
              <div class="options clearfix"> 

                <div id="product_price">
                <p class="price product-price">
                <span class="money">$'.$cart['precio'].'</span>
                <span class="money compare-at-price">$'.$cart['precio_antes'].'</span></p>  
                </div>            
                  
                <div id="purchase"> 
                  <label for="quantity">Qty: </label><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">    

                <div class="variants-wrapper clearfix hidden">
                    <div class="selector-wrapper">
                    <select class="single-option-selector" data-option="option1" id="product-select-option-0"><option value="Default">Default</option></select>
                    </div>
                    <select id="product-select" name="id" style="display: none;">
                      
                      <option value="'.$cart['id'].'">Default - $'.$cart['precio'].'</option>
                      
                    </select>
                </div> 
                  
                  <button class="btn btn-cart" type="submit" id="add-to-cart">Add to cart</button>
                </div>

              </div>
              <!-- /.options -->
            </form>          

        <div class="product_details">
          <div class="product_type">Type: <a href="../../types-3?q=Shield" title="Shield">Shield</a></div>
          <div class="product_vendor">Vendor: <a href="../../vendors?q=Chalecos" title="Chalecos">Chalecos</a></div>
        </div>

         <div id="product_description" class="rte" itemprop="description">
            <h4>Description:</h4>
            <p>Our store is the place where you can find any kind of Chalecos. Simply browse through our main categories to find your style and color. Of course we care about brands and as you may have noticed there is a huge section at our website devoted to the history of various Chalecos brands. Also we have great loyalty program so if you want to participate - don`t forget to check it out.</p>
          </div> 

         <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<!--<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>-->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d89903e1583a34e">
</script>
<!-- AddThis Button END -->
      </div>
      <div class="row-fluid">
        <div class="span12">           
              
              <div class="pagination pagination__product"> 
                <ul>                 
                    
                    <li class="left-arrow firstItem">
                    <span class="left">
                    <a href="index.php?action='.$cart['titulo'].'l#content" title="">← Previous Product</a></span></li>               
                  
                    
                    <li class="right-arrow lastItem"><span class="right"><a href="index.php?action='.$cart['titulo'].'#content" title="">Next Product →</a></span></li>
                  
                </ul>
              </div>
              
            
        </div>
      </div>    
    </div>

  </div>

</div>
    ';
}
?>
