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
	class clsDepartamento extends ModeloConect

	{
		private $lnIdDepartamento;
		private $lcDenominacion;
		private $lcIdtpersona;
		private $lcIdsede;


		public function __construct()
		{
	        $this->lnIdDepartamento =0 ;
	        $this->lcDenominacion = '';
	        $this->lcIdtpersona = 0;
	        $this->lcIdsede = '';

	        $this->llEstatus = true;
    	}

		public function set_departamento($pniddepartamento)
		{
			$this->lnIdDepartamento = $pniddepartamento;
		}

		public function set_denominacion($pcdenominacion)
		{
			$this->lcDenominacion = $pcdenominacion;
		}

		public function set_persona($pcidtpersona)
		{
			$this->lcIdtpersona = $pcidtpersona;
		}
		public function set_sede($pcidsede)
		{
			$this->lcIdsede = $pcidsede;
		}



		function select_departamento()
		{
			$laDepartamento = array();
			$cont = 0;
			$this->conectar();
				$sql ="SELECT t1.iddepartamento, t1.denominacion, estatusdep, idtpersona ) t2.nombresede
				   FROM tdepartamento AS t1 INNER JOIN tsede AS t2 ON (t1.idsede=t2.idsede)
				   INNER JOIN tpersona AS t3 ON (t1.idtpersona=t3.idtpersona) WHERE iddepartamento = '$this->lnIdDepartamento' ;";
				$pcsql=$this->filtro($sql);
				if($laRow=$this->proximo($pcsql))
				{

				$laDepartamento['iddepartamento']	= $laRow['iddepartamento'];
				$laDepartamento['denominacion']	= $laRow['denominacion'];
				$laDepartamento['estatusdep']	= $laRow['estatusdep'];
				$laDepartamento['nomyape']	= $laRow['nomyape'];
				$laDepartamento['nombresede']	= $laRow['nombresede'];
				$laDepartamento['idtpersona']	= $laRow['idtpersona'];



				}

			$this->desconectar();
			return $laDepartamento;
		}

		public function consultar_departamentos()
		{
			$laDepartamento = array();
			$this->conectar();
			$sql = "SELECT * FROM tdepartamento WHERE iddepartamento='$this->lnIdDepartamento';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laDepartamento['iddepartamento']	= $laRow['iddepartamento'];
				$laDepartamento['denominacion']		= $laRow['denominacion'];
				$laDepartamento['estatusdep']		= $laRow['estatusdep'];
				$laDepartamento['idtpersona']		= $laRow['idtpersona'];
				$laDepartamento['idsede']		= $laRow['idsede'];
			}

			$this->desconectar();
			return $laDepartamento;
		}
		public function nombre_departamento()
		{
			$laDepartamento = array();
			$this->conectar();
			$sql = "SELECT denominacion FROM tdepartamento WHERE iddepartamento='$this->lnIdDepartamento';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laDepartamento['iddepartamento']	= $laRow['iddepartamento'];
				$laDepartamento['denominacion']		= $laRow['denominacion'];
			}

			$this->desconectar();
			return $laDepartamento;
		}
		function ejemplares_departamento()
		{

			//select m.idproyecto,e.nombre_proyecto FROM t_proyecto as m inner join t_proyecto as e on (m.idproyecto=e.idproyecto) where idproyecto like '%".$this->aa_Form['valor']."%'";  AND 't1.idtpersona'='t3.idtpersona'
			$laDepartamento = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT tejemplar.idtejemplar, tcondicion.nombrecond, tejemplar.serialejemp, tejemplar.descripcionejemp
			FROM tcondicion, tejemplar, tcatalogo
			 WHERE iddepartamento='$this->lnIdDepartamento' AND tejemplar.idtcondicion=tcondicion.idtcondicion AND tejemplar.idtcatalogo=tcatalogo.idtcatalogo";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laDepartamento[$cont]['idtejemplar']	= $laRow['idtejemplar'];
				$laDepartamento[$cont]['serialejemp']	= $laRow['serialejemp'];
				$laDepartamento[$cont]['descripcionejemp']	= $laRow['descripcionejemp'];
				$laDepartamento[$cont]['nombrecond']	= $laRow['nombrecond'];
				$laDepartamento[$cont]['iddepartamento']	= $laRow['iddepartamento'];

				$cont++;
			}
			$this->desconectar();
			return $laDepartamento;
		}
		function consultar_departamento()
		{
			$this->conectar();
				$sql ="SELECT * FROM tdepartamento";
				$pcsql=$this->filtro($sql);
				if($laRow=$this->proximo($pcsql))
				{
					$Fila[0]=$laRow['iddepartamento'];
					$Fila[1]=$laRow['denominacion'];
					$Fila[2]=$laRow['nomyape'];
					$Fila[3]=$laRow['nombresede'];

				}

			$this->desconectar();
			return $Fila;
		}

			public function consultar_departamento_nom()
		{
			$ladepartamento= array();
			$this->conectar();
			$sql = "SELECT *FROM tdepartamento WHERE iddepartamento='$this->lnIdDepartamento';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$ladepartamento['iddepartamento']	= $laRow['iddepartamento'];
				$ladepartamento['denominacion']		= $laRow['denominacion'];
			}
			$this->desconectar();
			return $ladepartamento;
		}



