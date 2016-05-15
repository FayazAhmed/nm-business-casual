    <footer>
        <div class="container">
            <div class="row">
               <?php
                $sidebars_count = 0;    
                for( $i = 1; $i <= 4; $i++ ){
                    if ( is_active_sidebar( 'footer-w-'. $i ) ) $sidebars_count++;
                }
            
                $sidebar_class = '';
                if( $sidebars_count > 0 ){
                    switch( $sidebars_count ){
                        case 2:
                            $sidebar_class = 'col-sm-6';
                            break; 
                        case 3:
                            $sidebar_class = 'col-sm-4';
                            break; 
                        case 4:
                            $sidebar_class = 'col-sm-3';
                            break;
                        default:
                            $sidebar_class = 'col-sm-12';
                    }
                }
            ?>
            
            <?php 
                for( $i = 1; $i <= 4; $i++ ){
                    if ( is_active_sidebar( 'footer-w-'. $i ) ){
                        echo '<div class="'.$sidebar_class.'">';
                            dynamic_sidebar( 'footer-w-'. $i );
                        echo '</div>';
                    }
                }
            ?> 
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>