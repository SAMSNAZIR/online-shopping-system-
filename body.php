
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/ban.jpg" alt="Los Angeles" style="width:100%;">

      </div>

      <div class="item">
        <img src="img/ban2.jpg" style="width:100%;">

      </div>

      <div class="item">
        <img src="img/ban1.gif" alt="New York" style="width:100%;">

      </div>
      <div class="item">
        <img src="img/ban3.jpg" alt="New York" style="width:100%;">

      </div>
      <div class="item">
        <img src="img/ban4.png" alt="New York" style="width:100%;">

      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



		<!-- SECTION -->
		<div class="section mainn mainn-raised">



		</div>
		<!-- /SECTION -->



		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mi Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Mi Laptops</a></li>
									<li><a href="https://www.amazon.in/s?k=xiomi+10&adgrpid=110999876369&ext_vrnc=hi&gclid=Cj0KCQjwg7KJBhDyARIsAHrAXaH1mNixLc2HCsiFqlvZe8exE06BymLRuL9ty-jQ4iO8qINttra4wK0aAsoVEALw_wcB&hvadid=461869575089&hvdev=c&hvlocphy=9040209&hvnetw=g&hvqmt=b&hvrand=17760898893642523984&hvtargid=kwd-350333708366&hydadcr=24696_1955354&tag=googinhydr1-21&ref=pd_sl_60fojff7el_b">Mi Smartphones</a></li>
									<li><a href="https://www.amazon.in/s?k=mi+camera&adgrpid=61803322227&ext_vrnc=hi&gclid=Cj0KCQjwg7KJBhDyARIsAHrAXaHvYyS02bNPnubOWGQJRM5hfsrDYZrRTk26lL5pFczQnLF_s3quq7saAiMzEALw_wcB&hvadid=382446515653&hvdev=c&hvlocphy=9040209&hvnetw=g&hvqmt=e&hvrand=11080859856936553133&hvtargid=kwd-306362981892&hydadcr=15176_1978173&tag=googinhydr1-21&ref=pd_sl_26j0x7m1qp_e">Mi Cameras</a></li>
									<li><a href="https://www.mi.com/in/index.html?utm_source=google&utm_medium=cpc&utm_campaign=[A_BR[SEM_B[MiBRAND_S]20190102]&gclid=Cj0KCQjwg7KJBhDyARIsAHrAXaG-p3Z_NGElfKESmCd9k4sN2yW4-mw8-8FqIl7_fPOhFYwpl_Y8rDMaAqNJEALw_wcB">Mi Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >

									<?php
                    include 'db.php';


					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "





			";
		}
        ;

}
?>
										<!-- product -->


										<!-- /product -->


										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section mainn mainn-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3></h3>
										<span></span>
									</div>
								</li>


							</ul>
							<h2 class="text-uppercase"></h2>
							<p></p>
							<a class="primary-btn cta-btn" href="https://www.mi.com/in/all-xiaomi-phones">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->

					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';


					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "



								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>


								</div>



			";
		}
        ;

}
?>

										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Mi Laptop</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>


						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div id="get_product_home">
								<!-- product widget -->


							</div>

							<div id="get_product_home2">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/laptop.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi Laptop</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">59,999 <del class="product-old-price">70000</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi Laptop</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$500.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi Laptop</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$500.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Mi Head Phone</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/head.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">HeadPhone</a></h3>
										<h4 class="product-price">1500.00 <del class="product-old-price">$2000.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/p1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">HeadPhone</a></h3>
										<h4 class="product-price">900.00 <del class="product-old-price">$1200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/p2.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">HeadPhone</a></h3>
										<h4 class="product-price">$500.00 <del class="product-old-price">$800.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/p3.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">HeadPhone</a></h3>
										<h4 class="product-price">1000.00 <del class="product-old-price">$1200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/p4.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">HeadPhone</a></h3>
										<h4 class="product-price">$700.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/p5.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">HeadPhone</a></h3>
										<h4 class="product-price">$800.00 <del class="product-old-price">$1000.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs">

					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Mi Watch</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/w1.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">Digital Watch</a></h3>
										<h4 class="product-price">$2000.00 <del class="product-old-price">$2500.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/w2.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">Digital Watch</a></h3>
										<h4 class="product-price">$2000.00 <del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/w3.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">Digital Watch</a></h3>
										<h4 class="product-price">$1500.00 <del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/w4.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$2000.00 <del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->


								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/w5.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">Digital Watch</a></h3>
										<h4 class="product-price">$2500.00 <del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/w6.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mi</p>
										<h3 class="product-name"><a href="#">Digital Watch</a></h3>
										<h4 class="product-price">$3000.00 <del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