public function listar_departamento()
		{

			//select m.idproyecto,e.nombre_proyecto FROM t_proyecto as m inner join t_proyecto as e on (m.idproyecto=e.idproyecto) where idproyecto like '%".$this->aa_Form['valor']."%'";  AND 't1.idtpersona'='t3.idtpersona'
			$laDepartamento = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT t1.iddepartamento, t1.denominacion, estatusdep, concat(t3.nombreunoper,' ', t3.apellidounoper) AS nomyape, t2.nombresede
				   FROM tdepartamento AS t1 INNER JOIN tsede AS t2 ON (t1.idsede=t2.idsede)
				   INNER JOIN tpersona AS t3 ON (t1.idtpersona=t3.idtpersona);";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laDepartamento[$cont]['iddepartamento']	= $laRow['iddepartamento'];
				$laDepartamento[$cont]['denominacion']	= $laRow['denominacion'];
				$laDepartamento[$cont]['estatusdep']	= $laRow['estatusdep'];
				$laDepartamento[$cont]['nomyape']	= $laRow['nomyape'];
				$laDepartamento[$cont]['nombresede']	= $laRow['nombresede'];

				$cont++;
			}
			$this->desconectar();
			return $laDepartamento;
		}
			function listar_departamentos_activos()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT iddepartamento, denominacion FROM tdepartamento WHERE estatusdep=1";
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
		public function registrar_departamento()
		{
			$this->conectar();
			$sql ="INSERT INTO `tdepartamento` (`iddepartamento`, `denominacion`, `idtpersona`, `idsede`) VALUES

			('$this->lnIdDepartamento', UPPER('$this->lcDenominacion'), '$this->lcIdtpersona', '$this->lcIdsede');";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();

			return $lnHecho;
		}

		function desactivar_departamento()
		{
			$this->conectar();
			$sql="UPDATE `tdepartamento` SET `estatusdep`='0' WHERE iddepartamento='$this->lnIdDepartamento';";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}
		function activar_departamento()
		{
			$this->conectar();
			$sql="UPDATE `tdepartamento` SET `estatusdep`='1' WHERE iddepartamento='$this->lnIdDepartamento';";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		function editar_departamento()
		{
			$this->conectar();
			$sql="UPDATE tdepartamento SET denominacion= UPPER('$this->lcDenominacion'), idtpersona = ('$this->lcIdtpersona'), idsede = ('$this->lcIdsede') WHERE iddepartamento='$this->lnIdDepartamento' ";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}
	}
?>
