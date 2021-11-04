<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'fields' => array( 'gridFields' => array( 'id_distrito',
'id_sector',
'urna',
'ubicación',
'presidente',
'alcalde',
'diputado' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'ubicación',
'diputado',
'alcalde',
'presidente',
'urna',
'id_sector',
'id_distrito' ),
'filterFields' => array(  ),
'fieldItems' => array( 'id_distrito' => array( 'report_grid_field' ),
'id_sector' => array( 'report_grid_field1' ),
'urna' => array( 'report_grid_field2' ),
'ubicación' => array( 'report_grid_field4' ),
'presidente' => array( 'report_grid_field5' ),
'alcalde' => array( 'report_grid_field6' ),
'diputado' => array( 'report_grid_field7' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'loginform_login',
'username_button' ),
'grid' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field4',
'report_grid_field2',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7' ),
'top' => array(  ),
'above-grid' => array( 'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ) ),
'formXtTags' => array( 'top' => array(  ),
'above-grid' => array( 'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'report_grid_field' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field4' => 'grid',
'report_grid_field2' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field6' => 'grid',
'report_grid_field7' => 'grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'expand_button' => 5,
'menu' => 3,
'search_panel' => 5,
'collapse_button' => 5,
'simple_search' => 3,
'loginform_login' => 3,
'username_button' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'-' => array( '-' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field6',
'search_panel_field7',
'search_panel_field10' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'collapse_button' => array( 'collapse_button' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'report_grid_field' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field2',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7' ),
'logo' => array( 'logo1' ),
'changepassword_link' => array( 'changepassword_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'report',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'report',
'type' => 'report',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
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
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field4',
'report_grid_field2',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'report-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'report-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field10',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field',
'search_panel_field7',
'search_panel_field6' ) ),
'-' => array( 'type' => '-' ),
'search_panel_field' => array( 'field' => 'urna',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field2' => array( 'field' => 'presidente',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field3' => array( 'field' => 'alcalde',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field4' => array( 'field' => 'diputado',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field6' => array( 'field' => 'id_distrito',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field7' => array( 'field' => 'id_sector',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field10' => array( 'field' => 'ubicación',
'type' => 'search_panel_field',
'required' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'report_grid_field' => array( 'field' => 'id_distrito',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'report_grid_field1' => array( 'field' => 'id_sector',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'report_grid_field2' => array( 'field' => 'urna',
'type' => 'report_grid_field' ),
'report_grid_field4' => array( 'field' => 'ubicación',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true ),
'report_grid_field5' => array( 'field' => 'presidente',
'type' => 'report_grid_field' ),
'report_grid_field6' => array( 'field' => 'alcalde',
'type' => 'report_grid_field' ),
'report_grid_field7' => array( 'field' => 'diputado',
'type' => 'report_grid_field' ),
'logo1' => array( 'type' => 'logo' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>