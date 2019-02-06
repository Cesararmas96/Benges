<?php

require_once('../nucleo/ModeloConect.php');
	class clsSubcategoria extends ModeloConect
	{
		
		private $lnSubcategoria;
		private $lcNombresubcat;
		private $llEstatussubcat;
		private $lnCategoria;

		public function __construct() 
		{
	        $this->lnSubcategoria = 0;
	        $this->lcNombresubcat ='';
	        $this->llEstatussubcat = true;
	        $this->lnCategoria = 0;

    	}
		
		public function set_Subcategoria($pnSubcategoria)
		{
			$this->lnSubcategoria = $pnSubcategoria;
		}

		public function set_Nombresubcat($pcNombresubcat)
		{
			$this->lcNombresubcat = $pcNombresubcat;
		}

		public function set_Estatussubcat($plEstatussubcat)
		{
			$this->llEstatussubcat = $plEstatussubcat;
		}
		public function set_Categoria($pnCategoria)
		{
			$this->lnCategoria = $pnCategoria;
		}

		public function consultar_subcategoria()
		{
			$laCategoria = array();
			$this->conectar();
			$sql = "SELECT * FROM tsubcategoria WHERE idtsubcategoria='$this->lnSubcategoria';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laCategoria['idtsubcategoria']	= $laRow['idtsubcategoria'];
				$laCategoria['nombresubcat']		= $laRow['nombresubcat'];
				$laCategoria['estatussubcat']		= $laRow['estatussubcat'];
				$laCategoria['idtcategoria']		= $laRow['idtcategoria'];
			}
			$this->desconectar();
			return $laCategoria;
		}
		public function consultar_subcategorias()
		
		{
			
		
			$this->conectar();
			$cont=0;
				$sql="SELECT idtsubcategoria,nombresubcat,nombrecat,estatussubcat FROM tsubcategoria,tcategoria WHERE tsubcategoria.idtcategoria=tcategoria.idtcategoria ";
				$pcsql=$this->filtro($sql);
				while($laRow=$this->proximo($pcsql))
				{
				$laCategoria['idtsubcategoria']	= $laRow['idtsubcategoria'];
				$laCategoria['nombresubcat']		= $laRow['nombresubcat'];
				$laCategoria['nombrecat']		= $laRow['nombrecat'];
				$laCategoria['estatussubcat']		= $laRow['estatussubcat'];
					$cont++;
				}
			
			$this->desconectar();
			return $laCategoria;
		
		}

			public function consultar_subcategoria_nom()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT *FROM tsubcategoria WHERE nombresubcat='$this->lcNombresubcat';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtsubcategoria']	= $laRow['idtsubcategoria'];
				$laTipo['nombresubcat']		= $laRow['nombresubcat'];
			}
			$this->desconectar();
			return $laTipo;
		}


		public function consultar_subcategoria_id()
		{
			$laSubcat = array();
			$this->conectar();
			$sql = "SELECT * FROM tsubcategoria WHERE  idtsubcategoria ='$this->lnSubcategoria'";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laSubcat['idtsubcategoria']	= $laRow['idtsubcategoria'];
				$laSubcat['nombresubcat']		= $laRow['nombresubcat'];
				$laSubcat['estatussubcat']		= $laRow['estatussubcat'];
				$laSubcat['idtcategoria']		= $laRow['idtcategoria'];
			}
			$this->desconectar();
			return $laSubcat;
		}
			function listar_subcat_activos()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM tsubcategoria WHERE estatussubcat=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtsubcategoria']=$laRow['idtsubcategoria'];
				$Fila[$cont]['nombresubcat']=$laRow['nombresubcat'];
				$Fila[$cont]['estatussubcat']=$laRow['estatussubcat'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}


		public function listar_subcategoria()
		
		{
			
			$laSubcat = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT t1.idtsubcategoria, t1.nombresubcat, estatussubcat, concat(t3.nombrecat,' ') AS categoria
				   FROM tsubcategoria AS t1 INNER JOIN tcategoria AS t3 ON (t1.idtcategoria=t3.idtcategoria) ORDER BY nombresubcat ASC;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laSubcat[$cont]['idtsubcategoria']	= $laRow['idtsubcategoria'];
				$laSubcat[$cont]['nombresubcat']	= $laRow['nombresubcat'];
				$laSubcat[$cont]['estatussubcat']	= $laRow['estatussubcat'];
				$laSubcat[$cont]['categoria']	= $laRow['categoria'];
			
				$cont++;
			}
			$this->desconectar();
			return $laSubcat;
		}


		public function registrar_subcategoria()
		{
			$this->conectar();
			$sql = "INSERT INTO tsubcategoria (nombresubcat, idtcategoria) values (UPPER('$this->lcNombresubcat'), '$this->lnCategoria');";
			$lnHecho=$this->ejecutar($sql);	
			$this->desconectar();
			return $lnHecho;
		}

		public function desactivar_subcategoria()
		{
			$this->conectar();
			$sql="UPDATE `tsubcategoria` SET `estatussubcat`='0' WHERE idtsubcategoria='$this->lnSubcategoria';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_subcategoria()
		{
			$this->conectar();
			$sql="UPDATE `tsubcategoria` SET `estatussubcat`='1' WHERE idtsubcategoria='$this->lnSubcategoria';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_subcategoria()
		{
			$this->conectar();
			$sql="UPDATE tsubcategoria SET 
					nombresubcat =UPPER('$this->lcNombresubcat'), idtcategoria = ('$this->lnCategoria')
				  WHERE idtsubcategoria = '$this->lnSubcategoria' ;";
			$lnHecho=$this->ejecutar($sql);	
			echo $sql;		
			$this->desconectar();
			return $lnHecho;
		}
	

	}

?>