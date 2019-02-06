<?php

require_once('../nucleo/ModeloConect.php');
	class clsModelo extends ModeloConect
	{
		
		private $lnModelo;
		private $lcNombremode;
		private $llEstatusmode;
		private $lnMarca;

		public function __construct() 
		{
	        $this->lnModelo = 0;
	        $this->lcNombremode ='';
	        $this->llEstatusmode = true;
	        $this->lnMarca = 0;

    	}
		
		public function set_Modelo($pnModelo)
		{
			$this->lnModelo = $pnModelo;
		}

		public function set_Nombremode($pcNombremode)
		{
			$this->lcNombremode = $pcNombremode;
		}

		public function set_Estatusmode($plEstatusmode)
		{
			$this->llEstatusmode = $plEstatusmode;
		}
		public function set_Marca($pnMarca)
		{
			$this->lnMarca = $pnMarca;
		}

		public function consultar_modelo()
		{
			$laMarca = array();
			$this->conectar();
			$sql = "SELECT * FROM tmodelo WHERE idtmodelo='$this->lnModelo';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laMarca['idtmodelo']	= $laRow['idtmodelo'];
				$laMarca['nombremode']		= $laRow['nombremode'];
				$laMarca['estatusmode']		= $laRow['estatusmode'];
				$laMarca['idtmarca']		= $laRow['idtmarca'];
			}
			$this->desconectar();
			return $laMarca;
		}
		public function consultar_modelos()
		
		{
			
		
			$this->conectar();
			$cont=0;
				$sql="SELECT idtmodelo,nombremode,nombremar,estatusmode FROM tmodelo,tmarca WHERE tmodelo.idtmarca=tmarca.idtmarca ";
				$pcsql=$this->filtro($sql);
				while($laRow=$this->proximo($pcsql))
				{
				$laMarca['idtmodelo']	= $laRow['idtmodelo'];
				$laMarca['nombremode']		= $laRow['nombremode'];
				$laMarca['nombremar']		= $laRow['nombremar'];
				$laMarca['estatusmode']		= $laRow['estatusmode'];
					$cont++;
				}
			
			$this->desconectar();
			return $laMarca;
		
		}

		public function consultar_modelo_nom()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT *FROM tmodelo WHERE nombremode='$this->lcNombremode';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtmodelo']	= $laRow['idtmodelo'];
				$laTipo['nombremode']		= $laRow['nombremode'];
			}
			$this->desconectar();
			return $laTipo;
		}

		public function consultar_modelo_id()
		{
			$laModelo = array();
			$this->conectar();
			$sql = "SELECT * FROM tmodelo WHERE  idtmodelo ='$this->lnModelo'";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laModelo['idtmodelo']	= $laRow['idtmodelo'];
				$laModelo['nombremode']		= $laRow['nombremode'];
				$laModelo['estatusmode']		= $laRow['estatusmode'];
				$laModelo['idtmarca']		= $laRow['idtmarca'];
			}
			$this->desconectar();
			return $laModelo;
		}

			function listar_modelos_activos()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM tmodelo WHERE estatusmode=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtmodelo']=$laRow['idtmodelo'];
				$Fila[$cont]['nombremode']=$laRow['nombremode'];
				$Fila[$cont]['estatusmode']=$laRow['estatusmode'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

		public function listar_modelo()
		
		{
			
			$laModelo = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT t1.idtmodelo, t1.nombremode, estatusmode, concat(t3.nombremar,' ') AS marca
				   FROM tmodelo AS t1 INNER JOIN tmarca AS t3 ON (t1.idtmarca=t3.idtmarca)";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laModelo[$cont]['idtmodelo']	= $laRow['idtmodelo'];
				$laModelo[$cont]['nombremode']	= $laRow['nombremode'];
				$laModelo[$cont]['estatusmode']	= $laRow['estatusmode'];
				$laModelo[$cont]['marca']	= $laRow['marca'];
			
				$cont++;
			}
			$this->desconectar();
			return $laModelo;
		}


		public function registrar_modelo()
		{
			$this->conectar();
			$sql = "INSERT INTO tmodelo (nombremode, idtmarca) values (UPPER('$this->lcNombremode'), '$this->lnMarca');";
			$lnHecho=$this->ejecutar($sql);	
			$this->desconectar();
			return $lnHecho;
		}

		public function desactivar_modelo()
		{
			$this->conectar();
			$sql="UPDATE `tmodelo` SET `estatusmode`='0' WHERE idtmodelo='$this->lnModelo';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_modelo()
		{
			$this->conectar();
			$sql="UPDATE `tmodelo` SET `estatusmode`='1' WHERE idtmodelo='$this->lnModelo';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_modelo()
		{
			$this->conectar();
			$sql="UPDATE tmodelo SET 
					nombremode =UPPER('$this->lcNombremode'), idtmarca = ('$this->lnMarca')
				  WHERE idtmodelo = '$this->lnModelo' ;";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}
	

	}

?>