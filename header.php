<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
		<title><?php thachpham_title_header(); ?></title>
		
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<?php wp_head(); ?>				
</head>

<body <?php body_class(); ?> class="home page page-id-8 page-template-default airsupply_body body_style_wide body_filled article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide wpb-js-composer js-comp-ver-4.12.1 vc_responsive">

	<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="http://airsupply.themerex.net/" data-separator="yes"></a><a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
		
		<div class="body_wrap">
			<div class="page_wrap">
			<div class="top_panel_fixed_wrap">
				
		</div> 

		<header class="top_panel_wrap top_panel_style_1 scheme_original">
			<div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
				<div class="top_panel_middle" >
					<div class="content_wrap">
						<div class="columns_wrap columns_fluid no_margins">

								<?php thachpham_logo(); ?>

							<div class="contact_information column-2_3">
		                        <div class="columns_wrap columns_fluid no_margins">

									<div class="contact_field contact_phone column-1_3">
										<span class="contact_icon icon-phone-call"></span>
										<span class="contact_label open_hours_label"><?php thachpham_tendt(); ?></span>
										<span class="contact_email"><p><?php thachpham_sodt(); ?></p></span>
									</div>
									 <div class="contact_field open_hours column-1_3">
									 	<span class="contact_icon icon-clock-1"></span>
										<span class="contact_label open_hours_label"><?php thachpham_tieude_thoigian(); ?></span>
										<span class="open_hours_time"><p><?php thachpham_thoigian(); ?></p></span>
									</div>
									 <div class="contact_field contact_address column-1_3">
									 	<span class="contact_icon icon-pin-1"></span>
										<span class="contact_label contact_address_1"><?php thachpham_tenduong(); ?></span>
										<span class="contact_address_2"><p><?php thachpham_tinhthanh(); ?></p></span>
									</div> 
		                            
		                        </div>
		                    </div>

		                </div>
					</div>
				</div>


				<div class="top_panel_bottom">
					<div class="content_wrap clearfix">

							
							<?php 
					 			wp_nav_menu( array(
								     'theme_location' => 'main-nav', // tên location cần hiển thị
								     'container' => 'nav', // thẻ container của menu
								     'container_class' => 'menu_main_nav_area menu_hover_fade', //class của container
								     'menu_id' => 'menu_main', //id của menu bên trong
								     'menu_class' => 'menu_main_nav' // class của menu bên trong
								) ); 
							?>

		                
					</div>
				</div>
			</div>
		</header>




		<!-- Khi responsive thì sẽ dùng tới code này để hiển thị -->	
		<div class="header_mobile">
			<div class="content_wrap">
				<div class="menu_button icon-menu"></div>
				<div class="logo">
					<a href="#"><?php thachpham_logo(); ?></a>
				</div>
			</div>

			<div class="side_wrap">
				<div class="close">Close</div>
				<div class="panel_top">
					
						<?php 
						 		wp_nav_menu( array(
									     'theme_location' => 'main-nav', // tên location cần hiển thị
									     'container' => 'nav', // thẻ container của menu
									     'container_class' => 'menu_main_nav_area menu_hover_fade', //class của container
									     'menxu_id' => 'menu_main',
									     'menu_class' => 'menu_main_nav' // class của menu bên trong
									) ); 
								?>

				</div>

		        <div class="panel_middle">
					<div class="contact_field contact_address">
						<span class="contact_icon icon-home"></span>
						<span class="contact_label contact_address_1"><?php thachpham_tenduong(); ?></span>
						<span class="contact_address_2"><?php thachpham_tinhthanh(); ?></span>
					</div>
					<div class="contact_field contact_phone">
						<span class="contact_icon icon-phone"></span>
						<span class="contact_label contact_phone"><?php thachpham_sodt(); ?><?php thachpham_sofax(); ?></span>
						
					</div>

					<div class="top_panel_top_user_area">
						<ul id="menu_user_mobile" class="menu_user_nav"></ul>
					</div>		
				</div>
				
				<div class="panel_bottom"></div>
			</div>
			<div class="mask"></div>
		</div>	
