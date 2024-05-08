<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/menu')?>
 <section class="no-padding cover-background one-fourth-screen top-space" style="background-image: url('<?php echo base_url('images/moody-762257_1920.jpg')?>');">
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                              <h1 class="text-white alt-font font-weight-700"><?php echo $title;?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product banner section -->
		<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
            <div class="container">
                <div class="row equalize xs-equalize-auto">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
                        <div class="display-table-cell vertical-align-middle text-left xs-text-center">
                            <!-- start page title -->
                            <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase"><?php echo $title;?></h1>
                            <!-- end page title -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
		 <section>
            <div class="container">
                <div class="row">
                    <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom no-padding-left sm-no-padding-right">
                        <div class="col-md-12 col-sm-12 col-xs-12 blog-details-text last-paragraph-no-margin">
								<?php echo $content;?>
						</div>
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-seven-bottom margin-eight-top">
                            <div class="divider-full bg-medium-light-gray"></div>
                        </div>
                
                 
                    </main>
                    <aside class="col-md-3 col-sm-12 col-xs-12 pull-right">
                      
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>Oculentis</span></div>
                            <a href="about-me.html"><img src="<?php echo base_url('images/logo/Oculentis---Blue---JPG.jpg');?>" alt="" class="margin-25px-bottom"/></a>
                        </div>
                       
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Your Vision</span></div>
                            <ul class="list-style-6 margin-50px-bottom text-small">
                                <li><a href="<?php echo base_url('vision');?>/1">Eye Anatomy</a></li>
                                <li><a href="<?php echo base_url('vision');?>/2">Near Sighted</a></li>
                                <li><a href="<?php echo base_url('vision');?>/3">Far Sighted</a></li>
                                <li><a href="<?php echo base_url('vision');?>/4">Presbyopia</a></li>
                                <li><a href="<?php echo base_url('vision');?>/5">Astigmatism</a></li>
                                <li><a href="<?php echo base_url('vision');?>/6">Eye Strain</a><span>09</span></li>
                            </ul>   
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    
		<?php $this->load->view('layout/footer')?>