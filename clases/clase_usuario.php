<?php
	/**
	* Clase usuario
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/require_once('../nucleo/ModeloConect.php');

	class clsUsuario extends ModeloConect
	{
		private $lcUsuario;
		private $lcClave;
		private $lcPregunta;
		private $lcRespuesta;
		private $lsEstatus;
		private $lnIdRol;
		private $lnIdPersona;


		function set_Usuario($pcUsuario)
		{
			$this->lcUsuario=$pcUsuario;
		}

		function set_Clave($pcClave)
		{
			$this->lcClave=$pcClave;
		}
		function set_Pregunta($pcPregunta)
		{
			$this->lcPregunta=$pcPregunta;
		}
		function set_Respuesta($pcRespuesta)
		{
			$this->lcRespuesta=$pcRespuesta;
		}
		function set_Estatus($psEstatus)
		{
			$this->lsEstatus=$psEstatus;
		}


		function set_Rol($pcIdRol)
		{
			$this->lnIdRol=$pcIdRol;
		}

		function set_Persona($pnIdPersona)
		{
			$this->lnIdPersona=$pnIdPersona;
		}

		function consultar()
		{

			$this->conectar();
			$Fila = array();
			$sql="SELECT * FROM tusuario WHERE idtusuario='$this->lcUsuario' ";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila[0]=$laRow['idtusuario'];
				$Fila[1]=$laRow['claveusu'];
				$Fila[2]=$laRow['preguntausu'];
				$Fila[3]=$laRow['respuestausu'];
				$Fila[4]=$laRow['estatususu'];
				$Fila[5]=$laRow['trol_idtrol'];
				$Fila[6]=$laRow['tpersona_idtpersona'];
			}
			$this->desconectar();
			return $Fila;
		}
			public function consultar_usuario()
		{
			$laUsuario = array();
			$this->conectar();
			$sql = "SELECT * FROM tusuario WHERE idtusuario='$this->lcUsuario';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laUsuario['idtusuario']	= $laRow['idtusuario'];
				$laUsuario['claveusu']		= $laRow['claveusu'];
				$laUsuario['preguntausu']		= $laRow['preguntausu'];
				$laUsuario['respuestausu']		= $laRow['respuestausu'];
				$laUsuario['estatususu']		= $laRow['estatususu'];
				$laUsuario['trol_idtrol']		= $laRow['trol_idtrol'];
				$laUsuario['tpersona_idtpersona']		= $laRow['tpersona_idtpersona'];
			}
			$this->desconectar();
			return $laUsuario;
		}

		public function listar_usuario()
		{

			//select m.idproyecto,e.nombre_proyecto FROM t_proyecto as m inner join t_proyecto as e on (m.idproyecto=e.idproyecto) where idproyecto like '%".$this->aa_Form['valor']."%'";  AND 't1.idtpersona'='t3.idtpersona'
			$laUsuario = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT t1.idtusuario, t1.idtusuario, preguntausu, respuestausu, tpersona_idtpersona, estatususu, concat(t3.nombreunoper,' ', t3.apellidounoper) AS nomyape, t2.nombrerol
				   FROM tusuario AS t1 INNER JOIN trol AS t2 ON (t1.trol_idtrol=t2.idtrol)
				   INNER JOIN tpersona AS t3 ON (t1.tpersona_idtpersona=t3.idtpersona) ORDER BY nomyape ASC;";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laUsuario[$cont]['idtusuario']	= $laRow['idtusuario'];
				$laUsuario[$cont]['preguntausu']	= $laRow['preguntausu'];
				$laUsuario[$cont]['respuestausu']	= $laRow['respuestausu'];
				$laUsuario[$cont]['estatususu']	= $laRow['estatususu'];
				$laUsuario[$cont]['nomyape']	= $laRow['nomyape'];
				$laUsuario[$cont]['nombrerol']	= $laRow['nombrerol'];
				$laUsuario[$cont]['tpersona_idtpersona']	= $laRow['tpersona_idtpersona'];

				$cont++;
			}
			$this->desconectar();
			return $laUsuario;
		}
		public function consultar_usuario_nom()
		{
			$laUsuario = array();
			$this->conectar();
			$sql = "SELECT *FROM tusuario WHERE tpersona_idtpersona='$this->lnIdPersona';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{

				$laUsuario['idtusuario']	= $laRow['idtusuario'];
				$laUsuario['claveusu']		= $laRow['claveusu'];
				$laUsuario['preguntausu']		= $laRow['preguntausu'];
				$laUsuario['respuestausu']		= $laRow['respuestausu'];
				$laUsuario['estatususu']		= $laRow['estatususu'];
				$laUsuario['trol_idtrol']		= $laRow['trol_idtrol'];
				$laUsuario['tpersona_idtpersona']		= $laRow['tpersona_idtpersona'];
			}
			$this->desconectar();
			return $laUsuario;
		}
		function registrar_usuario()
		{
			$this->conectar();
			$this->Password= MD5($this->lcClave);
			$sql = "INSERT INTO tusuario(idtusuario,claveusu,preguntausu,respuestausu,trol_idtrol,tpersona_idtpersona) values('$this->lnIdPersona','".$this->Password."','$this->lcPregunta','$this->lcRespuesta', '$this->lnIdRol', '$this->lnIdPersona')";
				$lnHecho=$this->ejecutar($sql);
				echo $sql;
				$this->desconectar();
				return $lnHecho;
		}
		function login()
		{
			$clave= md5($this->lcClave);
			$this->conectar();
			$Fila[0]=0;
			$sql="SELECT idtusuario,nombrerol,idtrol,idtpersona, nombreunoper, apellidounoper, estatususu FROM tusuario,trol,tpersona WHERE idtusuario='$this->lcUsuario'  AND tpersona_idtpersona=idtpersona AND claveusu=md5('$this->lcClave') AND trol_idtrol=idtrol";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila[0]=$laRow['idtusuario'];
				$Fila[1]=$laRow['estatususu'];
				$Fila[2]=$laRow['nombrerol'];
				$Fila[3]=$laRow['idtrol'];
				$Fila[4]=$laRow['idtpersona'];
				$Fila[5]=$laRow['nombreunoper'];
				$Fila[6]=$laRow['apellidounoper'];
			}
			$this->desconectar();
			return $Fila;
		}

		public function desactivar_usuario()
		{
			$this->conectar();
			$sql="UPDATE tusuario SET `estatususu`='0' WHERE tpersona_idtpersona='$this->lcUsuario'";
			$lnHecho=$this->ejecutar($sql);
			echo $sql;
			$this->desconectar();
			return $lnHecho;
		}
		public function desactivar_usuarios()
		{
			$this->conectar();
			$sql="UPDATE `tusuario` SET `estatususu`='0' WHERE idtusuario='$this->lcUsuario'";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}
			public function activar_usuario()
		{
			$this->conectar();
			$sql="UPDATE `tusuario` SET `estatususu`='1' WHERE tpersona_idtpersona='$this->lcUsuario'";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_usuario()
		{
			$this->conectar();
			$sql="UPDATE tusuario SET
					preguntausu=('$this->lcPregunta'), respuestausu=('$this->lcRespuesta'), trol_idtrol=('$this->lnIdRol')
				  WHERE idtusuario='$this->lcUsuario'";
			$lnHecho=$this->ejecutar($sql);
			echo $sql;
			$this->desconectar();
			return $lnHecho;
		}


		public function listar_usuario_activos()
		{

			//select m.idproyecto,e.nombre_proyecto FROM t_proyecto as m inner join t_proyecto as e on (m.idproyecto=e.idproyecto) where idproyecto like '%".$this->aa_Form['valor']."%'";  AND 't1.idtpersona'='t3.idtpersona'
			$laUsuario = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT t1.idtusuario, t1.idtusuario, preguntausu, respuestausu, tpersona_idtpersona, estatususu, concat(t3.nombreunoper,' ', t3.apellidounoper) AS nomyape, t2.nombrerol
				   FROM tusuario AS t1 INNER JOIN trol AS t2 ON (t1.trol_idtrol=t2.idtrol)
				   INNER JOIN tpersona AS t3 ON (t1.tpersona_idtpersona=t3.idtpersona) WHERE estatususu=1";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laUsuario[$cont]['idtusuario']	= $laRow['idtusuario'];
				$laUsuario[$cont]['preguntausu']	= $laRow['preguntausu'];
				$laUsuario[$cont]['respuestausu']	= $laRow['respuestausu'];
				$laUsuario[$cont]['estatususu']	= $laRow['estatususu'];
				$laUsuario[$cont]['nomyape']	= $laRow['nomyape'];
				$laUsuario[$cont]['nombrerol']	= $laRow['nombrerol'];
				$laUsuario[$cont]['tpersona_idtpersona']	= $laRow['tpersona_idtpersona'];

				$cont++;
			}
			$this->desconectar();
			return $laUsuario;
		}

		public function listar_usuario_desactivados()
		{

			//select m.idproyecto,e.nombre_proyecto FROM t_proyecto as m inner join t_proyecto as e on (m.idproyecto=e.idproyecto) where idproyecto like '%".$this->aa_Form['valor']."%'";  AND 't1.idtpersona'='t3.idtpersona'
			$laUsuario = array();
			$cont = 0;
			$this->conectar();

			$sql ="SELECT t1.idtusuario, t1.idtusuario, preguntausu, respuestausu, tpersona_idtpersona, estatususu, concat(t3.nombreunoper,' ', t3.apellidounoper) AS nomyape, t2.nombrerol
				   FROM tusuario AS t1 INNER JOIN trol AS t2 ON (t1.trol_idtrol=t2.idtrol)
				   INNER JOIN tpersona AS t3 ON (t1.tpersona_idtpersona=t3.idtpersona) WHERE estatususu = 0";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laUsuario[$cont]['idtusuario']	= $laRow['idtusuario'];
				$laUsuario[$cont]['preguntausu']	= $laRow['preguntausu'];
				$laUsuario[$cont]['respuestausu']	= $laRow['respuestausu'];
				$laUsuario[$cont]['estatususu']	= $laRow['estatususu'];
				$laUsuario[$cont]['nomyape']	= $laRow['nomyape'];
				$laUsuario[$cont]['nombrerol']	= $laRow['nombrerol'];
				$laUsuario[$cont]['tpersona_idtpersona']	= $laRow['tpersona_idtpersona'];

				$cont++;
			}
			$this->desconectar();
			return $laUsuario;
		}

		// public function listar_usuario2()
		// {

			
		// 	$laUsuario = array();
		// 	$cont = 0;
		// 	$this->conectar();

		// 	$sql="SELECT t1.idtusuario, t1.idtusuario, preguntausu, respuestausu, tpersona_idtpersona, estatususu, concat(t3.nombreunoper,' ', t3.apellidounoper) AS nomyape, t2.nombrerol FROM tusuario AS t1 INNER JOIN trol AS t2 ON (t1.trol_idtrol=t2.idtrol) INNER JOIN tpersona AS t3 ON (t1.tpersona_idtpersona=t3.idtpersona) WHERE tpersona_idtpersona='$this->lcUsuario'";
		// 	$pcsql = $this->filtro($sql);
		// 	while($laRow = $this->proximo($pcsql))
		// 	{
		// 		$laUsuario[$cont]['nombrerol']	= $laRow['nombrerol'];

				
		// 		$cont++;
		// 	}
		// 	$this->desconectar();
		// 	return $laUsuario;
		// }


		public function listar_rol(){
			$laUsuario = array();
			$cont = 0;
			$this->conectar();

			$sql="SELECT idtusuario, nombrerol, nombreser FROM tusuario, trol_has_tservicio INNER JOIN trol ON (trol_has_tservicio.trol_idtrol = trol.idtrol) INNER JOIN tservicio ON (trol_has_tservicio.tservicio_idtservicio = tservicio.idtservicio) WHERE idtusuario='$this->lcUsuario'";
			
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laUsuario[$cont]['idtusuario']	= $laRow['idtusuario'];				
				$cont++;
			}
			$this->desconectar();
			return $laUsuario;
		}
		

	
	}
?>




