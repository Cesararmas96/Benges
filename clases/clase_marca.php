<?php
	require_once('../nucleo/ModeloConect.php');
	class clsMarca extends ModeloConect
	{
		
		private $lnTMarca;
		private $lcNombre;
		private $llEstatus;

		public function __construct() 
		{
	        $this->lnTMarca = 0;
	        $this->lcNombre ='';
	        $this->llEstatus = true;
    	}
		
		public function set_Marca($pnTMarca)
		{
			$this->lnTMarca = $pnTMarca;
		}

		public function set_Nombre($pcNombre)
		{
			$this->lcNombre = $pcNombre;
		}

		public function set_Estatus($plEstatus)
		{
			$this->llEstatus = $plEstatus;
		}

		public function consultar_marca()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT * FROM tmarca WHERE idtmarca='$this->lnTMarca';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtmarca']	= $laRow['idtmarca'];
				$laTipo['nombremar']		= $laRow['nombremar'];
				$laTipo['estatusmar']		= $laRow['estatusmar'];
			}
			$this->desconectar();
			return $laTipo;
		}

		public function consultar_marca_id()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT * FROM tmarca WHERE idtmarca='$this->lnMarca';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtmarca']	= $laRow['idtmarca'];
				$laTipo['nombremar']		= $laRow['nombremar'];
				$latipo['estatusmar']		= $laRow['estatusmar'];
			}
			$this->desconectar();
			return $laTipo;
		}

		public function consultar_marca_nom()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT *FROM tmarca WHERE nombremar='$this->lcNombre';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtmarca']	= $laRow['idtmarca'];
				$laTipo['nombremar']		= $laRow['nombremar'];
			}
			$this->desconectar();
			return $laTipo;
		}
		public function listar_marca()
		{
			$laTipo = array();
			$cont = 0;
			$this->conectar();
			$sql = "SELECT * FROM tmarca ORDER BY nombremar ASC;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo[$cont]['idtmarca']	= $laRow['idtmarca'];
				$laTipo[$cont]['nombremar']		= $laRow['nombremar'];
				$laTipo[$cont]['estatusmar']		= $laRow['estatusmar'];
				$cont++;
			}
			$this->desconectar();
			return $laTipo;
		}

		public function registrar_marca()
		{
			$this->conectar();
			$sql = "INSERT INTO `tmarca` 
					(`nombremar`) 
					VALUES 
					(UPPER('$this->lcNombre'));";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function desactivar_marca()
		{
			$this->conectar();
			$sql="UPDATE `tmarca` SET `estatusmar`='0' WHERE idtmarca='$this->lnTMarca';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_marca()
		{
			$this->conectar();
			$sql="UPDATE `tmarca` SET `estatusmar`='1' WHERE idtmarca='$this->lnTMarca';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_marca()
		{
			$this->conectar();
			$sql="UPDATE `tmarca` SET 
					`nombremar`= UPPER('$this->lcNombre') 
				  WHERE idtmarca = '$this->lnTMarca' ;";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		function listar_marcas_activas()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT idtmarca, nombremar FROM tmarca WHERE estatusmar=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtmarca']=$laRow['idtmarca'];
				$Fila[$cont]['nombremar']=$laRow['nombremar'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}
	}
?>