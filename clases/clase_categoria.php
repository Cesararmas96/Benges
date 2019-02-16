<?php
	require_once('../nucleo/ModeloConect.php');
	class clsCategoria extends ModeloConect
	{
		
		private $lnTCategoria;
		private $lcNombre;
		private $llEstatus;
		private $lsTipo;

		public function __construct() 
		{
	        $this->lnTCategoria = 0;
	        $this->lcNombre ='';
	        $this->llEstatus = true;
	        $this->lsTipo = '';

    	}
		
		public function set_Categoria($pnTCategoria)
		{
			$this->lnTCategoria = $pnTCategoria;
		}

		public function set_Nombre($pcNombre)
		{
			$this->lcNombre = $pcNombre;
		}

		public function set_Estatus($plEstatus)
		{
			$this->llEstatus = $plEstatus;
		}
		public function set_Tipo($psTipo)
		{
			$this->lsTipo = $psTipo;
		}


			public function consulta_categoria()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM tcategoria";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtcategoria']=$laRow['idtcategoria'];
				$Fila[$cont]['nombrecat']=$laRow['nombrecat'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}


		public function consultar_categoria()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT * FROM tcategoria WHERE idtcategoria='$this->lnTCategoria';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtcategoria']	= $laRow['idtcategoria'];
				$laTipo['nombrecat']		= $laRow['nombrecat'];
				$laTipo['estatuscat']		= $laRow['estatuscat'];
				$laTipo['idttipo']		= $laRow['idttipo'];
			}
			$this->desconectar();
			return $laTipo;
		}
		public function consultar_categorias()
		
		{
			
		
			$this->conectar();
			$cont=0;
				$sql="SELECT idtcategoria,nombrecat,nombretip,estatuscat FROM tcategoria,ttipo WHERE tcategoria.idttipo=ttipo.idttipo ";
				$pcsql=$this->filtro($sql);
				while($laRow=$this->proximo($pcsql))
				{
				$laTipo['idtcategoria']	= $laRow['idtcategoria'];
				$laTipo['nombrecat']		= $laRow['nombrecat'];
				$laTipo['nombretip']		= $laRow['nombretip'];
				$laTipo['estatuscat']		= $laRow['estatuscat'];
					$cont++;
				}
			
			$this->desconectar();
			return $laTipo;
		
		}

		public function consultar_categoria_id()
		{
			$laCategoria = array();
			$this->conectar();
			$sql = "SELECT * FROM tcategoria WHERE  idtcategoria ='$this->lnTCategoria'";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laCategoria['idtcategoria']	= $laRow['idtcategoria'];
				$laCategoria['nombrecat']		= $laRow['nombrecat'];
				$laCategoria['estatuscat']		= $laRow['estatuscat'];
				$laCategoria['idttipo']		= $laRow['idttipo'];
			}
			$this->desconectar();
			return $laCategoria;
		}
			public function consultar_categoria_nom()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT *FROM tcategoria WHERE nombrecat='$this->lcNombre';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtcategoria']	= $laRow['idtcategoria'];
				$laTipo['nombrecat']		= $laRow['nombrecat'];
			}
			$this->desconectar();
			return $laTipo;
		}

		public function listar_categoria()
		{
			
			//select m.idproyecto,e.nombre_proyecto FROM t_proyecto as m inner join t_proyecto as e on (m.idproyecto=e.idproyecto) where idproyecto like '%".$this->aa_Form['valor']."%'";  AND 't1.idtpersona'='t3.idtpersona'
			$laCategoria = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT t1.idtcategoria, t1.nombrecat, estatuscat, concat(t3.nombretip,' ') AS tipo
				   FROM tcategoria AS t1 INNER JOIN ttipo AS t3 ON (t1.idttipo=t3.idttipo);";
			
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laCategoria[$cont]['idtcategoria']	= $laRow['idtcategoria'];
				$laCategoria[$cont]['nombrecat']	= $laRow['nombrecat'];
				$laCategoria[$cont]['estatuscat']	= $laRow['estatuscat'];
				$laCategoria[$cont]['tipo']	= $laRow['tipo'];
			
				$cont++;
			}
			$this->desconectar();
			return $laCategoria;
		}


		public function registrar_categoria()
		{
			$this->conectar();
			#$rs ="SELECT t1.idtcategoria MAX(t1) FROM tcategoria AS t1 ";
			#$query = $this->ejecutar($rs);
			#if ($row = mysql_fetch_row($query))
			#{
			#	$idtcategoria = trim($row[0]);
			#	$id2= $idtcategoria +1;


			$sql = "INSERT INTO tcategoria (nombrecat, idttipo) values (UPPER('$this->lcNombre'),UPPER ('$this->lsTipo'));";
			$lnHecho=$this->ejecutar($sql);	
			#echo $query;
			#echo "<br>";

			#echo $sql;
			$this->desconectar();
			return $lnHecho;
		}
		
		#$rs =  "SELECT MAX(id) FROM tmodelo";
		#	$lnHecho=$this->ejecutar($rs);

			#if ($row = mysql_fetch_row($lnHecho))
			
			#{
			#	$idtmodelo = trim($row[0]);
			#	$id2= $idtmodelo +1;
			#$sql = "INSERT INTO tmodelo (codigomode) values (('$this->coA-$id2'));";
			#$lnHecho=$this->ejecutar($sql);	
			#echo $sql;
			#echo "<br>";
			#echo $id;
			#echo "<br>";
			#echo $rs;
			#return $lnHecho;

		public function desactivar_categoria()
		{
			$this->conectar();
			$sql="UPDATE `tcategoria` SET `estatuscat`='0' WHERE idtcategoria='$this->lnTCategoria';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_categoria()
		{
			$this->conectar();
			$sql="UPDATE `tcategoria` SET `estatuscat`='1' WHERE idtcategoria='$this->lnTCategoria';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_categoria()
		{
			$this->conectar();
			$sql="UPDATE tcategoria SET 
					nombrecat =UPPER('$this->lcNombre'), idttipo = ('$this->lsTipo')
				  WHERE idtcategoria = '$this->lnTCategoria' ;";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}
	
			function listar_categorias_activas()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM tcategoria WHERE estatuscat=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtcategoria']=$laRow['idtcategoria'];
				$Fila[$cont]['nombrecat']=$laRow['nombrecat'];
				$Fila[$cont]['estatuscat']=$laRow['estatuscat'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}
	}

?>