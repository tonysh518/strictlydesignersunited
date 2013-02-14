<?php 
	$who_node = node_load(array('nid' => 2));
	$service_node = node_load(array('nid' => 3));
	$portfolio_node = node_load(array('nid' => 4));
 ?>
<div class="container">
    <div class="page_left">
    	<div class="logo"><img src="images/logo.gif" /></div>
        <div class="navigation">
            <ul>
                <li><a href="#section1">Who We Are</a></li>
                <li><a href="#section2">Crew</a></li>
                <li><a href="#section3">Events</a></li>
                <li><a href="#section4">Design Services</a></li>
                <li><a href="#section5">Protfolio</a></li>
                <li><a href="#section6">Gallery</a></li>
                <li><a href="#section7">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="page_right">
    	<div class="section section1" id="section1">
        	<div class="section_inner">
        		<h2>Who We Are</h2>
                <div class="who_slider">
	                <?php foreach($who_node->field_image[und] as $who_images):?>
	                	<?php print theme('image_style', array('style_name' => '615x408', 'path' => $who_images['uri'])); ?>
	                <?php endforeach;?>
                </div>
                <div class="home_text">
                    <?php print $who_node->body[und][0][value]?>
                </div>
            </div>
        </div>
        
        <div class="section section2" id="section2">
            <div class="section_inner">
                <h2>The Crew</h2>
                 <?php
					print views_embed_view('crew', 'block');
				?>
            </div>
        </div>
        
        <div class="section section3" id="section3">
        	<div class="section_inner">
                <h2>Events</h2>
                <?php
					print views_embed_view('event', 'block',1);
				?>
            </div>
        </div>
        
        <div class="section section4" id="section4">
        	<div class="section_inner">
                <h2>Design Services</h2>
                <div class="who_slider">
	                <?php foreach($service_node->field_image[und] as $service_images):?>
	                	<?php print theme('image_style', array('style_name' => '615x408', 'path' => $service_images['uri'])); ?>
	                <?php endforeach;?>
                </div>
                <div class="home_text">
                	<?php print $service_node->body[und][0][value]?>
                </div>
        	</div>
        </div>
        
        <div class="section section5" id="section5">
            <div class="section_inner">
                <h2>Portfolio</h2>
                <div class="who_slider">
	                <?php foreach($portfolio_node->field_image[und] as $portfolio_images):?>
	                	<?php print theme('image_style', array('style_name' => '615x408', 'path' => $portfolio_images['uri'])); ?>
	                <?php endforeach;?>
                </div>
                <div class="home_text">
                    <?php print $portfolio_node->body[und][0][value]?>
                </div>
            </div>
        </div>
        
        <div class="section section6" id="section6">
        	<div class="section_inner">
                <h2>Gallery</h2>
                <div class="gallery_nav">
                    <ul>
                        <li><a href="###" class="actived">Furniture</a></li>
                        <li><a href="###">Art</a></li>
                        <li><a href="###">Fashion</a></li>
                        <li><a href="###">Project</a></li>
                        <li><a href="###">Offers</a></li>
                    </ul>
                </div>
                <div id="gallery_wrap">
                	<div class="gallery_box" id="gallery1">
		                <?php
							print views_embed_view('gallery', 'block',1);
						?>
                	</div>
                	<div class="gallery_box" id="gallery2">
		                <?php
							print views_embed_view('gallery', 'block',2);
						?>
                	</div>
                	<div class="gallery_box" id="gallery3">
		                <?php
							print views_embed_view('gallery', 'block',3);
						?>
                	</div>
                	<div class="gallery_box" id="gallery4">
		                <?php
							print views_embed_view('gallery', 'block',4);
						?>
                	</div>
                	<div class="gallery_box" id="gallery5">
		                <?php
							print views_embed_view('gallery', 'block',5);
						?>
                	</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
        <div class="section section7" id="section7">
        	<div class="section_inner">
                <h2>Contact us</h2>
                <div class="contactus">
                    <div id="googlemap"></div>
                    <div class="map_left">
                        <div>Strictly</div>
                        <div>Room 106, No. 601, Waima Road</div>
                        <div>Shanghai, China, 200010</div>
                    </div>
                    <div class="map_right">
                        <div>Freephone: 86 18801876806</div>
                        <div>Telephone: 86 18801876806</div>
                        <div>E-MAIL: info@strictlydesignersunited.com</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>