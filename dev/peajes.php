
<?php 

	require_once "models/Peaje.php";
	//echo header('Content-Type: application/json; charset=utf-8');

	

	$peaje = new Peaje();


	switch ($_GET["op"]){


		case 'listarPeajes':
		
        $rspta = $peaje->listarPeaje();
        $return_arr = Array();

        while ($r = $rspta->fetch_assoc()){
            $row_array['ID_PEAJE'] = $r['ID_PEAJE'];
				$row_array['CAT_I'] = $r['CAT_I'];
				$row_array['CAT_II'] = $r['CAT_II'];
				$row_array['CAT_III'] = $r['CAT_III'];
				$row_array['CAT_IV'] = $r['CAT_IV'];
				$row_array['CAT_V'] = $r['CAT_V'];
				$row_array['CAT_VI'] = $r['CAT_VI'];
				$row_array['CAT_VII'] = $r['CAT_VII'];
				$row_array['DEPARTAMENTO'] = $r['DEPARTAMENTO'];
				$row_array['LATITUD'] = $r['LATITUD'];
				$row_array['LONGITUD'] = $r['LONGITUD'];
				$row_array['NOMBRE_PEAJE'] = $r['NOMBRE_PEAJE'];
				array_push($return_arr, $row_array);
        }
        echo json_encode($return_arr, JSON_UNESCAPED_UNICODE);
        break;
		
		
	}


?>