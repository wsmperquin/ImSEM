<?php 
$consultstreet_blog_disabled = get_theme_mod('consultstreet_blog_disabled', true); 
$consultstreet_blog_area_title = get_theme_mod('consultstreet_blog_area_title', __('Latest News','arile-extra'));
$consultstreet_blog_area_des = get_theme_mod('consultstreet_blog_area_des', __('Stay updated with the latest news by reading our articles written by content writers in the industry.','arile-extra'));
$consultstreet_home_blog_meta_disabled = get_theme_mod('consultstreet_home_blog_meta_disabled', true);
$consultstreet_theme_blog_category = get_theme_mod('consultstreet_theme_blog_category');
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($consultstreet_blog_disabled == true): ?>
	<section class="theme-block theme-blog <?php if($activate_theme == 'BrightPress' || $activate_theme == 'FitnessBase' || $activate_theme == 'Beauty Spa Salon' || 'Arvada' == $activate_theme  || $activate_theme == 'EarnPress' || 'Business Stock' == $activate_theme) { echo 'list-view-news'; } ?><?php if('EnvoPress' == $activate_theme || 'ConsultZone' == $activate_theme){echo 'vrsn-three';}?>" id="theme-blog">
	 <?php if($consultstreet_blog_area_title != null || $consultstreet_blog_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($consultstreet_blog_area_title != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($consultstreet_blog_area_title); ?></h2>
					<?php endif; ?>
					<?php if($consultstreet_blog_area_des != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($consultstreet_blog_area_des); ?></p>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>						
			</div>
		</div>
		<?php endif; ?>
		<div class="<?php if($activate_theme == 'Arvada'  || $activate_theme == 'EarnPress' || 'Business Stock' == $activate_theme){echo 'container-full';} else{echo 'container';} ?>">
			<div class="row">
        <?php
        $post_args = array( 'post_type' => 'post', 'category__in' => $consultstreet_theme_blog_category, 'post__not_in'=>get_option("sticky_posts")) ;
			query_posts( $post_args );
			if(query_posts( $post_args ))
			{	
				while(have_posts()):the_post();
				{ ?>
				<?php if($activate_theme == 'ConsultStreet' || 'AssentPress' == $activate_theme || $activate_theme == 'Decorexo' || $activate_theme == 'MadisonBlog' || 'BlogWar' == $activate_theme || $activate_theme == 'ConsultHub' || $activate_theme == 'ConsultGuide'): ?>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<article class="post wow animate zoomIn" data-wow-delay=".3s">	
							<div class="entry-meta">
								<?php $category_data = get_the_category_list( esc_html__( '  ', 'consultstreet' ) );
									if(!empty($category_data)) {
									echo '<span class="cat-links">' . $category_data . '</span>';
									} ?>
							</div>	
							<header class="entry-header">
								<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
							</header>
							<div class="entry-meta">
								<span class="posted-on">
									<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
									<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
								</span>
								<span class="author">
									<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><?php echo esc_html(get_the_author());?></a>	
								</span>									
							</div>	
							<?php if(has_post_thumbnail()): ?>						
								<figure class="post-thumbnail">
								<?php $img_class =array('class' => "img-fluid");?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$img_class);?></a>
								</figure>
							<?php endif; ?>
								<div class="entry-content">	
									<?php the_content(__('Read More','arile-extra')); ?>
								</div>
						</article>
					</div>	
				<?php endif; ?>	
				
				<?php if($activate_theme == 'BrightPress' || $activate_theme == 'FitnessBase' || $activate_theme == 'Beauty Spa Salon' || 'Arvada' == $activate_theme  || $activate_theme == 'EarnPress' || 'Business Stock' == $activate_theme): ?>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<article class="post media wow animate zoomIn" data-wow-delay=".3s">
							<?php if(has_post_thumbnail()): ?>						
								<figure class="post-thumbnail">
								<?php $img_class =array('class' => "img-fluid");?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$img_class);?></a>
								</figure>
							<?php endif; ?>
					    	<div class="media-body post-content">
								<div class="entry-meta">
									<?php $category_data = get_the_category_list( esc_html__( '  ', 'consultstreet' ) );
										if(!empty($category_data)) {
										echo '<span class="cat-links">' . $category_data . '</span>';
										} ?>
								</div>	
								<header class="entry-header">
									<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
								</header>
								<div class="entry-meta">
									<span class="posted-on">
										<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
										<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
									</span>
									<span class="author">
										<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><?php echo esc_html(get_the_author());?></a>	
									</span>									
								</div>	
								<div class="entry-content">	
									<?php the_content(__('Read More','arile-extra')); ?>
								</div>
						    </div>			
						</article>
					</div>	
				<?php endif; ?>	
				
				<?php if($activate_theme == 'EnvoPress' || $activate_theme == 'ConsultZone'): ?>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="post wow animate zoomIn" data-wow-delay=".3s">	
							<?php if(has_post_thumbnail()): ?>						
								<figure class="post-thumbnail">
								<?php $img_class =array('class' => "img-fluid");?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$img_class);?></a>
								</figure>
							<?php endif; ?>
							<div class="entry-meta">
								<?php $category_data = get_the_category_list( esc_html__( '  ', 'consultstreet' ) );
									if(!empty($category_data)) {
									echo '<span class="cat-links">' . $category_data . '</span>';
									} ?>
							</div>	
							<header class="entry-header">
								<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
							</header>
							<div class="entry-meta">
								<span class="posted-on">
									<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
									<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
								</span>
								<span class="author">
									<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><?php echo esc_html(get_the_author());?></a>	
								</span>									
							</div>	
								<div class="entry-content">	
									<?php the_content(__('Read More','arile-extra')); ?>
								</div>
						</article>
					</div>	
				<?php endif; ?>	
					
				<?php }  
				endwhile; 
			} ?>
			</div>	
			
		</div>
	</section>
<?php endif; ?>