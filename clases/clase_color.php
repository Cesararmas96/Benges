<?php
	/**
	* Clase estudiante 
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	require_once('../nucleo/ModeloConect.php');
	class clsColor extends ModeloConect
	{
		
		private $lnTColor;
		private $lcNombre;
		private $llEstatus;

		public function __construct() 
		{
	        $this->lnTColor = 0;
	        $this->lcNombre ='';
	        $this->llEstatus = true;
    	}
		
		public function set_Color($pnTColor)
		{
			$this->lnTColor = $pnTColor;
		}

		public function set_Nombre($pcNombre)
		{
			$this->lcNombre = $pcNombre;
		}

		public function set_Estatus($plEstatus)
		{
			$this->llEstatus = $plEstatus;
		}

		public function consultar_color()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT * FROM tcolor WHERE idtcolor='$this->lnTColor';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtcolor']	= $laRow['idtcolor'];
				$laTipo['nombrecol']		= $laRow['nombrecol'];
				$laTipo['estatuscol']		= $laRow['estatuscol'];
			}
			$this->desconectar();
			return $laTipo;
		}

		public function consultar_color_id()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT * FROM tcolor WHERE idtcolor='$this->lnMarca';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtcolor']	= $laRow['idtcolor'];
				$laTipo['nombrecol']		= $laRow['nombrecol'];
				$latipo['estatuscol']		= $laRow['estatuscol'];
			}
			$this->desconectar();
			return $laTipo;
		}

		public function consultar_color_nom()
		{
			$laTipo = array();
			$this->conectar();
			$sql = "SELECT *FROM tcolor WHERE nombrecol='$this->lcNombre';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo['idtcolor']	= $laRow['idtcolor'];
				$laTipo['nombrecol']		= $laRow['nombrecol'];
			}
			$this->desconectar();
			return $laTipo;
		}
		public function listar_color()
		{
			$laTipo = array();
			$cont = 0;
			$this->conectar();
			$sql = "SELECT * FROM tcolor ORDER BY nombrecol ASC;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laTipo[$cont]['idtcolor']	= $laRow['idtcolor'];
				$laTipo[$cont]['nombrecol']		= $laRow['nombrecol'];
				$laTipo[$cont]['estatuscol']		= $laRow['estatuscol'];
				$cont++;
			}
			$this->desconectar();
			return $laTipo;
		}

		public function registrar_color()
		{
			$this->conectar();
			$sql = "INSERT INTO `tcolor` 
					(`nombrecol`) 
					VALUES 
					(UPPER('$this->lcNombre'));";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function desactivar_color()
		{
			$this->conectar();
			$sql="UPDATE `tcolor` SET `estatuscol`='0' WHERE idtcolor='$this->lnTColor';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_color()
		{
			$this->conectar();
			$sql="UPDATE `tcolor` SET `estatuscol`='1' WHERE idtcolor='$this->lnTColor';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_color()
		{
			$this->conectar();
			$sql="UPDATE `tcolor` SET 
					`nombrecol`= UPPER('$this->lcNombre') 
				  WHERE idtcolor = '$this->lnTColor' ;";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		function listar_color_activas()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT idtcolor, nombrecol FROM tcolor WHERE estatuscol=1";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idtcolor']=$laRow['idtcolor'];
				$Fila[$cont]['nombrecol']=$laRow['nombrecol'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}
	}
?>