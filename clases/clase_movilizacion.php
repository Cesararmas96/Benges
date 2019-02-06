<?php
	/**
	* Clase asignatura
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/


	require_once('../nucleo/ModeloConect.php');
	class clsMovilizacion extends ModeloConect
	{
		private $lcSdEmisora;
		private $lcSdReceptora;
		private $lcDpEmisora;
		private $lcDpReceptora;
		private $lnIdtejemplar;
		private $lcObservacion;



		public function __construct()
		{

					$this->lcSdEmisora = 0;
	        $this->lcSdReceptora = 0;
	        $this->lcDpEmisora = 0;
	        $this->lcDpReceptora = 0;
					$this->lnIdtejemplar = '';
	        $this->lcObservacion = '';

    	}



			function set_SdEmisora($pcsdEmisora)
			{
				$this->lcSdEmisora=$pcsdEmisora;
			}

			function set_SdReceptora($pcsdReceptora)
			{
				$this->lcSdReceptora=$pcsdReceptora;
			}

		function set_DpEmisora($pcdpEmisora)
		{
			$this->lcDpEmisora=$pcdpEmisora;
		}

		function set_DpReceptora($pcdpReceptora)
		{
			$this->lcDpReceptora=$pcdpReceptora;
		}

		function set_Ejemplar($pnidtejemplar)
		{
			$this->lnIdtejemplar=$pnidtejemplar;
		}
		function set_Observacion($pnobservacion)
		{
			$this->lcObservacion=$pnobservacion;
		}



		function listar_movimientos()
		{
			$laMovimiento = array();
			$cont = 0;
			$this->conectar();
			$sql = "SELECT tdetallemovimiento.idtdetallemovimiento, tdetallemovimiento.sedeemi, tdetallemovimiento.sederece, tdetallemovimiento.depemimov, tdetallemovimiento.deprecepmov, tdetallemovimiento.desdemov, tdetallemovimiento.hastamov, tdetallemovimiento.fechamov, tdetallemovimiento.observacionmov, tdepartamento.denominacion,  concat(t3.denominacion) AS departamento, tmovimiento.nombremov, tejemplar.nombrejemp, tejemplar.idtejemplar FROM tdetallemovimiento, tmovimiento, tejemplar, tdepartamento INNER JOIN tdepartamento AS t3 WHERE tdetallemovimiento.idtmovimiento=tmovimiento.idtmovimiento AND tdetallemovimiento.id=tejemplar.id AND tdetallemovimiento.depemimov=tdepartamento.iddepartamento AND tdetallemovimiento.deprecepmov=t3.iddepartamento";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laMovimiento[$cont]['idtdetallemovimiento']	= $laRow['idtdetallemovimiento'];
				$laMovimiento[$cont]['sedeemi']	= $laRow['sedeemi'];
				$laMovimiento[$cont]['sederece']	= $laRow['sederece'];
				$laMovimiento[$cont]['denominacion']	= $laRow['denominacion'];
				$laMovimiento[$cont]['departamento']	= $laRow['departamento'];
				$laMovimiento[$cont]['desdemov']= $laRow['desdemov'];
				$laMovimiento[$cont]['hastamov']	= $laRow['hastamov'];
				$laMovimiento[$cont]['fechamov']	= $laRow['fechamov'];
				$laMovimiento[$cont]['observacionmov']		= $laRow['observacionmov'];
				$laMovimiento[$cont]['nombremov']		= $laRow['nombremov'];
				$laMovimiento[$cont]['nombrejemp']		= $laRow['nombrejemp'];
				$laMovimiento[$cont]['idtejemplar']		= $laRow['idtejemplar'];
				$cont++;
			}
			$this->desconectar();
			return $laMovimiento;
		}

		function listar_asignaturas()
		{
			$this->conectar();
			$Fila = array();
			$cont=0;
			$sql="SELECT * FROM tasignar";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idasignar']=$laRow['idasignar'];
				$Fila[$cont]['movilizacion']=$laRow['movilizacion'];
				$Fila[$cont]['dpEmisora']=$laRow['dpEmisora'];
				$Fila[$cont]['dpReceptora']=$laRow['dpReceptora'];
				$Fila[$cont]['clavecon']=$laRow['clavecon'];
				$Fila[$cont]['fecha']=$laRow['fecha'];

				$cont++;

			}
			$this->desconectar();
			return $Fila;
		}

		function listar_asignaturas_activas()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM tasignatura WHERE estatusasi='1'";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]['idasignatura']=$laRow['idasignatura'];
				$Fila[$cont]['codigoasi']=$laRow['codigoasi'];
				$Fila[$cont]['nombreasi']=$laRow['nombreasi'];
				$Fila[$cont]['descripcionasi']=$laRow['descripcionasi'];
				$Fila[$cont]['anoasi']=$laRow['anoasi'];
				$Fila[$cont]['unidad_creditoasi']=$laRow['unidad_creditoasi'];
				$Fila[$cont]['observacionasi']=$laRow['observacionasi'];
				$Fila[$cont]['horas_duracionasi']=$laRow['horas_duracionasi'];
				$Fila[$cont]['estatusasi']=$laRow['estatusasi'];
				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}


		function consultar_asignatura()
		{
			$this->conectar();
			$sql="SELECT * FROM tasignatura WHERE idasignatura='$this->lnIdAsignatura'";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila['idasignatura']=$laRow['idasignatura'];
				$Fila['codigoasi']=$laRow['codigoasi'];
				$Fila['nombreasi']=$laRow['nombreasi'];
				$Fila['descripcionasi']=$laRow['descripcionasi'];
				$Fila['anoasi']=$laRow['anoasi'];
				$Fila['unidad_creditoasi']=$laRow['unidad_creditoasi'];
				$Fila['observacionasi']=$laRow['observacionasi'];
				$Fila['horas_duracionasi']=$laRow['horas_duracionasi'];
				$Fila['estatuasi']=$laRow['estatuasi'];
			}
			$this->desconectar();
			return $Fila;
		}


		function registrar_traspaso()
		{
			$this->conectar();
			$sql="INSERT INTO tdetallemovimiento (`sedeemi`,`sederece`,`depemimov`,`deprecepmov`,`observacionmov`,`idtmovimiento`,`id`)
				VALUES
				('$this->lcSdEmisora','$this->lcSdReceptora','$this->lcDpEmisora','$this->lcDpReceptora','$this->lcObservacion','1','$this->lnIdtejemplar')";
			$lnHecho=$this->ejecutar($sql);
			$sql1="UPDATE tejemplar SET idsede='$this->lcSdReceptora', iddepartamento='$this->lcDpReceptora' WHERE id='$this->lnIdtejemplar'";
			$lnHechos=$this->ejecutar($sql1);
			echo $sql;
			echo "<br>";
			echo $sql1;

			$this->desconectar();
			return $lnHechos;
		}

		function desactivar_asignatura()
		{
			$this->conectar();
			$sql="UPDATE tasignatura SET estatusasi='0' WHERE idasignatura='$this->lnIdAsignatura' ";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		function activar_asignatura()
		{
			$this->conectar();
			$sql="UPDATE tasignatura SET estatusasi='1' WHERE idasignatura='$this->lnIdAsignatura' ";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		function editar_asignatura()
		{
			$this->conectar();
			$sql="UPDATE tasignatura SET
					codigoasi='$this->lcCodigo',nombreasi='$this->lcNombre',descripcionasi='$this->lcDescripcion',
					anoasi='$this->lnAno',unidad_creditoasi='$this->lnUnidad',observacionasi='$this->lcObservacion
					',horas_duracionasi='$this->lnHoras'
					WHERE idasignatura='$this->lnIdAsignatura' ";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		//ESTA FUNCIÓN DEBE PERTENECER A LA CLASE EL PROFESOR, TRASLADAR UNA VEZ SE HAGA LA CLASE PROFESOR




	}
?>
