<?php 
	$q_header = get_option('destaques-noticias');


    //$the_tag 			= get_the_tag();
    //$term_id_atual 		= $tag_atual[0]->term_ID;
    //$term_name_atual 	= $tag_atual[0]->name;
?>

<div id="page-list-category-noticia" class="base-content page">
    <div class="banner no-text">
        <div class="container">
             <h2 class="title"><a href="/lista-de-noticias" title="Noticias"> <?php _oi("Notícias"); ?></a><span class="subtitle">[<?php single_tag_title() ?>]</span></h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
        	<div class="sidebar-news">
        		<h3>Lista de Tags</h3>
               	<?php 
				    $html = "";
				    $tags = get_tags();
				    foreach ( $tags as $tag ) {
				    	$html .= "<li style='float:left; margin-right: 3px'>
						   		<a href='". get_tag_link( $tag->term_id ) 
						   			."' title='".$tag->name ."' 
						   			style='background:#05C3FF' >
						   			<span class='post-category'>"
						    			.$tag->name
						    		."</span></a>
						    	</li>";				    	
				    }
				    echo  "<ul>" . $html  . "</ul>";
				?>
                
            </div>
            <div class="main-news">
            	
            	<h3><?php _oi('Listagem de Notícias') ?></h3>            	            	
            	<div class="list">
                	<ul>
                  	<?php 
                  		while ( have_posts() ) :the_post();
                  	?>
                  	<li class="list-item">
                        <time class="post-date"><?php the_time('d/m/Y'); ?></time>
                        <h3 class="pos	t-title"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
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
