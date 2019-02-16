<?php
	require_once('../nucleo/ModeloConect.php');
	class clsCondicion extends ModeloConect
           
	{
		private $lnTcondicion;
		private $lcNombre;
		private $llEstatus;


		public function __construct() 
		{
	        $this->lnTcondicion =0 ;
	        $this->lcNombre = '';
	        $this->llEstatus = true;
    	}
		
		public function set_Condicion($pnTcondicion)
		{
			$this->lnTcondicion = $pnTcondicion;
		}

		public function set_Nombre($pcNombre)
		{
			$this->lcNombre = $pcNombre;
		}

		public function set_Estatus($plEstatus)
		{
			$this->llEstatus = $plEstatus;
		}


		public function consultar_condicion()
		{
			$laCondicion = array();
			$this->conectar();
			$sql = "SELECT * FROM tcondicion WHERE idtcondicion='$this->lnTcondicion';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laCondicion['idtcondicion']	= $laRow['idtcondicion'];
				$laCondicion['nombrecond']		= $laRow['nombrecond'];
				$laCondicion['estatuscond']		= $laRow['estatuscond'];
			}
			$this->desconectar();
			return $laCondicion;
		}

		// function listar_condiciones_activas()
		// {
		// 	$this->conectar();
		// 	$cont=0;
		// 	$sql="SELECT * FROM tcondicion WHERE estatuscond=1";
		// 	$pcsql=$this->filtro($sql);
		// 	while($laRow=$this->proximo($pcsql))
		// 	{
		// 		$Fila[$cont]['idtcondicion']=$laRow['idtcondicion'];
		// 		$Fila[$cont]['nombrecond']=$laRow['nombrecond'];
		// 		$Fila[$cont]['estatuscond']=$laRow['estatuscond'];

		// 		$cont++;
		// 	}
		// 	$this->desconectar();
		// 	return $Fila;
		// }

		public function listar_condicion()
		{
			$laCondicion = array();
			$cont = 0;
			$this->conectar();
			$sql = "SELECT * FROM tcondicion ORDER BY nombrecond ;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laCondicion[$cont]['idtcondicion']	= $laRow['idtcondicion'];
				$laCondicion[$cont]['nombrecond']	= $laRow['nombrecond'];
				$laCondicion[$cont]['estatuscond']   = $laRow['estatuscond'];
				$cont++;
			}
			$this->desconectar();
			return $laCondicion;
		}

		// function listar_condicion_activas()
		// {
		// 	$this->conectar();
		// 	$cont=0;
		// 	$sql="SELECT * FROM tcondicion WHERE estatuscond=1";
		// 	$pcsql=$this->filtro($sql);
		// 	while($laRow=$this->proximo($pcsql))
		// 	{
		// 		$Fila[$cont]['idtcondicion']=$laRow['idtcondicion'];
		// 		$Fila[$cont]['nombrecond']=$laRow['nombrecond'];
		// 		$Fila[$cont]['estatuscond']=$laRow['estatuscond'];

		// 		$cont++;
		// 	}
		// 	$this->desconectar();
		// 	return $Fila;
		// }

		public function consultar_condicion_id()
		{
			$laCondicion = array();
			$this->conectar();
			$sql = "SELECT * FROM tcondicion WHERE idtcondicion='$this->lnCondicion';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laCondicion['idtcondicion']	= $laRow['idtcondicion'];
				$laCondicion['nombrecond']		= $laRow['nombrecond'];
				$laCondicion['estatuscond']		= $laRow['estatuscond'];
			}
			$this->desconectar();
			return $laCondicion;
		}


		public function desactivar_condicion()
		{
			$this->conectar();
			$sql="UPDATE `tcondicion` SET `estatuscond`='0' WHERE idtcondicion='$this->lnTcondicion';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

			
		public function registrar_condicion()
		{
			$this->conectar();
			$sql = "INSERT INTO `tcondicion` 
					(`nombrecond`) 
					VALUES 
					(UPPER('$this->lcNombre'));";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_condicion(){

			$this->conectar();
			$sql="UPDATE `tcondicion` SET `estatuscond`='1' WHERE idtcondicion='$this->lnTcondicion';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}	

		public function editar_condicion()
		{
			$this->conectar();
			$sql="UPDATE `tcondicion` SET 
					`nombrecond`= UPPER('$this->lcNombre') 
				  WHERE idtcondicion = '$this->lnTcondicion' ;";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		// function consultar_condiciones()
		// {

		// 	$this->conectar();
		// 	$cont=0;
		// 	$sql="SELECT * FROM tcondicion";
		// 	$pcsql=$this->filtro($sql);
		// 	while($laRow=$this->proximo($pcsql))
		// 	{
		// 		$Fila[$cont][0]=$laRow['idtcondicion'];
		// 		$Fila[$cont][1]=$laRow['nombrecond'];
		// 		$cont++;
		// 	}
		// 	$this->desconectar();
		// 	return $Fila;
		// }

		public function listar_condiciones_activas()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT idtcondicion, nombrecond FROM tcondicion WHERE estatuscond=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtcondicion']=$laRow['idtcondicion'];
				$Fila[$cont]['nombrecond']=$laRow['nombrecond'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}		
	}
?>
