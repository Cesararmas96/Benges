<?php
include_once ('../nucleo/m_bd.php');
class MOD_Recuperar extends bd
{
	
	function Buscar($Usuario)
	#Consulta para ver si la pregunta si concuerda con la respuesta
	{
		$this->Usuario = $Usuario;
		$Consulta = $this->conexion->query("SELECT idtusuario, preguntausu FROM tusuario WHERE idtusuario='".$this->Usuario."'");
		if(mysqli_num_rows($Consulta)>0)
		{
			$Busqueda = mysqli_fetch_array($Consulta);
			$Pregunta = $Busqueda["preguntausu"];
			$Array = array('Pregunta' =>$Pregunta);
			$JSON = json_encode($Array);
			echo $JSON;
		}
		else
		{
			echo "Usuario invalido";
		}
	}

	function Validar($Usuario,$Respuesta)
	{
		$this->Usuario = $Usuario;
		$this->Respuesta = $Respuesta;
		$Consulta = $this->conexion->query("SELECT idtusuario, respuestausu FROM tusuario WHERE idtusuario='".$this->Usuario."' AND respuestausu='".$this->Respuesta."'");
		if (mysqli_num_rows($Consulta)>0)
		{
			echo "Valido respuestas";
		}
		else
		{
			echo "Respuesta Incorrecta";
		}
	}
	function CambiarContra($Usuario,$Pass)
	#Si es igual, Cambiar la contraseña
	{
		$this->Password = md5($Pass);
		$this->Usuario = $Usuario;
		$this->Usuario = $Usuario;
		$this->conexion->query("UPDATE tusuario SET claveusu='".$this->Password."' WHERE idtusuario='".$this->Usuario."'");
		echo "Exito al cambiar contraseña";
	}
}
?>