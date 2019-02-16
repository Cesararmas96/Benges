<?php

	require_once('../nucleo/ModeloConect.php');
	class clsTipo extends ModeloConect
	{
		
		private $lnTtipo;
		private $lcNombre;
		private $llEstatus;

		public function __construct() 
		{
	        $this->lnTtipo = 0;
	        $this->lcNombre ='';
	        $this->llEstatus = true;
    	}
		
		public function set_Tipo($pnTtipo)
		{
			$this->lnTtipo = $pnTtipo;
		}

		public function set_Nombre($pcNombre)
		{
			$this->lcNombre = $pcNombre;
		}

		public function set_Estatus($plEstatus)
		{
			$this->llEstatus = $plEstatus;
		}

		public function consultar_tipo()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT * FROM ttipo WHERE idttipo='$this->lnTtipo';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idttipo']	= $laRow['idttipo'];
				$laTipo['nombretip']		= $laRow['nombretip'];
				$laTipo['estatustip']		= $laRow['estatustip'];
			}
			$this->desconectar();
			return $laTipo;
		}
	public function listar_tipo_nuevo()
		{
			$laTipo = array();
			$cont = 0;
			$this->conectar();

			$sql = "SELECT * FROM ttipo;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo[$cont]['idttipo']	= $laRow['idttipo'];

				$laTipo[$cont]['nombretip']	= $laRow['nombretip'];
				
			
				$cont++;
			}
			$this->desconectar();
			return $laTipo;
		}

		public function consulta_tipo()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM ttipo";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idttipo']=$laRow['idttipo'];
				$Fila[$cont]['nombretip']=$laRow['nombretip'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}
		public function consultar_tipo_id()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT * FROM ttipo WHERE idttipo='$this->lnTipo';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idttipo']	= $laRow['idttipo'];
				$laTipo['nombretip']		= $laRow['nombretip'];
				$latipo['estatustip']		= $laRow['estatustip'];
			}
			$this->desconectar();
			return $laTipo;
		}
			public function consultar_tipo_nom()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT *FROM ttipo WHERE nombretip='$this->lcNombre';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idttipo']	= $laRow['idttipo'];
				$laTipo['nombretip']		= $laRow['nombretip'];
				$latipo['estatustip']		= $laRow['estatustip'];
			}
			$this->desconectar();
			return $laTipo;
		}

		public function listar_tipo()
		{
			$laTipo = array();
			$cont = 0;
			$this->conectar();
			$sql = "SELECT * FROM ttipo ORDER BY nombretip ASC;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo[$cont]['idttipo']	= $laRow['idttipo'];
				$laTipo[$cont]['nombretip']		= $laRow['nombretip'];
				$laTipo[$cont]['estatustip']		= $laRow['estatustip'];
				$cont++;
			}
			$this->desconectar();
			return $laTipo;
		}

		public function registrar_tipo()
		{
			$this->conectar();
			$sql = "INSERT INTO `ttipo` 
					(`nombretip`) 
					VALUES 
					(UPPER('$this->lcNombre'));";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function desactivar_tipo()
		{
			$this->conectar();
			$sql="UPDATE `ttipo` SET `estatustip`='0' WHERE idttipo='$this->lnTtipo';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_tipo()
		{
			$this->conectar();
			$sql="UPDATE `ttipo` SET `estatustip`='1' WHERE idttipo='$this->lnTtipo';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_tipo()
		{
			$this->conectar();
			$sql="UPDATE `ttipo` SET 
					`nombretip`= UPPER('$this->lcNombre') 
				  WHERE idttipo = '$this->lnTtipo' ;";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}
			function listar_tipos_activos()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM ttipo WHERE estatustip=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idttipo']=$laRow['idttipo'];
				$Fila[$cont]['nombretip']=$laRow['nombretip'];
				$Fila[$cont]['estatustip']=$laRow['estatustip'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}
	}
?>