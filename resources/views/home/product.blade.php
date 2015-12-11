@extends('header&footer')
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

<link href="themes/css/main.css" rel="stylesheet"/>
<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>

@section('content')
<div id="main">
    <div class="container-fluid">
        <!-- scripts -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="themes/js/superfish.js"></script>
        <script src="themes/js/jquery.fancybox.js"></script>

        <script type="text/javascript" language="JavaScript">
            $(function () {
                $('#myTab a:first').tab('show');
                $('#myTab a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                })
            })
            $(document).ready(function() {
                $('.thumbnail').fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none'
                });

                $('#myCarousel-2').carousel({
                    interval: 2500
                });
            });
        </script>

        <section class="main-content" style="width: 1200px; margin: auto">
            <ol class="breadcrumb">
                <li>Home</li>
                <li class="active">Prodcut</li>
            </ol>
            <hr/>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span4">
                            <a href="images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="images/ladies/1.jpg"></a>
                            <ul class="thumbnails small">
                                <li class="span1">
                                    <a href="images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="images/ladies/2.jpg" alt=""></a>
                                </li>
                                <li class="span1">
                                    <a href="images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="images/ladies/3.jpg" alt=""></a>
                                </li>
                                <li class="span1">
                                    <a href="images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="images/ladies/4.jpg" alt=""></a>
                                </li>
                                <li class="span1">
                                    <a href="images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="images/ladies/5.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span5">
                            <address>
                                <strong>Level:</strong> <span>Master Grade</span><br>
                                <strong>Product Code:</strong> <span>Wing-0-phoenix</span><br>
                                <strong>Reward Points:</strong> <span>0</span><br>
                                <strong>Availability:</strong> <span>998</span><br>
                            </address>
                            <h4><strong>Price: ￥587.50</strong></h4>
                        </div>
                        <div class="span5">
                            <form class="form-inline">
                                <label class="checkbox">
                                    <input type="checkbox" value=""> Option one is this and that
                                </label>
                                <br/>
                                <label class="checkbox">
                                    <input type="checkbox" value=""> Be sure to include why it's great
                                </label>
                                <p>&nbsp;</p>
                                <label>Quantity:</label>
                                <input type="text" class="input-large" placeholder="1">
                                <button class="btn btn-primary" type="submit">Add to cart</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span9">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#home">Description</a></li>
                                <li class=""><a href="#profile">Additional Information</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">It's cute! It's amazing! Featured in the ending credits of the Build Fighters Try animation, the Petit Bear guy is now available in 4 new colors! Each Petit Bear guy comes with a puzzle display stand that can be connected to other Petit Bear guy kits to display together! Runner x 3 Sticker, Instruction Manual.</div>
                                <div class="tab-pane" id="profile">
                                    <table class="table table-striped shop_attributes">
                                        <tbody>
                                        <tr class="">
                                            <th>Size</th>
                                            <td>1:100 & 1:144</td>
                                        </tr>
                                        <tr class="alt">
                                            <th>Colour</th>
                                            <td>Red, Yellow, Pink, Blue</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="span9">
                            <br>
                            <h4 class="title">
                                <span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
                            </h4>
                            <div id="myCarousel-1" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails listing-products">
                                            <li class="span3">
                                                <div class="product-box">
                                                    <a href=""><img width="100%" src="images/ladies/6.png"></a><br/>
                                                    <a href="" class="title">Wuam ultrices rutrum</a><br/>
                                                    <a href="#" class="category">Suspendisse aliquet</a>
                                                    <p class="price">$341</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <a href=""><img width="100%" src="images/ladies/5.jpg"></a><br/>
                                                    <a href="" class="title">Fusce id molestie massa</a><br/>
                                                    <a href="#" class="category">Phasellus consequat</a>
                                                    <p class="price">$341</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <a href=""><img width="100%" src="images/ladies/4.jpg"></a><br/>
                                                    <a href="" class="title">Praesent tempor sem</a><br/>
                                                    <a href="#" class="category">Erat gravida</a>
                                                    <p class="price">$28</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails listing-products">
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href=""><img width="100%" src="images/ladies/1.jpg"></a><br/>
                                                    <a href="" class="title">Fusce id molestie massa</a><br/>
                                                    <a href="#" class="category">Phasellus consequat</a>
                                                    <p class="price">$341</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <a href=""><img width="100%" src="images/ladies/2.jpg"></a><br/>
                                                    <a href="">Praesent tempor sem</a><br/>
                                                    <a href="#" class="category">Erat gravida</a>
                                                    <p class="price">$28</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href=""><img width="100%" src="images/ladies/3.jpg"></a><br/>
                                                    <a href="" class="title">Wuam ultrices rutrum</a><br/>
                                                    <a href="#" class="category">Suspendisse aliquet</a>
                                                    <p class="price">$341</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span3 col">
                    <div class="block">
                        <ul class="nav nav-list below">
                            <li class="nav-header">MANUFACTURES</li><hr />
                            <li><a href="woman">HIGH GRADE</a></li>
                            <li><a href="woman">Real Grade</a></li>
                            <li><a href="woman">Master Grade</a></li>
                            <li><a href="woman">Perfect Grade</a></li>
                            <li><a href="woman">First Grade</a></li>
                        </ul>
                    </div>
                    <div class="block">
                        <h4 class="title">
                            <span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                        </h4>
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href=""><img width="100%" src="images/ladies/7.jpg"></a><br/>
                                                <a href="" class="title">Fusce id molestie massa</a><br/>
                                                <a href="" class="category">Suspendisse aliquet</a>
                                                <p class="price">$261</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <a href="#"><img width="100%" src="images/ladies/8.png"></a><br/>
                                                <a href="#" class="title">Tempor sem sodales</a><br/>
                                                <a href="#" class="category">Urna nec lectus mollis</a>
                                                <p class="price">$134</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <h4 class="title"><strong>Best</strong> Seller</h4>
                        <ul class="small-product">
                            <li>
                                <a href="#" title="Praesent tempor sem sodales">
                                    <img src="images/ladies/1.jpg" alt="Praesent tempor sem sodales">
                                </a>
                                <a href="#">Praesent tempor sem</a>
                            </li>
                            <li>
                                <a href="#" title="Luctus quam ultrices rutrum">
                                    <img src="images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
                                </a>
                                <a href="#">Luctus quam ultrices rutrum</a>
                            </li>
                            <li>
                                <a href="#" title="Fusce id molestie massa">
                                    <img src="images/ladies/3.jpg" alt="Fusce id molestie massa">
                                </a>
                                <a href="#">Fusce id molestie massa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
