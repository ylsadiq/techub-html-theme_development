   <!-- Start Search Popup Section -->
   <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fa-light fa-arrow-up"></i></button>
        <form action="/" method="post">
            <div class="form-group">
                <input name="s" type="search" value="<?php the_search_query(  ); ?>" 
                placeholder="<?php echo esc_attr__( 'search here...', 'techub' ); ?>" 
                required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Start Search Popup Section -->