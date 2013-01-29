<div id="sidebar" class="grid_3 omega">
           	<h3><span>Amigo System</span></h3>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
      
            <ul id="nav">
                	<ul id="sidebar_pages">
                	<!-- pages --><?php wp_list_pages('title_li=&depth=1'); ?>
                    </ul>
                <!-- categories -->
                	<ul id="sidebar_categories">
                	<?php wp_list_categories('title_li=<h2>Categories</h2>&depth=1&orderby=count'); ?>
                    </ul>
                <!-- links -->
                	<ul id="sidebar_links">
                	<?php wp_list_bookmarks(); ?>
                    </ul>
                <!-- login -->
                	<ul id="sidebar_meta">
                        <li><h2>Meta</h2>
                            <ul>
                                <?php wp_register(); ?>
                                <!-- Admin login/logout links -->
                                <li><?php wp_loginout(); ?></li>
                            </ul>
                        </li>
                    </ul>
                
            </ul><!-- end nav -->
            
<?php endif; ?>
         <!-- #sidebar div is closed in footer.php -->