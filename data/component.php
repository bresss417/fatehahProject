<?php

    function products($p_name,$p_detail,$price,$p_photo,$product_id){
        $element = "
        
        <div class=\"col-sm-6 col-lg-3\">
        <div class=\"single-publication\">
          <form action=\"index.php\" method=\"POST\">
            <figure>
                <a>
                <img src=\"images/$p_photo\" class=\"card-img-top\" height=\"200\" alt=\"Publication Image\">
                </a> 
                <ul>
                    <input type='hidden' name='product_id' value='$product_id'>
                    <li><button type=\"submit\" name=\"add\" style=\"color:black;\" title=\"เพิ่มไปยังตะกร้า\"><i class=\"fa fa-shopping-cart\"></i></button></li>
                    <li><a href=\"orders.php?p_id=$product_id\" style=\"color:black;\" title=\"สั่งซื่อเลย\"><i class=\"fa fa-credit-card\"></i></a></li>
                </ul>
            </figure>
            <div class=\"publication-content\">
                
                <h3><a href=\"#\">$p_name</a></h3>
                <p class=\"category\">$p_detail</p>
                
                <h4 class=\"price\">฿ $price บาท</h4>
               
            </div>
           &nbsp; <button type=\"submit\" class=\"btn btn-warning btn-sm rounded\" name=\"add\">
                        เพิ่มในตะกร้า
                  </button>
                    <a class=\"btn btn-primary btn-sm rounded\" href=\"orders.php?p_id=$product_id\">สั่งซื่อเลย</a>
          </form> 
        </div>
    </div>
        
        ";
        echo $element;
    }

    
    function proaddmins($p_name,$p_detail,$price,$p_photo,$product_id){
        $element = "
        
        <div class=\"col-sm-6 col-lg-3\">
        <div class=\"single-publication\">
          <form action=\"index.php\" method=\"POST\">
            <figure>
                <a>
                <img src=\"../images/$p_photo\" class=\"card-img-top\" height=\"200\" alt=\"Publication Image\">
                </a> 
                
            </figure>
            <div class=\"publication-content\">
                
                <h3><a href=\"#\">$p_name</a></h3>
                <p class=\"category\">$p_detail</p>
                
                <h4 class=\"price\">฿ $price</h4>
                <a class=\"btn btn-warning btn-sm rounded\" href=\"update.php?p_id=$product_id\">update</a>
                <a class=\"btn btn-danger btn-sm rounded\" href=\"delete.php?p_id=$product_id\">delete</a>
            </div>
          </form> 
        </div>
    </div>
        
        ";
        echo $element;
    }

?>