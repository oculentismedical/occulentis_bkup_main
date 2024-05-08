<header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top">
                <div class="container nav-header-container">
                    <div class="row">
                        <!-- start logo -->
                        <div class="col-md-2 col-xs-5">
                            <a href="<?php echo base_url();?>" title="oculentis" class="logo"><img src="<?php echo base_url('images/logo/Oculentis.png');?>" data-rjs="<?php echo base_url('images/logo/Oculentis.png');?>" class="logo-dark default" alt="oculentis"><img src="images/Oculentis.png" data-rjs="<?php echo base_url('images/Oculentis.png');?>" alt="oculentis" class="logo-light"></a>
                        </div>
                        <!-- end logo -->
                        <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                                <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                    <!-- start menu item -->
                                    <li class="dropdown megamenu-fw active">
                                        <a href="<?php echo base_url();?>">Home</a>
                                        <!-- sub menu -->
                                    </li>
                                    <!-- end menu item -->
                                     <li class="dropdown megamenu-fw">
                                        <a href="<?php echo base_url('about');?>">About</a>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="dropdown megamenu-fw">
                                        <a href="javascript:void(0);">Products</a><i class="text-medium-gray fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                        <!-- sub menu -->
                                        <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                            <ul class="equalize sm-equalize-auto">
                                                <!-- start sub menu column -->
                                                <li class="mega-menu-column col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <!-- start sub menu item -->
                                                    <ul>
													<h5 style="color:#ff214f;">Surgical</h5>
                                                        <li class="dropdown-header">Hydrophillic</li>
                                                        <li><a href="<?php echo base_url('ensignloop_c');?>">Ensign (clear C-Loop)</a></li>
                                                        <li><a href="<?php echo base_url('ensignloop');?>">Ensign plus (Yellow C-Loop)</a></li>
                                                        <li><a href="<?php echo base_url('ensignPlus_c');?>">Ensign (Clear Flex)</a></li>
                                                        <li><a href="<?php echo base_url('ensignPlus');?>">Ensign plus(Yellow Flex)</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="dropdown-header">Hydrophobic</li>
                                                        <li><a href="<?php echo base_url('Optiphob');?>">Optiphob</a></li>
                                                        <li><a href="<?php echo base_url('Optilux');?>">Optilux</a></li>
                                                    </ul>
													 <ul>
													     <li class="dropdown-header">Edof <span style="color:#fff">(Coming soon)</span></li>
														<li></li>
                                                        <li class="dropdown-header">Multifocal <span style="color:#fff">(Coming soon)</span></li>
														<li></li>
                                                        <li class="dropdown-header">Toric <span style="color:#fff">(Coming Soon)</span></li>
                                                    </ul>
                                                 </li>
                                                <li class="mega-menu-column col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <!-- start sub menu item -->
                                                    <ul>
													<h5 style="color:#ff214f;">Pharma</h5>
                                                        <li class="dropdown-header">Pharma products</li>
                                                        <li><a href="<?php echo base_url('pharma#Antibiotic');?>">Antibiotics</a></li>
                                                        <li><a href="<?php echo base_url('pharma#lubricating');?>">Lubricants</a></li>
                                                        <li><a href="<?php echo base_url('pharma');?>">Multivitamins</a></li>
                                                        <li><a href="<?php echo base_url('pharma#Anti-Glaucoma');?>">Anti glaucoma</a></li>
                                                        <li><a href="<?php echo base_url('pharma#Analgesic');?>">Analgesic</a></li>
                                                     </ul>
                                                </li>
                                                <!-- end sub menu column -->

                                                <!-- start sub menu column -->
                                                <li class="mega-menu-column col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <!-- start sub menu item -->
														<ul>
															<h5 style="color:#ff214f;">OVDS</h5>
																<li class="dropdown-header">OVDS</li>
																<li ><a href="">BSS <span style="color:#fff">(Coming soon)</span></a></li>
																<li><a href="<?php echo base_url('clarecor');?>">viscoelastic</a></li>
															</ul>                                                
														<ul>
														   <li> <a class="btn btn-danger btn-transparent-light-gray btn-rounded text-center" style="width:80%" download href="<?php echo base_url('images/Broucher.pdf')?>">Download Brochure</a></li>
                                                        </ul>
                                                </li>
                                                <!-- end sub menu column -->
                                                <!-- start sub menu column -->
                                                <li class="mega-menu-column col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <!-- start sub menu item -->
                                                    <ul>
                                                        <li>
                                                            <a href="" class="menu-banner-image"><img src="<?php echo base_url('images/product.jpg');?>" alt="portfolio"/></a>
                                                        </li>
														<li>
                                                            <a href="" class="menu-banner-image"><img src="<?php echo base_url('images/injector.png');?>" alt="portfolio"/></a>
                                                        </li>
                                                     
                                                    </ul>
                                                    <!-- end sub menu item -->
                                                </li>
                                                <!-- end sub menu column -->
                                            </ul>
                                            <!-- end sub menu -->
                                        </div>
                                    </li>
									 <li class="dropdown megamenu-fw">
                                        <a href="<?php echo base_url('visions');?>">Your Vision</a>
                                        <!-- sub menu -->
                                    </li>
									  <li class="dropdown megamenu-fw">
                                        <a href="<?php echo base_url('contact');?>">Contact us</a>
                                        <!-- sub menu -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
            <!-- start push menu -->
           

        </header>