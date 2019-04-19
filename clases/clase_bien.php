<?php
	
	require_once('../nucleo/ModeloConect.php');
	class clsBien extends ModeloConect

	{	
		private $lnIde;
		private $lnCodigo;
		private $lcIdCatalogo;
		private $lcCategoria;
		private $lcIdmarca;
		private $lcIdmodelo;
		private $lcIdtipo;
		private $lcIdcategoria;
		private $lccolor;
		private $lcDescripcion;
	

		public function __construct()
		{
			$this->lnIde =0 ;
	    $this->lnCodigo =0;
			$this->lcIdCatalogo =0 ;
	    $this->lcCategoria= 0;
	    $this->lcIdmarca= 0;
	    $this->lcIdmodelo =0 ;
	    $this->lcIdtipo =0 ;
	    $this->lcIdcategoria =0 ;
	    $this->lcColor='';
	    $this->lcDescripcion = '';

    	}

    	public function set_id($pnIde)
		{
			$this->lnIde = $pnIde;
		}

		public function set_codigo($pnCodigo)
		{
			$this->lnCodigo = $pnCodigo;
		}
		public function set_Catalogo($pnTCatalogo)
		{
			$this->lcIdCatalogo = $pnTCatalogo;
		}
	
		public function set_categoria($pcCategoria)
		{
			$this->lcCategoria = $pcCategoria;
		}
		
		public function set_idmarca($pcidmarca)
		{
			$this->lcIdmarca = $pcidmarca;
		}
		public function set_idmodelo($pcidmodelo)
		{
			$this->lcIdmodelo = $pcidmodelo;
		}
		public function set_idtipo($pcidtipo)
		{
			$this->lcIdtipo = $pcidtipo;
		}

		public function set_color($pccolor)
		{
			$this->lcColor = $pccolor;
		}

		public function set_idcategoria($pcidcategoria)
		{
			$this->lcIdcategoria = $pcidcategoria;
		}

		public function set_descripcion($pcdescripcion){
			$this->lcDescripcion = $pcdescripcion;
		} 
		


		public function consultar_bien()
		{
			$elCatalogo = array();
			$this->conectar();

			$sql="SELECT * FROM tcatalogo WHERE idtcatalogo='$this->lnIde'";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$elCatalogo['idtcatalogo']=$laRow['idtcatalogo'];
				$elCatalogo['estatuscata']=$laRow['estatuscata'];
				$elCatalogo['idttipo']=$laRow['idttipo'];
				$elCatalogo['idtcategoria']=$laRow['idtcategoria'];
				$elCatalogo['idtmarca']=$laRow['idtmarca'];
				$elCatalogo['idtmodelo']=$laRow['idtmodelo'];
				$elCatalogo['idtcolor']=$laRow['idtcolor'];
				$elCatalogo['descripcioncat']=$laRow['descripcioncat'];
			}

			$this->desconectar();
			return $elCatalogo;
		}
		
		function consultar_codigo()
		{
			$this->conectar();
				$sql="SELECT idtcatalogo FROM tcatalogo WHERE idtcatalogo='$this->lnCodigo'";
				$pcsql=$this->filtro($sql);
				if($laRow=$this->proximo($pcsql))
				{
					$Fila['id']=$laRow['id'];
					$Fila['idtcatalogo']=$laRow['idtcatalogo'];

				}

			$this->desconectar();
			return $Fila;
		}

		function listar_bien()
		{
			$this->conectar();
			$laBien = array();
			$cont = 0;
			$sql = "SELECT   tcatalogo.idtcatalogo,tcatalogo.estatuscata, tmodelo.nombremode, tcategoria.nombrecat, ttipo.nombretip, tmarca.nombremar , tcatalogo.colorcat, tcatalogo.descripcioncat, tcatalogo.disponibilidadcata, tcatalogo.existenciacata FROM tcatalogo, ttipo, tmarca, tmodelo, tcategoria  WHERE tcatalogo.idttipo=ttipo.idttipo AND tcatalogo.idtcategoria=tcategoria.idtcategoria AND tcatalogo.idtmodelo=tmodelo.idtmodelo AND tcatalogo.idtmarca=tmarca.idtmarca;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laBien[$cont]['idtcatalogo']	= $laRow['idtcatalogo'];
				$laBien[$cont]['estatuscata']	= $laRow['estatuscata'];
				$laBien[$cont]['nombretip']	= $laRow['nombretip'];
				$laBien[$cont]['nombrecat']	= $laRow['nombrecat'];
				$laBien[$cont]['nombremar']	= $laRow['nombremar'];
				$laBien[$cont]['nombremode']	= $laRow['nombremode'];
				$laBien[$cont]['colorcat']	= $laRow['colorcat'];
				$laBien[$cont]['descripcioncat']	= $laRow['descripcioncat'];
				$laBien[$cont]['disponibilidadcata']	= $laRow['disponibilidadcata'];
				$laBien[$cont]['existenciacata']	= $laRow['existenciacata'];




				$cont++;
			}
			$this->desconectar();
			return $laBien;
		}


		public function registrar_bien()
		{
			$this->conectar();
			#$rs =  "SELECT MAX(idtbien) FROM tbien";
			#$lnHechos=$this->ejecutar($rs);
			#if ($row = mysql_fetch_row($lnHechos))
			#{
			#	$idtbien = trim($row[0]);
			#	$id2= $idtbien +1;

			$sql ="INSERT INTO tcatalogo
					(idtcatalogo,  idttipo, idtcategoria, idtmarca, idtmodelo, colorcat, descripcioncat)
					VALUES
				('$this->lnCodigo','$this->lcIdtipo','$this->lcCategoria','$this->lcIdmarca','$this->lcIdmodelo', '$this->lcColor', UPPER('$this->lcDescripcion'))";
			$lnHecho=$this->ejecutar($sql);

			// #echo $lnHechos;
			// echo "<br>";
			echo $sql;
			// echo "<br>";
			echo $this->lnCodigo;
			$this->desconectar();

			return $lnHecho;			
		}

		function añadir()
		{
			$this->conectar();
			$id=mysql_insert_id();

			$sql1= "UPDATE tcatalogo SET idtcatalogo='$this->lcIdtipo-$this->lcIdmarca-$this->lcIdmodelo-$this->lcCategoria-$this->lcIdsubcategoria-$id' WHERE id='$id'";
			$lnHechos=$this->ejecutar($sql1);
			$this->desconectar();

			return $lnHechos;
		}
		function listar_catalogos_activos()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT tcatalogo.idtcatalogo, tcatalogo.estatuscata, tcatalogo.numeroinvent, tcatalogo.estatuscata, tcatalogo.cantidadcat, tmodelo.nombremode, tcategoria.nombrecat, ttipo.nombretip, tmarca.nombremar, tsubcategoria.nombresubcat FROM tcatalogo, ttipo, tmarca, tmodelo, tcategoria, tsubcategoria WHERE  tcatalogo.idttipo=ttipo.idttipo AND tcatalogo.estatuscata=1 AND tcatalogo.idtcategoria=tcategoria.idtcategoria AND tcatalogo.idtmodelo=tmodelo.idtmodelo AND tcatalogo.idtsubcategoria=tsubcategoria.idtsubcategoria AND tcatalogo.idtmarca=tmarca.idtmarca;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$laBien[$cont]['idtcatalogo']	= $laRow['idtcatalogo'];
				$laBien[$cont]['numeroinvent']	= $laRow['numeroinvent'];
				$laBien[$cont]['cantidadcat']	= $laRow['cantidadcat'];
				$laBien[$cont]['estatuscata']	= $laRow['estatuscata'];
				$laBien[$cont]['nombretip']	= $laRow['nombretip'];
				$laBien[$cont]['nombrecat']	= $laRow['nombrecat'];
				$laBien[$cont]['nombresubcat']	= $laRow['nombresubcat'];
				$laBien[$cont]['nombremar']	= $laRow['nombremar'];
				$laBien[$cont]['nombremode']	= $laRow['nombremode'];

				$cont++;
			}
			$this->desconectar();
			return $laBien;
		}



		function desactivar_catalogo()
		{
			$this->conectar();
			$sql="UPDATE `tcatalogo` SET `estatuscata`='0' WHERE idtcatalogo='$this->lnIde';";
			$lnHecho=$this->ejecutar($sql);
			echo $sql;
			$this->desconectar();
			return $lnHecho;
		}
		
		function activar_catalogo()
		{
			$this->conectar();
			$sql="UPDATE `tcatalogo` SET `estatuscata`='1' WHERE idtcatalogo='$this->lnIde';";
			$lnHecho=$this->ejecutar($sql);
			echo $sql;
			$this->desconectar();
			return $lnHecho;
		}

		function editar_bien()
		{
			$this->conectar();
			$sql="UPDATE tcatalogo  SET idtcatalogo=('$this->lcIdtipo-$this->lcIdmarca-$this->lcIdmodelo-$this->lcCategoria-$this->lcIdsubcategoria-$this->lnIde'), numeroinvent=('$this->lcNumeroinvbien'), idttipo=('$this->lcIdtipo'), idtcategoria=('$this->lcCategoria'), idtsubcategoria=('$this->lcIdsubcategoria'), idtmarca=('$this->lcIdmarca'), idtmodelo=('$this->lcIdmodelo') WHERE idtcatalogo=('$this->lnIde')";
			$lnHecho=$this->ejecutar($sql);




			echo $sql;
			echo "<br>";


			$this->desconectar();

			return $lnHecho;
		}

		function listar_departamentos()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT iddepartamento, denominacion FROM tdepartamento";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['iddepartamento']=$laRow['iddepartamento'];
				$Fila[$cont]['denominacion']=$laRow['denominacion'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

			public function consultar_bien_id()
		{
			$elCatalogo = array();
			$this->conectar();
			$sql = "SELECT * FROM tcatalogo WHERE  idtcatalogo ='$this->lnIde'";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$elCatalogo['idtcatalogo']	= $laRow['idtcatalogo'];
				$elCatalogo['descripcioncat']		= $laRow['descripcioncat'];
			}
			$this->desconectar();
			return $elCatalogo;
		}
	}
?>
