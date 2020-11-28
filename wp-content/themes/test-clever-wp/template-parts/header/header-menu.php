<?php

$locations = get_nav_menu_locations();
$menu_items = wp_get_nav_menu_items( $locations['menu'] );

$countItem = 0;

foreach ( (array) $menu_items as $key => $menu_item ):

	if ( $post -> ID == $menu_item -> object_id ) {
		$active = ' current';
	} else {
		$active = '';
	}

	$parent_id = $menu_item -> ID;
	$countSubItem = 0;

	if ( $menu_item -> menu_item_parent == 0 ): ?>

		<li class="menu__item <?= $active ?>">

			<?php if ( $menu_items[ $countItem + 1 ] -> menu_item_parent != 0 ): ?>

				<span><?= $menu_item->title; ?></span>

			<?php else: ?>

				<a href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a>

			<?php

			endif;

			$submenu = '<ul class="menu__submenu">';

			foreach ( (array)$menu_items as $item => $menu_sub_item ):

				if( $post -> ID == $menu_sub_item -> object_id ){
					$active = 'class="is-active"';
				} else {
					$active = '';
				}

				if ( $menu_sub_item -> menu_item_parent == $parent_id ) {

					$submenu .= '<li '. $active .'><a href="'. $menu_sub_item->url .'">'. $menu_sub_item->title .'</a></li>';

					if ( $menu_items[ $countSubItem + 1 ] -> menu_item_parent != $parent_id ) {

						$submenu .= '</ul>';

						echo $submenu;

					};

				};

				$countSubItem ++;

			endforeach; ?>

		</li>

	<?php endif;

	$countItem ++;

endforeach; ?>
