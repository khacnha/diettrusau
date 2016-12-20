<?php
/**
@ Khai bao hang gia tri
	@ THEME_URL = lay duong dan thu muc theme
	@ CORE = lay duong dan cua thu muc /core
**/
define( 'THEME_URL', get_stylesheet_directory() );
define ( 'CORE', THEME_URL . "/core" );
/**
@ Nhung file /core/init.php
**/
require_once( CORE . "/init.php" );
/**
@ Thiết lập các chức năng sẽ được theme hỗ trợ
**/
if ( ! function_exists( 'thachpham_theme_setup' ) ) {
	add_theme_support( 'menus' );
	/*
	 * Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó
	 */
	function thachpham_theme_setup() {
		register_nav_menus(array(
	    	'main-nav' => 'Menu header',
	    	'main-footer left' => 'Menu footer Left',
	    	'main-footer right' => 'Menu footer Right',
		));
	}
	add_action ( 'init', 'thachpham_theme_setup' );
}
	$language_folder = THEME_URL . '/languages';
	load_theme_textdomain( 'thachpham', $language_folder );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats',
	array(
	     'image'
		)
	);
/*--------
TEMPLATE FUNCTIONS */
	if (!function_exists('thachpham_header')) {
		function thachpham_header() { ?>
			<div class="site-name">
				<?php
					global $tp_options;
					if( $tp_options['logo-on'] == 0 ) :
				?>
					<?php
						if ( is_home() ) {
							printf( '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							get_bloginfo('sitename') );
						} else {
							printf( '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							get_bloginfo('sitename') );
						}
					?>
				<?php
					else :
				?>
					<img src="<?php echo $tp_options['logo-image']['url']; ?>" />
			<?php endif; ?>
			</div>
			<div class="site-description"><?php bloginfo('description'); ?></div><?php
		}
	}
	if( ! function_exists( 'thachpham_entry_meta' ) ) {
	  function thachpham_entry_meta() {
	    if ( ! is_page() ) :
	        printf( __('<span class="date-published"> at %1$s</span>', 'thachpham'),
	          get_the_date() );
	    endif;
	  }
	}
	if ( ! function_exists( 'thachpham_pagination' ) ) {
	  function thachpham_pagination() {
	    /*
	     * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
	     */
	    if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
	      return '';
	    }
	  ?>
	  <nav class="pagination" role="navigation">
	    <?php if ( get_next_post_link() ) : ?>
	      <div class="prev"><?php next_posts_link( __('Older Posts', 'thachpham') ); ?></div>
	    <?php endif; ?>
	    <?php if ( get_previous_post_link() ) : ?>
	      <div class="next"><?php previous_posts_link( __('Newer Posts', 'thachpham') ); ?></div>
	    <?php endif; ?>

	  </nav><?php
	  }
	}
	if ( ! function_exists( 'thachpham_thumbnail' ) ) {
	  function thachpham_thumbnail( $size ) {
	    // Chỉ hiển thumbnail với post không có mật khẩu
	    if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
	      <?php the_post_thumbnail( 'medium' ); ?><?php
	    endif;
	  }
	}
		if ( ! function_exists( 'thachpham_logo' ) ) {
		  function thachpham_logo() {?>
		    <?php
		      global $tp_options;
		    ?>

		    <?php if ( $tp_options['logo-on'] == 1 ) : ?>

			<div class="column-1_3 contact_logo">
				<div class="logo">
					<a href="<?php echo $tp_options['link_logo']; ?>">
						<img class="logo_main" style="width: 246px; height: 52px;" src="<?php echo $tp_options['logo-image']['url']; ?>">
					</a>

				</div>
			</div>

		    <?php else : ?>

		      <div class="logo">

		        <div class="site-name">
		          <?php if ( is_home() ) {
		            printf(
		              '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
		              get_bloginfo( 'url' ),
		              get_bloginfo( 'description' ),
		              get_bloginfo( 'sitename' )
		            );
		          } else {
		            printf(
		              '<a href="%1$s" title="%2$s">%3$s</a>',
		              get_bloginfo( 'url' ),
		              get_bloginfo( 'description' ),
		              get_bloginfo( 'sitename' )
		            );
		          } // endif ?>
		        </div>
		        <div class="site-description"><?php bloginfo( 'description' ); ?></div>

		      </div>

		      <?php endif;
		  }
		}
		if ( ! function_exists( 'thachpham_entry_header' ) ) {
		  function thachpham_entry_header() {
		    if ( is_single() ) : ?>

		      <h1 class="entry-title">
		        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		          <?php the_title(); ?>
		        </a>
		      </h1>
		    <?php else : ?>
		      <h2 class="entry-title">
		        <!-- <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"> -->
		          <?php the_title(); ?>
		       <!--  </a> -->
		      </h2><?php

		    endif;
		  }
		}
		if ( ! function_exists( 'thachpham_title_header' ) ) {
		  function thachpham_title_header() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['title_header'];

		  }
		}
		if ( ! function_exists( 'thachpham_dichvu' ) ) {
		  function thachpham_dichvu() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['dichvu'];
		  }
		}
		if ( ! function_exists( 'thachpham_tendt' ) ) {
		  function thachpham_tendt() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['tendt'];
		  }
		}
		if ( ! function_exists( 'thachpham_sodt' ) ) {
		  function thachpham_sodt() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['sodt'];
		  }
		}
		if ( ! function_exists( 'thachpham_tieude_thoigian' ) ) {
		  function thachpham_tieude_thoigian() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['tieude_thoigian'];
		  }
		}
		if ( ! function_exists( 'thachpham_thoigian' ) ) {
		  function thachpham_thoigian() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['thoigian'];
		  }
		}
		if ( ! function_exists( 'thachpham_sofax' ) ) {
		  function thachpham_sofax() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['sofax'];
		  }
		}
		if ( ! function_exists( 'thachpham_email' ) ) {
		  function thachpham_email() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['email'];
		  }
		}
		if ( ! function_exists( 'thachpham_link_email' ) ) {
		  function thachpham_link_email() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['link_email'];
		  }
		}

		if ( ! function_exists( 'thachpham_tenduong' ) ) {
		  function thachpham_tenduong() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['tenduong'];
		  }
		}
		if ( ! function_exists( 'thachpham_tinhthanh' ) ) {
		  function thachpham_tinhthanh() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['tinhthanh'];
		  }
		}
		if ( ! function_exists( 'thachpham_slogan_giaiphap' ) ) {
		  function thachpham_slogan_giaiphap() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['slogan_giaiphap'];
		  }
		}
		if ( ! function_exists( 'thachpham_trungtam' ) ) {
		  function thachpham_trungtam() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['trungtam'];
		  }
		}
		if ( ! function_exists( 'thachpham_link_trungtam' ) ) {
		  function thachpham_link_trungtam() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['link_trungtam'];
		  }
		}
		if ( ! function_exists( 'thachpham_footer' ) ) {
		  function thachpham_footer() {?>
		    <?php
		      global $tp_options;
		    ?>
		 				<div class="logo">
							<a href="<?php echo $tp_options['link_logo']; ?>"><img src="<?php echo $tp_options['logo-footer']['url']; ?>" class="logo_main" alt="" width="224" height="49"></a>
						</div>
						<div class="logo_descr"><?php echo $tp_options['logo-descr']; ?>
							<br />
							<img alt="" class="widgets_logo_img" src="<?php echo $tp_options['icon-img-1']['url']; ?>">
							<img alt="" class="widgets_logo_img" src="<?php echo $tp_options['icon-img-2']['url']; ?>">
							<img alt="" class="widgets_logo_img" src="<?php echo $tp_options['icon-img-3']['url']; ?>">
							<br />
						</div>
		      <?php
		  }
		}
		if ( ! function_exists( 'body_image_vct' ) ) {
		  function body_image_vct() {?>
		    <?php
		      	global $tp_options;
		     	echo  $tp_options['image-1']['url']; ?>

		      <?php
		  }
		}
		if ( ! function_exists( 'body_image_banner' ) ) {
		  function body_image_banner() {?>
		    <?php
		      	global $tp_options;
		     	echo  $tp_options['image-banner']['url']; ?>

		      <?php
		  }
		}
		if ( ! function_exists( 'thachpham_slogan_lienhe' ) ) {
		  function thachpham_slogan_lienhe() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['slogan_lienhe'];
		  }
		}
		if ( ! function_exists( 'thachpham_slogan_diachi' ) ) {
		  function thachpham_slogan_diachi() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['slogan_diachi'];
		  }
		}
		if ( ! function_exists( 'thachpham_slogan_dienthoai' ) ) {
		  function thachpham_slogan_dienthoai() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['slogan_dienthoai'];
		  }
		}
		if ( ! function_exists( 'body_image_gp' ) ) {
		  function body_image_gp() {?>
		    <?php
		      	global $tp_options;
		     	echo $tp_options['image-2']['url']; ?>

		      <?php
		  }
		}
		if ( ! function_exists( 'body_image_dv' ) ) {
		  function body_image_dv() {?>
		    <?php
		      	global $tp_options;
		     	echo $tp_options['image-3']['url']; ?>

		      <?php
		  }
		}
		if ( ! function_exists( 'thachpham_slogan_dichvu' ) ) {
		  function thachpham_slogan_dichvu() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['slogan_dichvu'];
		  }
		}
		if ( ! function_exists( 'thachpham_title_dichvu' ) ) {
		  function thachpham_title_dichvu() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['title_dichvu'];
		  }
		}
		if ( ! function_exists( 'thachpham_tintuc_sukien' ) ) {
		  function thachpham_tintuc_sukien() {?>
		    <?php
		      global $tp_options;
		      echo $tp_options['tintuc'];
		  }
		}
		if ( ! function_exists( 'body_image_lh' ) ) {
		  function body_image_lh() {?>
		    <?php
		      	global $tp_options;
		     	echo $tp_options['image-4']['url']; ?>

		      <?php
		  }
		}

		/**
		@ Chèn CSS và Javascript vào theme
		@ sử dụng hook wp_enqueue_scripts() để hiển thị nó ra ngoài front-end
		**/
		function thachpham_styles() {
		  	/*
		  	 * Chèn file style.css chứa CSS của theme
		   	*/
		   	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', array() );

		  	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', array() );

			wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello/fontello.css', array() );

			wp_enqueue_style( 'theme.shortcodes.css', get_template_directory_uri() . '/css/theme.shortcodes.css', array() );

			wp_enqueue_style( 'plugin.booked.css', get_template_directory_uri() . '/css/plugin.booked.css', array() );

			wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/css/responsive.css', array() );

			wp_enqueue_style( 'mediaelementplayer.min.css', get_template_directory_uri() . '/css/mediaelementplayer.min.css', array() );

			wp_enqueue_style( 'wp-mediaelement.min.css', get_template_directory_uri() . '/css/wp-mediaelement.min.css', array() );

			wp_enqueue_style( 'js_composer.min.css', get_template_directory_uri() . '/css/js_composer.min.css', array() );
		}
		add_action( 'wp_enqueue_scripts', 'thachpham_styles' );

		function prefix_add_footer_styles() {
		    wp_enqueue_style( 'swiper.css', get_template_directory_uri() . '/css/swiper.css', array() );

			wp_enqueue_script( 'superfish.js', get_template_directory_uri() . '/js/superfish.js', array() );

			wp_enqueue_script( 'core.utils.js', get_template_directory_uri() . '/js/core.utils.js', array() );

			wp_enqueue_script( 'core.init.js', get_template_directory_uri() . '/js/core.init.js', array() );

			wp_enqueue_script( 'theme.init.js', get_template_directory_uri() . '/js/theme.init.js', array() );

			wp_enqueue_script( 'theme.shortcodes.js', get_template_directory_uri() . '/js/theme.shortcodes.js', array() );

			wp_enqueue_script( 'js_composer_front.min.js', get_template_directory_uri() . '/js/js_composer_front.min.js', array() );

			wp_enqueue_script( 'swiper.js', get_template_directory_uri() . '/js/swiper.js', array() );

			wp_enqueue_script( 'isotope.pkgd.min.js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array() );

			wp_enqueue_script( 'forms-api.min.js', get_template_directory_uri() . '/js/forms-api.min.js', array() );
		};
		add_action( 'get_footer', 'prefix_add_footer_styles' );
?>