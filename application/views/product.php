<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/menu')?>
 <section class="no-padding cover-background one-fourth-screen top-space" style="background-image: url('images/moody-762257_1920.jpg');">
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                              <h1 class="text-white alt-font font-weight-700">Product</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product banner section -->
        <!-- start product information section -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-bottom sm-margin-50px-bottom xs-margin-30px-bottom">
                        <h4 class="font-weight-300 text-extra-dark-gray margin-15px-bottom"><?php echo $title?></h4>
                          </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-1 line-height-28 last-paragraph-no-margin sm-margin-50px-bottom xs-margin-30px-bottom wow fadeIn text-extra-dark-gray">
					 <div class= wow fadeInUp">
			             <?php if (isset($mat)) { echo $mat;}?>
                        <ul class="portfolio-grid  gutter-large hover-option6 lightbox-portfolio">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item wow zoomIn last-paragraph-no-margin">
                                    <figure>
                                        <div class="portfolio-img  position-relative text-center overflow-hidden">
										<img src="<?php echo $img?>" alt=""/>
                                            <div class="portfolio-icon">
                                               <a class="gallery-link" title="<?php echo $title?>" href="<?php echo $img?>"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <figcaption class="bg-white">
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                       <span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block"><?php echo $title?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
							</ul>
                        
                    </div>
                       <p><?php echo $feature;?></p>
                        <?php if (isset($material)) { echo $material;}?>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-1 line-height-26 wow fadeIn text-extra-dark-gray">
				    <?php if (isset($table)) { echo $table;}?>
				   
                      
                
                        </div>
                
                </div>
            </div>
        </section>
        <!-- end product information section -->
        <!-- start product images section -->
         <section id="expertise" class="wow fadeIn parallax" data-stellar-background-ratio="0.4" style="background-image:url('images/chris-barbalis-RbVl6C9x2J8-unsplash.jpg')">
            <div class="opacity-full bg-black"></div>
			 <div class="container">
               <div class="row">
                    <!-- start product item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp">
                        <img src="<?php echo base_url('images/slide.jpg');?>" alt="brochure image" />
                    </div>
                    <!-- end product item -->
                    <!-- start product item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php echo base_url('images/slide2.jpg');?>" alt="brochure image" />
                    </div>
                    <!-- end product item -->
                    <!-- start product item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php echo base_url('images/slide3.jpg');?>" alt="brochure image" />
                    </div>
                    <!-- end product item -->
                </div>
                </div>
            </div>
        </section>

        <!-- end product images section -->
        <!-- start product quotes section -->
      
    
	<?php $this->load->view('layout/footer')?>
