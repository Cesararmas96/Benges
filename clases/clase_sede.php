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
	class clsSede extends ModeloConect
           
	{
		private $lnTsede;
		private $lcNombre;
		private $llEstatus;


		public function __construct() 
		{
	        $this->lnTsede =0 ;
	        $this->lcNombre = '';
	        $this->llEstatus = true;
    	}
		
		public function set_Sede($pnTsede)
		{
			$this->lnTsede = $pnTsede;
		}

		public function set_Nombre($pcNombre)
		{
			$this->lcNombre = $pcNombre;
		}

		public function set_Estatus($plEstatus)
		{
			$this->llEstatus = $plEstatus;
		}


		public function consultar_sede()
		{
			$laSede = array();
			$this->conectar();
			$sql = "SELECT * FROM tsede WHERE idsede='$this->lnTsede';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laSede['idsede']	= $laRow['idsede'];
				$laSede['nombresede']		= $laRow['nombresede'];
				$laSede['estatussed']		= $laRow['estatussed'];
			}
			$this->desconectar();
			return $laSede;
		}

		public function listar_sede()
		{
			$laSede = array();
			$cont = 0;
			$this->conectar();
			$sql = "SELECT * FROM tsede ORDER BY nombresede ASC ;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laSede[$cont]['idsede']	= $laRow['idsede'];
				$laSede[$cont]['nombresede']	= $laRow['nombresede'];
				$laSede[$cont]['estatussed']   = $laRow['estatussed'];
				$cont++;
			}
			$this->desconectar();
			return $laSede;
		}
		public function consultar_sede_nom()
		{
			$laSede= array();
			$this->conectar();
			$sql = "SELECT *FROM tsede WHERE idsede='$this->lnTsede'";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laSede['idsede']	= $laRow['idsede'];
				$laSede['nombresede']		= $laRow['nombresede'];
			}
			$this->desconectar();
			return $laSede;
		}

		function listar_sedes_activas()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM tsede WHERE estatussed=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idsede']=$laRow['idsede'];
				$Fila[$cont]['nombresede']=$laRow['nombresede'];
				$Fila[$cont]['estatussed']=$laRow['estatussed'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

		public function consultar_sede_id()
		{
			$laSede = array();
			$this->conectar();
			$sql = "SELECT * FROM tsede WHERE idsede='$this->lnSede';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laSede['idsede']	= $laRow['idsede'];
				$laSede['nombresede']		= $laRow['nombresede'];
				$laSede['estatussed']		= $laRow['estatussed'];
			}
			$this->desconectar();
			return $laSede;
		}


		public function desactivar_sede()
		{
			$this->conectar();
			$sql="UPDATE `tsede` SET `estatussed`='0' WHERE idsede='$this->lnTsede';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

			
		public function registrar_sede()
		{
			$this->conectar();
			$sql ="INSERT INTO `tsede` (`idsede`, `nombresede`) VALUES 
			('$this->lnTsede', UPPER('$this->lcNombre'));";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_sede(){

			$this->conectar();
			$sql="UPDATE `tsede` SET `estatussed`='1' WHERE idsede='$this->lnTsede';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}	

		public function editar_sede()
		{
			$this->conectar();
			$sql="UPDATE `tsede` SET 
					`nombresede`= UPPER('$this->lcNombre') 
				  WHERE idsede = '$this->lnTsede' ;";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		

		
	}
?>
