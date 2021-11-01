<?php
if (!function_exists('page_title')) {
	 function page_title($title){
		$base_title = 'Laracarte - List of Artisans';
		if($title===''){
			return $base_title;
		}
		else{
			return $title. ' | ' . $base_title;
		}
	}
}
if(!function_exists('set_active_route')){
	function set_active_route($route){
		return Route::is($route)? 'active' : '';
		// cette f permet de d'activer le menu selon la orute qui est active on va l(utiliser dans nav)
	}
}