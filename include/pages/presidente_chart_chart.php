<?php
			$optionsArray = array( 'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'blancos',
'elecciones',
'candidato15',
'fecha_edicion',
'editado_por',
'candidato14',
'candidato13',
'candidato12',
'candidato11',
'candidato10',
'candidato9',
'candidato8',
'candidato7',
'candidato6',
'candidato5',
'candidato4',
'validos',
'utilizados',
'usuario',
'total',
'nulos',
'no_utilizados',
'id_urna',
'fecha',
'candidato3',
'candidato2',
'candidato1' ),
'filterFields' => array(  ),
'fieldItems' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'menu',
'search_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array(  ),
'below-grid' => array(  ),
'grid' => array( 'chart' ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'below-grid' => array(  ) ),
'itemForms' => array( 'logo1' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'chart' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'search_panel' => 5,
'collapse_button' => 5,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'search_panel' => array( 'search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field5',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13',
'search_panel_field14',
'search_panel_field4',
'search_panel_field6',
'search_panel_field7',
'search_panel_field15',
'search_panel_field16',
'search_panel_field17',
'search_panel_field18',
'search_panel_field19',
'search_panel_field20',
'search_panel_field21',
'search_panel_field22',
'search_panel_field23',
'search_panel_field24',
'search_panel_field25',
'search_panel_field26' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'chart' => array( 'chart' ),
'collapse_button' => array( 'collapse_button' ),
'logo' => array( 'logo1' ),
'changepassword_link' => array( 'changepassword_link' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'adminarea_link' => array( 'adminarea_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'chart',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'chart',
'type' => 'chart',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-chart',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'chart-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'chart' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field26',
'search_panel_field25',
'search_panel_field24',
'search_panel_field23',
'search_panel_field22',
'search_panel_field21',
'search_panel_field20',
'search_panel_field19',
'search_panel_field18',
'search_panel_field17',
'search_panel_field16',
'search_panel_field15',
'search_panel_field7',
'search_panel_field6',
'search_panel_field4',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field5',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'search_panel_field' => array( 'field' => 'blancos',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field1' => array( 'field' => 'candidato1',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field2' => array( 'field' => 'candidato2',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field3' => array( 'field' => 'candidato3',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field5' => array( 'field' => 'fecha',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field8' => array( 'field' => 'id_urna',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field9' => array( 'field' => 'no_utilizados',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field10' => array( 'field' => 'nulos',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field11' => array( 'field' => 'total',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field12' => array( 'field' => 'usuario',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field13' => array( 'field' => 'utilizados',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field14' => array( 'field' => 'validos',
'type' => 'search_panel_field',
'required' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'chart' => array( 'type' => 'chart',
'table' => 'Presidente_Chart',
'icon' => array( 'glyph' => 'signal' ) ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'logo1' => array( 'type' => 'logo' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'show_search_panel',
'hide_search_panel' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field4' => array( 'field' => 'candidato4',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field6' => array( 'field' => 'candidato5',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field7' => array( 'field' => 'candidato6',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field15' => array( 'field' => 'candidato7',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field16' => array( 'field' => 'candidato8',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field17' => array( 'field' => 'candidato9',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field18' => array( 'field' => 'candidato10',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field19' => array( 'field' => 'candidato11',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field20' => array( 'field' => 'candidato12',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field21' => array( 'field' => 'candidato13',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field22' => array( 'field' => 'candidato14',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field23' => array( 'field' => 'editado_por',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field24' => array( 'field' => 'fecha_edicion',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field25' => array( 'field' => 'candidato15',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field26' => array( 'field' => 'elecciones',
'type' => 'search_panel_field',
'required' => false ),
'adminarea_link' => array( 'type' => 'adminarea_link' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>