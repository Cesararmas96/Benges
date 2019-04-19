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
		private $lnCodigo;
		private $lcDenominacion;
		private $llEstatus;


		public function __construct()
		{
	        $this->lnIdDepartamento =0 ;
	        $this->lnCodigo =0 ;
	        $this->lcDenominacion = '';
	  
	        $this->llEstatus = true;
    	}

		public function set_departamento($pniddepartamento)
		{
			$this->lnIdDepartamento = $pniddepartamento;
		}

			public function set_codigo($pncodigo)
		{
			$this->lnCodigo = $pncodigo;
		}

		public function set_denominacion($pcdenominacion)
		{
			$this->lcDenominacion = $pcdenominacion;
		}

		public function set_Estatus($pcestatus)
		{
			$this->llEstatus = $pcestatus;
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
				$laDepartamento['codigodep']	= $laRow['codigodep'];

				$laDepartamento['denominacion']		= $laRow['denominacion'];
				$laDepartamento['estatusdep']		= $laRow['estatusdep'];
		
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
				$laDepartamento['codigodep']	= $laRow['codigodep'];
				$laDepartamento['denominacion']		= $laRow['denominacion'];
			}

			$this->desconectar();
			return $laDepartamento;
		}
		// function ejemplares_departamento()
		// {

		// 	//select m.idproyecto,e.nombre_proyecto FROM t_proyecto as m inner join t_proyecto as e on (m.idproyecto=e.idproyecto) where idproyecto like '%".$this->aa_Form['valor']."%'";  AND 't1.idtpersona'='t3.idtpersona'
		// 	$laDepartamento = array();
		// 	$cont = 0;
		// 	$this->conectar();

		// 	$sql ="SELECT tejemplar.idtejemplar, tcondicion.nombrecond, tejemplar.serialejemp, tejemplar.descripcionejemp
		// 	FROM tcondicion, tejemplar, tcatalogo
		// 	 WHERE iddepartamento='$this->lnIdDepartamento' AND tejemplar.idtcondicion=tcondicion.idtcondicion AND tejemplar.idtcatalogo=tcatalogo.idtcatalogo";
		// 	$pcsql = $this->filtro($sql);
		// 	while($laRow = $this->proximo($pcsql))
		// 	{
		// 		$laDepartamento[$cont]['idtejemplar']	= $laRow['idtejemplar'];
		// 		$laDepartamento[$cont]['serialejemp']	= $laRow['serialejemp'];
		// 		$laDepartamento[$cont]['descripcionejemp']	= $laRow['descripcionejemp'];
		// 		$laDepartamento[$cont]['nombrecond']	= $laRow['nombrecond'];
		// 		$laDepartamento[$cont]['iddepartamento']	= $laRow['iddepartamento'];

		// 		$cont++;
		// 	}
		// 	$this->desconectar();
		// 	return $laDepartamento;
		// }
		function consultar_departamento()
		{
			
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM tdepartamento";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['iddepartamento']=$laRow['iddepartamento'];
				$Fila[$cont]['codigodep']=$laRow['codigodep'];
				$Fila[$cont]['denominacion']=$laRow['denominacion'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

			public function consultar_departamento_nom()
		{
			$ladepartamento= array();
			$this->conectar();
			$sql = "SELECT * FROM tdepartamento WHERE denominacion='$this->lcDenominacion';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$ladepartamento['iddepartamento']	= $laRow['iddepartamento'];
				$ladepartamento['codigodep']	= $laRow['codigodep'];
				$ladepartamento['denominacion']		= $laRow['denominacion'];
			}
			$this->desconectar();
			return $ladepartamento;
		}

			public function consultar_departamento_cod()
		{
			$ladepartamento= array();
			$this->conectar();
			$sql = "SELECT * FROM tdepartamento WHERE codigodep='$this->lnCodigo';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$ladepartamento['iddepartamento']	= $laRow['iddepartamento'];
				$ladepartamento['codigodep']	= $laRow['codigodep'];
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

			$sql ="SELECT * FROM tdepartamento";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laDepartamento[$cont]['iddepartamento']	= $laRow['iddepartamento'];
				$laDepartamento[$cont]['codigodep']	= $laRow['codigodep'];
				$laDepartamento[$cont]['denominacion']	= $laRow['denominacion'];
				$laDepartamento[$cont]['estatusdep']	= $laRow['estatusdep'];
			

				$cont++;
			}
			$this->desconectar();
			return $laDepartamento;
		}
			function listar_departamentos_activos()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT iddepartamento, codigodep, denominacion FROM tdepartamento WHERE estatusdep=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['iddepartamento']=$laRow['iddepartamento'];
				$Fila[$cont]['codigodep']=$laRow['codigodep'];
				$Fila[$cont]['denominacion']=$laRow['denominacion'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}
		public function registrar_departamento()
		{
			$this->conectar();
			$sql ="INSERT INTO `tdepartamento` (`iddepartamento`, `denominacion`,`codigodep`) VALUES

			('$this->lnIdDepartamento', UPPER('$this->lcDenominacion'),'$this->lnCodigo' );";
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

		public function editar_departamento()
		{
		
			$this->conectar();
			$sql=
					"UPDATE `tdepartamento` SET  
						`codigodep` = ('$this->lnCodigo'), 
						`denominacion`= UPPER('$this->lcDenominacion') 
				  WHERE 
				  	iddepartamento = ('$this->lnIdDepartamento') ;";

			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		
	}
?>
