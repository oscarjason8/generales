<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'id_distrito',
'PAC',
'FAPER',
'NUEVA_RUTA',
'Validos',
'Blancos',
'Nulos',
'Utilizados',
'No_Utilizados',
'Total',
'ALIANZA_PAT',
'MIDE',
'VAMOS',
'LIBRE',
'PSH',
'LIDEHR',
'UD',
'DC',
'TSH',
'HON_HUMANA',
'LIBERAL',
'NACIONAL' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_distrito' => array( 'report_grid_field' ),
'PAC' => array( 'report_grid_field1' ),
'FAPER' => array( 'report_grid_field2' ),
'NUEVA_RUTA' => array( 'report_grid_field3' ),
'Validos' => array( 'report_grid_field7' ),
'Blancos' => array( 'report_grid_field8' ),
'Nulos' => array( 'report_grid_field9' ),
'Utilizados' => array( 'report_grid_field10' ),
'No_Utilizados' => array( 'report_grid_field11' ),
'Total' => array( 'report_grid_field12' ),
'ALIANZA_PAT' => array( 'report_grid_field4' ),
'MIDE' => array( 'report_grid_field5' ),
'VAMOS' => array( 'report_grid_field6' ),
'LIBRE' => array( 'report_grid_field13' ),
'PSH' => array( 'report_grid_field14' ),
'LIDEHR' => array( 'report_grid_field15' ),
'UD' => array( 'report_grid_field16' ),
'DC' => array( 'report_grid_field17' ),
'TSH' => array( 'report_grid_field18' ),
'HON_HUMANA' => array( 'report_grid_field19' ),
'LIBERAL' => array( 'report_grid_field20' ),
'NACIONAL' => array( 'report_grid_field21' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field13',
'report_grid_field14',
'report_grid_field15',
'report_grid_field16',
'report_grid_field17',
'report_grid_field18',
'report_grid_field19',
'report_grid_field20',
'report_grid_field21',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pages' => 'above-grid',
'report_grid_field' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field2' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field4' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field6' => 'grid',
'report_grid_field13' => 'grid',
'report_grid_field14' => 'grid',
'report_grid_field15' => 'grid',
'report_grid_field16' => 'grid',
'report_grid_field17' => 'grid',
'report_grid_field18' => 'grid',
'report_grid_field19' => 'grid',
'report_grid_field20' => 'grid',
'report_grid_field21' => 'grid',
'report_grid_field7' => 'grid',
'report_grid_field8' => 'grid',
'report_grid_field9' => 'grid',
'report_grid_field10' => 'grid',
'report_grid_field11' => 'grid',
'report_grid_field12' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'report_grid_field' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field13',
'report_grid_field14',
'report_grid_field15',
'report_grid_field16',
'report_grid_field17',
'report_grid_field18',
'report_grid_field19',
'report_grid_field20',
'report_grid_field21' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'rprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'rprint',
'type' => 'rprint',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
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
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field13',
'report_grid_field14',
'report_grid_field15',
'report_grid_field16',
'report_grid_field17',
'report_grid_field18',
'report_grid_field19',
'report_grid_field20',
'report_grid_field21',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'report_grid_field' => array( 'field' => 'id_distrito',
'type' => 'report_grid_field' ),
'report_grid_field1' => array( 'field' => 'PAC',
'type' => 'report_grid_field' ),
'report_grid_field2' => array( 'field' => 'FAPER',
'type' => 'report_grid_field' ),
'report_grid_field3' => array( 'field' => 'NUEVA_RUTA',
'type' => 'report_grid_field' ),
'report_grid_field7' => array( 'field' => 'Validos',
'type' => 'report_grid_field' ),
'report_grid_field8' => array( 'field' => 'Blancos',
'type' => 'report_grid_field' ),
'report_grid_field9' => array( 'field' => 'Nulos',
'type' => 'report_grid_field' ),
'report_grid_field10' => array( 'field' => 'Utilizados',
'type' => 'report_grid_field' ),
'report_grid_field11' => array( 'field' => 'No_Utilizados',
'type' => 'report_grid_field' ),
'report_grid_field12' => array( 'field' => 'Total',
'type' => 'report_grid_field' ),
'report_grid_field4' => array( 'field' => 'ALIANZA_PAT',
'type' => 'report_grid_field' ),
'report_grid_field5' => array( 'field' => 'MIDE',
'type' => 'report_grid_field' ),
'report_grid_field6' => array( 'field' => 'VAMOS',
'type' => 'report_grid_field' ),
'report_grid_field13' => array( 'field' => 'LIBRE',
'type' => 'report_grid_field' ),
'report_grid_field14' => array( 'field' => 'PSH',
'type' => 'report_grid_field' ),
'report_grid_field15' => array( 'field' => 'LIDEHR',
'type' => 'report_grid_field' ),
'report_grid_field16' => array( 'field' => 'UD',
'type' => 'report_grid_field' ),
'report_grid_field17' => array( 'field' => 'DC',
'type' => 'report_grid_field' ),
'report_grid_field18' => array( 'field' => 'TSH',
'type' => 'report_grid_field' ),
'report_grid_field19' => array( 'field' => 'HON_HUMANA',
'type' => 'report_grid_field' ),
'report_grid_field20' => array( 'field' => 'LIBERAL',
'type' => 'report_grid_field' ),
'report_grid_field21' => array( 'field' => 'NACIONAL',
'type' => 'report_grid_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'pageWidth' => 'compact',
'pageAlign' => 'center' );
		?>