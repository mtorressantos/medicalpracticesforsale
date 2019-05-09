<?php
extract(
	shortcode_atts(
		array(
			'style'                         => 'grid',
			'space'                         => 5,
			'column'                        => 3,
			'image_size'                    => 'crop',
			'full_height'                   => 'false',
			'album_height'                  => 300,
			'description_preview'           => 'true',
			'thumbnail_preview'             => 'true',
			'overlay_preview'               => 'true',
			'count'                         => 10,
			'offset'                        => '',
			'posts'                         => '',
			'author'                        => '',
			'categories'                    => '',
			'pagination'                    => 'true',
			'pagination_style'              => 1,
			'orderby'                       => 'date',
			'order'                         => 'DESC',
			'visibility'                    => '',
			'el_class'                      => '',
			'item_id'                       => '',
			'show_title_desc_without_hover' => 'false',
			'title_preview_style'           => 'none',
			'title_font_size'               => 25,
			'description_font_size'         => 15,
			'show_thumbnail_without_hover'  => 'false',
			'thumbnail_shape'               => 'rectangle',
			'show_overlay_without_hover'    => 'false',
			'overlay_background'            => '',
			'title_animation'               => 'fade_in',
			'overlay_hover_animation'       => 'fade_in',
			'cover_image_hover_animation'   => 'none',
		), $atts
	)
);

