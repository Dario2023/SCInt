<?php
	if (!isset($_POST['name'])) {
		header("location: index_admin.php");
	};

	include_once "session.php";

	$filtro = array('where' => array('nickname' => $_POST['name'],
									 'password' => $_POST['pwd']
									 )
					);
	$Obj_BD->Abrir_Transaccion();
	$Usuario = $Obj_BD->Consultar_Automatico("tab_usuario", $filtro);

			if( $Usuario->rowCount() == 1 ) {
				foreach ($Usuario as $user){
					if ($user['dispositivo'] == NULL){
						echo 'off';
						$_SESSION['user_name'] = $user['nickname'];
						$_SESSION['current_id_user'] = $user['id_usuario'];
						
						$update = array('dispositivo' => gethostbyaddr($_SERVER['REMOTE_ADDR']));
						$OK = $Obj_BD->Actualizar('tab_usuario', $update, $filtro);
						$Obj_BD->Confirmar();
					}
					else { echo 'on'; }
				}
			}
			else { echo 'not'; }
?>