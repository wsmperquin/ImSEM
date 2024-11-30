<?php
/**
 *
 * @package arile-extra
 */
			

if ( ! function_exists( 'arileextra_arilewp_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_arilewp_main_slider_default_content( $wp_customize ){
			

		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
		
		
		if('ArileWP' == $activate_theme || 'Business Street' == $activate_theme || 'ArileWP Child Theme' == $activate_theme ){
			$image1_slide = 1;
			$image2_slide = 2;
		}
		if('StrangerWP' == $activate_theme || 'Roseville Blog' == $activate_theme){
				$image1_slide = 7;
				$image2_slide = 8;
		}
		if('NewYork City' == $activate_theme){	
				$image1_slide = 3;
				$image2_slide = 4;
		}
		if('InteriorPress' == $activate_theme){
				$image1_slide = 5;
				$image2_slide = 6;
		}
		if('Architect Design' == $activate_theme){
				$image1_slide = 9;
				$image2_slide = 10;
		}
		if('Ariletech' == $activate_theme){
				$image1_slide = 11;
				$image2_slide = 12;
		}
	    if('DecorPress' == $activate_theme){
				$image1_slide = 13;
				$image2_slide = 6;
		}
		if('Fresno' == $activate_theme){
				$image1_slide = 14;
				$image2_slide = 15;
		}
		if('DesignHub' == $activate_theme){
				$image1_slide = 16;
				$image2_slide = 17;
		}
		if('Alberta' == $activate_theme){
				$image1_slide = 18;
				$image2_slide = 19;
		}
		if('Architecto' == $activate_theme){
				$image1_slide = 20;
				$image2_slide = 21;
		}
		if('InnoPress' == $activate_theme){
				$image1_slide = 22;
				$image2_slide = 15;
		}
		if('Agency Street' == $activate_theme){
				$image1_slide = 23;
				$image2_slide = 24;
		}
		if('Etowah' == $activate_theme){
				$image1_slide = 25;
				$image2_slide = 19;
		}
		if('Zervin' == $activate_theme){
				$image1_slide = 26;
				$image2_slide = 19;
		}
		if('Interior Startup' == $activate_theme){
				$image1_slide = 27;
				$image2_slide = 6;
		}
		if('Sayre' == $activate_theme){
				$image1_slide = 28;
				$image2_slide = 29;
		}
		if('Agency Firm' == $activate_theme){
				$image1_slide = 30;
				$image2_slide = 16;
		}
		if('Interior Space' == $activate_theme){
				$image1_slide = 31;
				$image2_slide = 27;
		}
			
			if('InteriorPress' == $activate_theme){	
				$slide1_title = 'ELEGANT & COMFORTABLE';
				$slide2_title = 'AWARD WINNINGS DESIGN';							
		    }
			elseif('Architect Design' == $activate_theme){	
				$slide1_title = 'ARCHITECTRE & DESIGN';
				$slide2_title = 'INTERIOR & DESIGN';							
		    }
			elseif('Ariletech' == $activate_theme){	
				$slide1_title = 'Best Business Agency Company For Your Business';
				$slide2_title = 'We Provide Best Digital Marketing Solutions';							
		    }
			elseif('DecorPress' == $activate_theme){	
				$slide1_title = 'INTERIOR & ARCHITECTURE';
				$slide2_title = 'AWARD WINNINGS DESIGN';							
		    }
			elseif('Fresno' == $activate_theme){	
				$slide1_title = 'Launch Your Business Website Fast';
				$slide2_title = 'Best Choice For Your Business';							
		    }
			elseif('DesignHub' == $activate_theme){	
				$slide1_title = 'Create a Beautiful Website';
				$slide2_title = 'Build and Grow Business';							
		    }
			elseif('Alberta' == $activate_theme){	
			$slide1_title = "Create Your World's Best Business Website";
			$slide2_title = 'We Best Quality Provide Service Company';							
		    }
			elseif('Architecto' == $activate_theme){	
			$slide1_title = "ARCHITECTURE & INTERIOR";
			$slide2_title = 'MODULAR KITCHEN DESIGN';							
		    }
			elseif('InnoPress' == $activate_theme){	
			$slide1_title = "Grow Your Business to the Peak of Success";
			$slide2_title = 'Best Choice For Your Business';							
		    }
			elseif('Agency Street' == $activate_theme){	
			$slide1_title = "We Craft Elegant Solutions with Powerful Technologies";
			$slide2_title = 'Services that Lead the Way to Better Business';
			}
			elseif('Etowah' == $activate_theme){	
			$slide1_title = "We Grow Brands and Solve Business Problems";
			$slide2_title = 'We Best Quality Provide Service Company';
			}
			elseif('Zervin' == $activate_theme){	
			$slide1_title = "Build your dream website with Zervin";
			$slide2_title = 'Best digital marketing solutions';
			}
			elseif('Interior Startup' == $activate_theme){	
			$slide1_title = "MODERN INTERIOR DESIGN";
			$slide2_title = 'AWARD WINNINGS DESIGN';
			}
			elseif('Sayre' == $activate_theme){	
			$slide1_title = "Choose Best Digital Agency";
			$slide2_title = 'Best Choice For Your Business';
			}
			elseif('Agency Firm' == $activate_theme){	
			$slide1_title = "Make the Most of Creative Ideas";
			$slide2_title = 'We Offer You A Digital Platform';
			}
			elseif('Interior Space' == $activate_theme){	
			$slide1_title = "MODERN HOME DECOR";
			$slide2_title = 'AWARD WINNINGS DESIGN';
			}
			else{
			    $slide1_title = 'We Create Amazing WordPress Themes';
				$slide2_title = 'Best Digital Marketing Solutions';			
			}
			
		if('Architecto' == $activate_theme){	
			$slider_desc = "We’re an elite squad otf alpha geeks, creative storytellers and business minds. Together, we mix art and science to turn brands into favorites.";
		}
		elseif('InnoPress' == $activate_theme || 'Sayre' == $activate_theme){
			$slider_desc = "Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.";
		}
		elseif('Agency Street' == $activate_theme || 'Agency Firm' == $activate_theme){
			$slider_desc = "We build trust to expand your business at the next level. Our platform includes trust-building tools so you can make the most of your company grows.";
		}
		elseif('Interior Space' == $activate_theme){
			$slider_desc = "We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.";
		}
		else{
			$slider_desc = "We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.";
		}
		
		
			
				
					$arilewp_main_slider_data = $wp_customize->get_setting( 'arilewp_main_slider_content' );
						if ( ! empty( $arilewp_main_slider_data ) ) {
						$arilewp_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( ''.$slide1_title.'', 'arile-extra' ),
						'text'       => esc_html__( ''.$slider_desc.'', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-slide'.$image1_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( ''.$slide2_title.'', 'arile-extra' ),
						'text'       => esc_html__( ''.$slider_desc.'', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-slide'.$image2_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
		}
add_action( 'customize_register', 'arileextra_arilewp_main_slider_default_content' );
endif;

/* Theme info content  */
if ( ! function_exists( 'arileextra_arilewp_theme_info_default_content' ) ) :		
    function arileextra_arilewp_theme_info_default_content( $wp_customize ){
			$arilewp_theme_info_data = $wp_customize->get_setting( 'arilewp_theme_info_content' );
				if ( ! empty( $arilewp_theme_info_data ) ) {
					$arilewp_theme_info_data->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-user-o',
						'title'      => esc_html__( 'Trusted Services', 'arile-extra' ),
						'text'       => esc_html__( 'We are trusted our customers', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-headphones',
						'title'      => esc_html__( '24/7 Support', 'arile-extra' ),
						'text'       => '014 1547 925 - 123 4567 890',
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Well Experienced', 'arile-extra' ),
						'text'       => esc_html__( '18 years of experience', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_arilewp_theme_info_default_content' );
endif;



/* Service content  */
if ( ! function_exists( 'arileextra_arilewp_service_default_content' ) ) :		
    function arileextra_arilewp_service_default_content( $wp_customize ){
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
			
			if('InteriorPress' == $activate_theme || 'DecorPress' == $activate_theme || 'Interior Startup' == $activate_theme || 'Interior Space' == $activate_theme){				
				$service1_title = 'ARCHITECTURAL DESIGN';
				$service2_title = 'INTERIOR DESIGN';
				$service3_title = 'LIGHTING DESIGN';
                $choice = 'image';
				$sicon1 = 'fa fa-laptop';
				$sicon2 = 'fa fa-opencart';
				$sicon3 = 'fa fa-users';
                $simage1 = 1;	
                $simage2 = 2;	
                $simage3 = 3;					
		    }elseif('Architect Design' == $activate_theme || 'Architecto' == $activate_theme){				
				$service1_title = 'ARCHITECTURAL DESIGN';
				$service2_title = 'HOUSE DECOR';
				$service3_title = 'PROJECT PLANNING';
                $choice = 'image';
				$sicon1 = 'fa fa-laptop';
				$sicon2 = 'fa fa-opencart';
				$sicon3 = 'fa fa-users';
                $simage1 = 4;	
                $simage2 = 5;	
                $simage3 = 6;				
		    }
			elseif('Alberta' == $activate_theme || 'Etowah' == $activate_theme){				
				$service1_title = 'Pixel Perfect Design';
				$service2_title = 'WooCommerce Ready';
				$service3_title = 'Satisfied Clients';
                $choice = 'image';
				$sicon1 = 'fa fa-laptop';
				$sicon2 = 'fa fa-opencart';
				$sicon3 = 'fa fa-users';
                $simage1 = 7;	
                $simage2 = 8;	
                $simage3 = 9;				
		    }
			elseif('Agency Firm' == $activate_theme){				
				$service1_title = 'Content Marketing';
				$service2_title = 'SEO Optimization';
				$service3_title = 'Graphic Designs';
                $choice = 'icon';
				$sicon1 = 'fa fa-laptop';
				$sicon2 = 'fa fa-globe';
				$sicon3 = 'fa fa-newspaper-o';
                $simage1 = 7;	
                $simage2 = 8;	
                $simage3 = 9;				
		    }
			else{
                $service1_title = 'Pixel Perfect Design';
				$service2_title = 'WooCommerce Ready';
				$service3_title = 'Satisfied Clients';
				$choice = 'icon';
				$sicon1 = 'fa fa-mobile';
				$sicon2 = 'fa fa-opencart';
				$sicon3 = 'fa fa-users';
                $simage1 = 1;	
                $simage2 = 2;	
                $simage3 = 3;				
			}
		
			$arilewp_service_data = $wp_customize->get_setting( 'arilewp_service_content' );
				if ( ! empty( $arilewp_service_data ) ) {
					$arilewp_service_data->default = json_encode( array(
						array(
						'icon_value' => ''.$sicon1.'',
						'title'      => esc_html__( ''.$service1_title.'', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.',
						'button_text'      => __('Read More','arile-extra'),
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service'.$simage1.'.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => ''.$sicon2.'',
						'title'      => esc_html__( ''.$service2_title.'', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.',
						'button_text'      => __('Read More','arile-extra'),
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service'.$simage2.'.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => ''.$sicon3.'',
						'title'      => esc_html__( ''.$service3_title.'', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.',
						'button_text'      => __('Read More','arile-extra'),
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service'.$simage3.'.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_arilewp_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_arilewp_project_default_content' ) ) :		
	function arileextra_arilewp_project_default_content( $wp_customize ){
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
			
			if('InteriorPress' == $activate_theme || 'DecorPress' == $activate_theme || 'Interior Startup' == $activate_theme || 'Interior Space' == $activate_theme){					
			    $project1_title = 'RESIDENTIAL DESIGN';
				$project2_title = 'COMMERCIAL DESIGN';
				$project3_title = 'HOUSING PROJECT';
				$project4_title = 'GLASS ART IN LONDON';
				$project1_image = 5;
				$project2_image = 6;
				$project3_image = 7;
				$project4_image = 8;				
		    }elseif('Architect Design' == $activate_theme || 'Architecto' == $activate_theme){					
			    $project1_title = 'SOUTH AFRICA HOUSE';
				$project2_title = 'LIVING ROOM';
				$project3_title = 'PENTHOUSE MIAMI';
				$project4_title = 'MODULAR KITCHEN';
				$project1_image = 9;
				$project2_image = 10;
				$project3_image = 11;
				$project4_image = 12;				
		    }
			else{
				$project1_title = 'Business Resource';
				$project2_title = 'Business Consulting';
				$project3_title = 'App Development';
                $project4_title = 'Marketing Strategy';	
				$project1_image = 1;
				$project2_image = 2;
				$project3_image = 3;
				$project4_image = 4;				
			}
		
					$arilewp_project_data = $wp_customize->get_setting( 'arilewp_project_content' );
					if ( ! empty( $arilewp_project_data ) ) 
					{ $arilewp_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project1_image.'.jpg',
						'title'      => __(''.$project1_title.'','arile-extra'),
						'text'       => __('Business Solutions','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project2_image.'.jpg',
						'title'      => __(''.$project2_title.'','arile-extra'),
						'text'       => __('Consultant','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project3_image.'.jpg',
						'title'      => __(''.$project3_title.'','arile-extra'),
						'text'       => __('Online Store','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project4_image.'.jpg',
						'title'      => __(''.$project4_title.'','arile-extra'),
						'text'       => __('Digital Marketing','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arileextra_arilewp_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_arilewp_testimonial_default_content' ) ) :		
	function arileextra_arilewp_testimonial_default_content( $wp_customize ){
					$arilewp_testimonial_data = $wp_customize->get_setting( 'arilewp_testimonial_content' );
					if ( ! empty( $arilewp_testimonial_data ) ) 
					{
					$arilewp_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Financer','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arileextra_arilewp_testimonial_default_content' );
endif;