<?php
	/**
	* Clase módulo
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	require_once('../nucleo/ModeloConect.php');
	class clsEjemplar extends ModeloConect

	{
		private $lnIdejemplar;
		private $lnIdcodigo;
		private $lnId;
		private $lnIdcondicion;
		private $lnIddepartamento;
		private $lnIdsede;
		private $lcSerial;
		private $lcNombre;
		private $lcValor;
		private $lcDescripcion;


		public function __construct()
		{
	        $this->lnIdejemplar =0 ;
	        $this->lnIdcodigo =0 ;

	        $this->lnId= 0;
	        $this->lnIdcondicion= 0;
	        $this->lnIddepartamento= 0;
	        $this->lnIdsede= 0;
					$this->lcSerial =0 ;
	        $this->lcNombre ="" ;
	        $this->lcValor =0 ;
	        $this->lcDescripcion= "";
    	}

		public function set_idejemplar($pnIdejemplar)
		{
			$this->lnIdejemplar = $pnIdejemplar;
		}

		public function set_idcodigo($pnIdcodigo)
		{
			$this->lnIdcodigo = $pnIdcodigo;
		}
		public function set_nombre($pcNombre)
		{
			$this->lcNombre = $pcNombre;
		}
		public function set_idcatalogo($pnid)
		{
			$this->lnId = $pnid;
		}
		public function set_serial($pcSerial)
		{
			$this->lcSerial = $pcSerial;
		}
		public function set_valor($pcValor)
		{
			$this->lcValor = $pcValor;
		}
		public function set_condicion($pccondicion)
		{
			$this->lnIdcondicion = $pccondicion;
		}
		public function set_departamento($pcdepartamento)
		{
			$this->lnIddepartamento = $pcdepartamento;
		}
		public function set_sede($pcsede)
		{
			$this->lnIdsede = $pcsede;
		}

		public function set_descripcion($pcDescripcion)
		{
			$this->lcDescripcion = $pcDescripcion;

		}



		function consultar_bien()
		{
			$this->conectar();
				$sql="SELECT id,idtcatalogo,numeroinvent,idtmarca,idtmodelo,idttipo,idtcategoria,idtsubcategoria,cantidadcat FROM tcatalogo WHERE idtcatalogo='$this->lnIdejemplar'";
				$pcsql=$this->filtro($sql);
				if($laRow=$this->proximo($pcsql))
				{
					$Fila['id']=$laRow['id'];
					$Fila['idtcatalogo']=$laRow['idtcatalogo'];
					$Fila['numeroinvt']=$laRow['numeroinvt'];
					$Fila['idtmarca']=$laRow['idtmarca'];
					$Fila['idtmodelo']=$laRow['idtmodelo'];
					$Fila['idttipo']=$laRow['idttipo'];
					$Fila['idtcategoria']=$laRow['idtcategoria'];
					$Fila['idtsubcategoria']=$laRow['idtsubcategoria'];
					$Fila['cantidadcat']=$laRow['cantidadcat'];

				}

			$this->desconectar();
			return $Fila;
		}

		function listar_ejemplar()
		{
			$this->conectar();
			$cont = 0;
			$sql = "SELECT tejemplar.idtejemplar, tejemplar.serialejemp,tejemplar.codigoejemp, tejemplar.descripcionejemp, testado.nombreestado, tcondicion.nombrecond, tcatalogo.idtcatalogo, tdepartamento.denominacion, tsede.nombresede FROM tcatalogo, testado, tcondicion, tejemplar, tdepartamento, tsede WHERE tejemplar.idtestado=testado.idtestado AND tejemplar.idtcondicion=tcondicion.idtcondicion AND tejemplar.idtcatalogo=tcatalogo.idtcatalogo AND tejemplar.iddepartamento=tdepartamento.iddepartamento ";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laBien[$cont]['idtejemplar']	= $laRow['idtejemplar'];
				$laBien[$cont]['serialejemp']	= $laRow['serialejemp'];
				$laBien[$cont]['codigoejemp']	= $laRow['codigoejemp'];
				$laBien[$cont]['descripcionejemp']	= $laRow['descripcionejemp'];
				$laBien[$cont]['estatusejemp']	= $laRow['estatusejemp'];
				$laBien[$cont]['nombreestado']	= $laRow['nombreestado'];
				$laBien[$cont]['nombrecond']	= $laRow['nombrecond'];
				$laBien[$cont]['denominacion']	= $laRow['denominacion'];
				$laBien[$cont]['nombresede']	= $laRow['nombresede'];
				$laBien[$cont]['nombresubcat']	= $laRow['nombresubcat'];
				$laBien[$cont]['idtcatalogo']	= $laRow['idtcatalogo'];

				$cont++;
			}
			$this->desconectar();
			return $laBien;
		}





		public function registrar_ejemplar()
		{
			$this->conectar();
			#$rs =  "SELECT MAX(idtbien) FROM tbien";
			#$lnHechos=$this->ejecutar($rs);
			#if ($row = mysql_fetch_row($lnHechos))
			#{
			#	$idtbien = trim($row[0]);
			#	$id2= $idtbien +1;

			$sql ="INSERT INTO tejemplar
					(idtejemplar, serialejemp, nombrejemp, descripcionejemp, idtcondicion, idtcatalogo, idsede, iddepartamento)
					VALUES
				('$this->lnId','$this->lcSerial', '$this->lcNombre','$this->lcDescripcion','$this->lnIdcondicion','$this->lnId', '$this->lnIdsede','$this->lnIddepartamento')";
			$lnHecho=$this->ejecutar($sql);
			$id=mysql_insert_id();
			$sql1= "UPDATE tejemplar SET idtejemplar='$this->lnId-$id' WHERE id='$id'";
			$lnHechos=$this->ejecutar($sql1);
			$sql2= "UPDATE tcatalogo SET cantidadcat= cantidadcat +1  WHERE idtcatalogo='$this->lnId'";
			$lnHechos=$this->ejecutar($sql2);
			#echo $lnHechos;
			echo "<br>";
			echo $sql;
			echo "<br>";
			echo $this->lnId;
			echo "<br>";
			echo $sql1;
			echo "<br>";
			echo $sql2;



			$this->desconectar();

			return $lnHechos;
		}
			function listar_estados()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM testado";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtestado']=$laRow['idtestado'];
				$Fila[$cont]['nombreestado']=$laRow['nombreestado'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}
			public function consultar_ejemplar_serial()
		{
			$laEjemplar = array();
			$this->conectar();
			$sql = "SELECT *FROM tejemplar WHERE serialejemp='$this->lcSerial';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laEjemplar['idtejemplar']	= $laRow['idtejemplar'];
				$laEjemplar['serialejemp']		= $laRow['serialejemp'];
			}
			$this->desconectar();
			return $laEjemplar;
		}

		function desactivar_ejemplar()
			{
			$this->conectar();
			$sql="UPDATE `tejemplar` SET `estatusejemp`='0' WHERE idtejemplar='$this->lnIdejemplar';";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}
		function activar_ejemplar()
			{
			$this->conectar();
			$sql="UPDATE `tejemplar` SET `estatusejemp`='1' WHERE idtejemplar='$this->lnIdejemplar';";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}
		function editar_modulo()
		{
			$this->conectar();
			$sql="UPDATE tmodulo SET nombremod='$this->lcNombre' WHERE idtmodulo='$this->lcIdModulo' ";
			$lnHecho=$this->ejecutar($sql);
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
	}
?>
