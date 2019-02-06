<?php
	/**
	* Clase persona
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	require_once('../nucleo/ModeloConect.php');
	class clsPersona extends ModeloConect
	{

		private $lnIdtpersona;
		private $lcNombreuno;
		private $lcNombredos;
		private $lcApellidouno;
		private $lcApellidodos;
		private $lcFechaNac;
		private $lcDireccion;
		private $lnTelefonoMovil;
		private $lcCorreo;
		private $llEstatus;

		public function __construct()
		{
	        $this->lnIdtpersona = 0;
	        $this->lcNombreuno = '';
	        $this->lcNombredos = '';
	        $this->lcApellidouno = '';
	        $this->lcApellidodos = '';
	        $this->lcFechaNac = '';
	        $this->lcDireccion = '';
	        $this->lnTelefonoMovil = 0;
	        $this->lcCorreo = '';
	        $this->llEstatus = true;
    	}

		public function set_Persona($pnIdtpersona)
		{
			$this->lnIdtpersona = $pnIdtpersona;
		}


		public function set_Nombreuno($pcNombreuno)
		{
			$this->lcNombreuno = $pcNombreuno;
		}

		public function set_Nombredos($pcNombredos)
		{
			$this->lcNombredos = $pcNombredos;
		}

		public function set_Apellidouno($pcApellidouno)
		{
			$this->lcApellidouno = $pcApellidouno;
		}

		public function set_Apellidodos($pcApellidodos)
		{
			$this->lcApellidodos = $pcApellidodos;
		}
		function set_FechaNac($pcFechaNac)
		{
			$this->lcFechaNac= $pcFechaNac;
		}

		public function set_Direccion($pcDireccion)
		{
			$this->lcDireccion = $pcDireccion;
		}

		public function set_Telefonomovil($pnTelefonoMovil)
		{
			$this->lnTelefonoMovil = $pnTelefonoMovil;
		}

		public function set_Correo($pcCorreo)
		{
			$this->lcCorreo = $pcCorreo;
		}

		public function set_Estatus($plEstatus)
		{
			$this->llEstatus = $plEstatus;
		}

		public function consultar_persona()
		{
			$laPersona = array();
			$this->conectar();
			$sql = "SELECT * FROM tpersona WHERE idtpersona='$this->lnIdtpersona';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laPersona['idtpersona']	= $laRow['idtpersona'];
				$laPersona['nombreunoper']	= $laRow['nombreunoper'];
				$laPersona['nombredosper']	= $laRow['nombredosper'];
				$laPersona['apellidounoper']= $laRow['apellidounoper'];
				$laPersona['apellidodosper']= $laRow['apellidodosper'];
				$laPersona['fechanacimientoper']= $laRow['fechanacimientoper'];
				$laPersona['direccionper']	= $laRow['direccionper'];
				$laPersona['telefonoper']= $laRow['telefonoper'];
				$laPersona['estatusper']		= $laRow['estatusper'];
				$laPersona['correoper']		= $laRow['correoper'];

			}
			$this->desconectar();
			return $laPersona;
		}

		public function consultar_persona_cedula()
		{
			$laPersona = array();
			$this->conectar();
			$sql = "SELECT * FROM tpersona WHERE idtpersona='$this->lnIdtpersona';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laPersona['idtpersona']	= $laRow['idtpersona'];
				$laPersona['nombreunoper']	= $laRow['nombreunoper'];
				$laPersona['nombredosper']	= $laRow['nombredosper'];
				$laPersona['apellidounoper']= $laRow['apellidounoper'];
				$laPersona['apellidodosper']= $laRow['apellidodosper'];
				$laPersona['fechanacimientoper']= $laRow['fechanacimientoper'];
				$laPersona['direccionper']	= $laRow['direccionper'];
				$laPersona['telefonoper']= $laRow['telefonoper'];
				$laPersona['estatusper']		= $laRow['estatusper'];
				$laPersona['correoper']		= $laRow['correoper'];
			}
			$this->desconectar();
			return $laPersona;
		}

		public function listar_personas()
		{
			$laPersona = array();
			$cont = 0;
			$this->conectar();
			$sql = "SELECT * FROM tpersona ORDER BY apellidounoper, apellidodosper, nombreunoper, nombredosper ASC;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laPersona[$cont]['idtpersona']	= $laRow['idtpersona'];
				$laPersona[$cont]['nombreunoper']	= $laRow['nombreunoper'];
				$laPersona[$cont]['nombredosper']	= $laRow['nombredosper'];
				$laPersona[$cont]['apellidounoper']	= $laRow['apellidounoper'];
				$laPersona[$cont]['apellidodosper']	= $laRow['apellidodosper'];
				$laPersona[$cont]['fechanacimientoper']= $laRow['fechanacimientoper'];
				$laPersona[$cont]['direccionper']	= $laRow['direccionper'];
				$laPersona[$cont]['telefonoper']	= $laRow['telefonoper'];
				$laPersona[$cont]['correoper']		= $laRow['correoper'];
				$laPersona[$cont]['estatusper']		= $laRow['estatusper'];
				$cont++;
			}
			$this->desconectar();
			return $laPersona;
		}
			public function listar_personas_activas()
		{
			$this->conectar();
			$cont = 0;
			$sql = "SELECT idtpersona, nombreunoper, apellidounoper FROM tpersona WHERE estatusper=1";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$Fila[$cont]['idtpersona']	= $laRow['idtpersona'];
				$Fila[$cont]['nombreunoper']	= $laRow['nombreunoper'];
				$Fila[$cont]['nombredosper']	= $laRow['nombredosper'];
				$Fila[$cont]['apellidounoper']	= $laRow['apellidounoper'];
				$Fila[$cont]['apellidodosper']	= $laRow['apellidodosper'];
				$Fila[$cont]['fechanacimientoper']= $laRow['fechanacimientoper'];
				$Fila[$cont]['direccionper']	= $laRow['direccionper'];
				$Fila[$cont]['telefonoper']	= $laRow['telefonoper'];
				$Fila[$cont]['correoper']		= $laRow['correoper'];
				$Fila[$cont]['estatusper']		= $laRow['estatusper'];
				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}


		public function registrar_persona()
		{
			$this->conectar();
			$sql = "INSERT INTO `tpersona`
					(`idtpersona`, `nombreunoper`, `nombredosper`, `apellidounoper`
						, `apellidodosper`, `fechanacimientoper`, `direccionper`, `telefonoper`, `correoper`)
					VALUES
					('$this->lnIdtpersona', UPPER('$this->lcNombreuno'), UPPER('$this->lcNombredos'), UPPER('$this->lcApellidouno')
						,UPPER('$this->lcApellidodos'), ('$this->lcFechaNac'),UPPER('$this->lcDireccion'), '$this->lnTelefonoMovil', '$this->lcCorreo');";
			$lnHecho=$this->ejecutar($sql);







		$this->desconectar();
			return $lnHecho;


}
		public function desactivar_persona()
		{
			$this->conectar();
			$sql="UPDATE `tpersona` SET `estatusper`='0' WHERE idtpersona='$this->lnIdtpersona';";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_persona()
		{
			$this->conectar();
			$sql="UPDATE `tpersona` SET `estatusper`='1' WHERE idtpersona='$this->lnIdtpersona';";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_persona()
		{
			$this->conectar();
			$sql="UPDATE `tpersona` SET
					`nombreunoper`=UPPER('$this->lcNombreuno'),`nombredosper`=UPPER('$this->lcNombredos')
					,`apellidounoper`=UPPER('$this->lcApellidouno'),`apellidodosper`=UPPER('$this->lcApellidodos'), `fechanacimientoper`= ('$this->lcFechaNac'), `direccionper`=UPPER('$this->lcDireccion'), `telefonoper`='$this->lnTelefonoMovil'
					,`correoper`='$this->lcCorreo'
				  WHERE idtpersona = '$this->lnIdtpersona' ;";
			$lnHecho=$this->ejecutar($sql);

			$this->desconectar();
			return $lnHecho;
		}
	}
?>
