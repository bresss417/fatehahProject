<?php
include('data/conn.php');
session_start();
$que = mysqli_query($conn,"SELECT * FROM product");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/test.css">
    <?php require('data/link.php'); require('data/component.php'); ?>
    <title>Document</title>
</head>
<body>
<section class="our-publication pt-100 pb-70">
            <div class="container">
               
                
                <div class="row">
                    <div class="col-sm-6 col-lg-3"> 
                        <div class="single-publication">
                            <figure>
                                <a href="#">
                                    <img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/1.jpg" alt="Publication Image">
                                </a>

                                <ul>
                                    <li><button href="#" title="Add to Favorite"><i class="fa fa-heart"></i></button></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119 <span>$299</span></h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-3"> 
                        <div class="single-publication">
                            <figure>
                                <a href="#">
                                    <img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/2.jpg" alt="Publication Image">
                                </a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119</h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-3"> 
                        <div class="single-publication">
                            <figure>
                                <a href="#"><img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/3.jpg" alt="Publication Image"></a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119</h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-3"> 
                        <div class="single-publication">
                            <figure>
                                <a href="#"><img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/4.jpg" alt="Publication Image"></a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119</h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3"> 
                        <div class="single-publication">
                            <figure>
                                <a href="#"><img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/4.jpg" alt="Publication Image"></a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119</h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>