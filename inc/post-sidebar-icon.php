<?php 
class Techub_Category_Walker extends Walker_Category {
    public function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
        $cat_name = esc_attr( $category->name );
        $link = '<a href="' . esc_url( get_term_link( $category ) ) . '" ';
        
        if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
            $link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
        }
        
        $link .= '>';
        $link .= $cat_name . '<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>';
        
        if ( ! empty( $args['show_count'] ) ) {
            $link .= ' (' . intval( $category->count ) . ')';
        }
        
        $output .= '<li class="cat-item cat-item-' . $category->term_id . '">' . $link;
    }
}
