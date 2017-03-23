<?php
/**
 * Template Name: Todas Noticias
 */
?>

<?php 
	$q_header = get_option('destaques-noticias');
?>

<div id="page-list-category-noticia" class="base-content page">
    <div class="banner no-text">
        <div class="container">
            <h2 class="title"><a href="/lista-de-noticias" title="Noticias"><?php _oi("Notícias"); ?></a><span class="subtitle">[ <?php _oi("#TodasNotícias"); ?> ]</span></h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
        	<div class="sidebar-news">
        		<h3><?php _oi('Lista de Tags') ?></h3>
               	<?php 
				  
				    $lista_categorias = "";
				    $list_cat = get_categories();

				    foreach ( $list_cat as $categoria ) {
			    		$cat_id = $categoria->cat_ID;
				    	$cat_url =  get_category_link( $cat_id );
				    	$cat_name = $categoria->name;
				    	$cat_data = get_option( "category_$cat_id" );
				    	$cat_bg = !empty($cat_data['catBG']) ? $cat_data['catBG'] : '#05C3FF';
				    	
				    	$lista_categorias .= "<li>";
				   		$lista_categorias .= "<a href='". esc_url( $cat_url ) ."' title='".$cat_name ."' style='background:".$cat_bg."' >";
				   		$lista_categorias .= "<span class='post-category'   >";
				    	$lista_categorias .= "#".$cat_name;
				    	$lista_categorias .= "</span></a>";
				    	$lista_categorias .= "</li>";
				    }

				    echo  "<ul>" . $lista_categorias  . "</ul>";
				?>
                
            </div>
            <div class="main-news">
            	<?php 
			

					$paged = (get_query_var('page')) ? get_query_var('page') : 1;

					$args = array( 
						'post_type' => 'post',
						'posts_per_page' => 11, 
						'paged' => $paged,
					);
						
					$wp_query = new WP_Query($args);
            	?>

            	<h3><?php _oi('Listagem de Notícias') ?></h3>

            	<div class="list">
                	<ul>
                  	<?php 
                  		while ( have_posts() ) :the_post();

                  		$category = get_the_category(); 
						$cat_id = $category[0]->cat_ID;
						$cat_name = $category[0]->name;
	                    $cat_url =  get_category_link( $cat_id );
	                    $cat_data = get_option( "category_$cat_id" );
	                    $cat_bg = !empty($cat_data['catBG']) ? $cat_data['catBG'] : '#05C3FF'; 
                  	?>

                  	<li class="list-item">
                        <time class="post-date"><?php the_time('d/m/Y'); ?></time>
                        <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
                        <a href="<?php echo esc_url( $cat_url ); ?>" title="<?php echo $cat_name; ?>" style="background:<?php echo $cat_bg; ?>"><span class="post-category">#<?php echo $cat_name; ?></span></a>
                        <div class="post-excerpt"><a href="<?php the_permalink()?>"><?php the_excerpt() ?></a></div>
                    </li>
                    <?php endwhile; ?>
                    </ul>


                    <div class="pagination">
						<?php 
							if( $wp_query->max_num_pages > 1 ){
					          	if ($paged > 1) { 
					    ?>
					            	<a href="<?php echo '?page=' . ($paged -1); //prev link ?>"> < </a>  
					    	<?php
					          	}
					          	for($i=1;$i<=$wp_query->max_num_pages;$i++){
						          	if( $i != 1){
						          		echo " | ";
						          	}
					       	?>
								<a href="<?php echo '?page=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a> 
					        <?php
					          	}
					          	if($paged < $wp_query->max_num_pages){?>
					             <a href="<?php echo '?page=' . ($paged + 1); //next link ?>"> > </a>
					        <?php
					          	}
					    	}
					    ?>
				    </div>
                </div>
            </div>
        </div>
    </div>
</div>
