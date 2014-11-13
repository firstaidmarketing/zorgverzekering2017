<?php
    global $post;

    $is_child_page = $post->post_parent > 0;
    $parent_id = $is_child_page ? $post->post_parent : $post->ID;

    $link_overview = 'javascript:;';
    if( $is_child_page ) {
        $link_overview = get_permalink( $post->post_parent );
    }

    $menu_items = array(
        $parent_id => array(
            'url' => $link_overview,
            'title' => 'Overzicht'
        )
    );

    $sub_pages = get_posts( array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'orderby' => 'menu_order title',
        'order' => 'ASC',
        'post_parent' => $parent_id,
        'fields' => 'ids'
    ));
    
    foreach( $sub_pages as $page_id ) {
        $menu_items[ $page_id ] = array(
            'url' => get_permalink( $page_id ),
            'title' => get_the_title( $page_id )
        );
    }

?>
<a href="javascript:;" class="toggle-subnav">
    <span class="bars"><span></span><span></span><span></span></span>
    <span class="text">Toon menu</span>
</a>
<ul class="nav">
    <?php
        foreach( $menu_items as $page_id => $item ) {
            echo '<li' . ( $post->ID == $page_id ? ' class="current-menu-item"' : '' ) . '>';
            echo '<a href="' . $item['url'] . '">' . esc_attr( $item['title'] ) . '</a>';

            if( $post->ID == $page_id ) {
                $anochor_links = keuze_get_anchor_links( $post->post_content );

                if( ! empty( $anochor_links ) ) {
                    echo '<ul>';
                    foreach( $anochor_links as $link ) {
                        echo '<li><a href="' . $link['url'] . '">' . esc_attr( $link['title'] ) . '</a></li>';
                    }
                    echo '</ul>';
                }
            }
            echo '</li>';
        }
    ?>
</ul>