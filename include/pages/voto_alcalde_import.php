<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id_urna',
'candidato1',
'candidato2',
'candidato3',
'validos',
'blancos',
'nulos',
'utilizados',
'no_utilizados',
'total',
'usuario',
'fecha',
'candidato4',
'candidato5',
'candidato6',
'candidato7',
'candidato8',
'candidato9',
'candidato10',
'candidato11',
'candidato12',
'editado_por',
'fecha_edicion' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_urna' => array( 'import_field2' ),
'candidato1' => array( 'import_field3' ),
'candidato2' => array( 'import_field4' ),
'candidato3' => array( 'import_field5' ),
'validos' => array( 'import_field6' ),
'blancos' => array( 'import_field7' ),
'nulos' => array( 'import_field8' ),
'utilizados' => array( 'import_field9' ),
'no_utilizados' => array( 'import_field10' ),
'total' => array( 'import_field11' ),
'usuario' => array( 'import_field12' ),
'fecha' => array( 'import_field13' ),
'candidato4' => array( 'import_field' ),
'candidato5' => array( 'import_field1' ),
'candidato6' => array( 'import_field14' ),
'candidato7' => array( 'import_field15' ),
'candidato8' => array( 'import_field16' ),
'candidato9' => array( 'import_field17' ),
'candidato10' => array( 'import_field18' ),
'candidato11' => array( 'import_field19' ),
'candidato12' => array( 'import_field20' ),
'editado_por' => array( 'import_field21' ),
'fecha_edicion' => array( 'import_field22' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field',
'import_field1',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field',
'import_field1',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field',
'import_field1',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field2' => array( 'field' => 'id_urna',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'candidato1',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'candidato2',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'candidato3',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'validos',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'blancos',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'nulos',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'utilizados',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'no_utilizados',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'total',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'usuario',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'fecha',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'candidato4',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'candidato5',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'candidato6',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'candidato7',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'candidato8',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'candidato9',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'candidato10',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'candidato11',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'candidato12',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'editado_por',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'fecha_edicion',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>