<?php
	require_once('../nucleo/ModeloConect.php');
	class clsEjemplar extends ModeloConect

	{
		private $lnTEjemplar;
		private $lnIdcodigo;
		private $lnSerial;
		private $lcCantidad;
		private $lcDescripcion;
		private $lnfecha;
		private $lcStatus;		
		private $lnIdcondicion;
		private $lnidCatalogo;

		public function __construct(){
	    $this->lnTEjemplar= 0;
	    $this->lnIdcodigo = 0;
	    $this->lnSerial= 0;
	    $this->lcCantidad = 0;
	    $this->lcDescripcion= 0;
	    $this->lnfecha=0;
	    $this->lcStatus = true ;
	    $this->lnIdcondicion='';
	    $this->lnidCatalogo= '';	     
    }

		public function set_idejemplar($pnIdejemplar){
			$this->lnTEjemplar = $pnIdejemplar;
		}

		public function set_idcodigo($pnIdcodigo){
			$this->lnIdcodigo = $pnIdcodigo;
		}
	
		public function set_serial($pnSerial){
			$this->lnSerial = $pnSerial;
		}

		public function set_cantidad($pnCantidad){
			$this->lcCantidad = $pnCantidad;
		}
	
		public function set_descripcion($pcDescripcion){
			$this->lcDescripcion = $pcDescripcion;
		}

		public function set_fecha($pcFecha){
			$this->lnfecha = $pcFecha; 
		}
	
		public function set_status($pcstatus){
			$this->lcStatus = $pcstatus;
		}

		public function set_condicion($pccondicion){
			$this->lnIdcondicion	= $pccondicion;	
		}

		public function set_IdCatalogo($pccatalogo){
			$this->lnidCatalogo = $pccatalogo;
		}

		public function consultar_bien(){
			$this->conectar();
			$sql="SELECT idtcatalogo,numeroinvent,idtmarca,idtmodelo,idttipo,idtcategoria,idtsubcategoria,cantidadcat, estatusejemp FROM tcatalogo WHERE idtcatalogo='$this->lnTEjemplar'";
				$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql)){
				$Fila['idtejemplar']=$laRow['idtejemplar'];
				$Fila['idtcatalogo']=$laRow['idtcatalogo'];
				$Fila['numeroinvt']=$laRow['numeroinvt'];
				$fila['estatusejemp']=$laRow['estatusejemp'];
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

		function listar_ejemplar(){
			$this->conectar();
			$cont = 0;
			$sql = "SELECT tejemplar.idtejemplar, tejemplar.codigoejemp, tejemplar.serialejemp, tejemplar.cantidadejemp, tcondicion.nombrecond, tejemplar.descripcionejemp, tejemplar.fecharegistroejemp, tcatalogo.descripcioncat, tejemplar.estatusejemp FROM tejemplar, tcondicion, tcatalogo WHERE tejemplar.idtcondicion = tcondicion.idtcondicion AND tejemplar.idtcatalogo = tcatalogo.idtcatalogo";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql)){
				$laEjemplar[$cont]['idtejemplar']	= $laRow['idtejemplar'];
				$laEjemplar[$cont]['codigoejemp']	= $laRow['codigoejemp'];
				$laEjemplar[$cont]['serialejemp']	= $laRow['serialejemp'];
				$laEjemplar[$cont]['cantidadejemp']	= $laRow['cantidadejemp'];
				$laEjemplar[$cont]['descripcionejemp']	= $laRow['descripcionejemp'];
				$laEjemplar[$cont]['fecharegistroejemp']	= $laRow['fecharegistroejemp'];
				$laEjemplar[$cont]['nombrecond']	= $laRow['nombrecond'];
				$laEjemplar[$cont]['estatusejemp']	= $laRow['estatusejemp'];
				$laEjemplar[$cont]['descripcioncat']	= $laRow['descripcioncat'];				
				$cont++;
			}
			$this->desconectar();
			return $laEjemplar;
		}
		
		public function registrar_ejemplar(){
			$this->conectar();
			$fecha = date('Y-m-d');
			$sql ="INSERT INTO tejemplar
					(idtejemplar, codigoejemp ,serialejemp, cantidadejemp, descripcionejemp, fecharegistroejemp, estatusejemp ,idtcondicion, idtcatalogo)
					VALUES
				('$this->lnTEjemplar', '$this->lnIdcodigo', '$this->lnSerial', '$this->lcCantidad', UPPER('$this->lcDescripcion'),'$fecha', '$this->lcStatus', '$this->lnIdcondicion', '$this->lnidCatalogo' )";
			$lnHecho=$this->ejecutar($sql);
			// $id=mysql_insert_id();
			// $sql1= "UPDATE tejemplar SET idtejemplar='$this->lnId-$id' WHERE id='$id'";
			// $lnHechos=$this->ejecutar($sql1);
			$sql2= "UPDATE tcatalogo SET cantidadcat = cantidadcat+'$this->lcCantidad'  WHERE idtcatalogo='$this->lnidCatalogo'";
			$lnHechos=$this->ejecutar($sql2);
			#echo $lnHechos;			
			// echo $sql;
			// echo "<br>";
			// echo $this->lnId;
			// echo "<br>";
			// echo $sql1;
			// echo "<br>";
			// echo $sql2;
			$this->desconectar();
			return $lnHecho;
		}

		public function consultar_ejemplar(){

			$laEjemplar = array();
			$this->conectar();
			$sql = "SELECT * FROM tejemplar WHERE idtejemplar='$this->lnTEjemplar';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laEjemplar['idtejemplar']	= $laRow['idtejemplar'];
				$laEjemplar['codigoejemp']	= $laRow['codigoejemp'];
				$laEjemplar['serialejemp']		= $laRow['serialejemp'];
				$laEjemplar['cantidadejemp']		= $laRow['cantidadejemp'];
				$laEjemplar['descripcionejemp']		= $laRow['descripcionejemp'];

			}
			$this->desconectar();
			return $laEjemplar;
		}

		public function consultar_ejemplar_id()
		{
			$laEjemplar = array();
			$this->conectar();
			$sql = "SELECT * FROM tejemplar WHERE idtejemplar='$this->lnTEjemplar';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laEjemplar['idtejemplar']	= $laRow['idtejemplar'];
				$laEjemplar['serialejemp']		= $laRow['serialejemp'];
				$laEjemplar['estatusejemp']		= $laRow['estatusejemp'];
			}
			$this->desconectar();
			return $laEjemplar;
		}


		public function listar_estados(){
			$this->conectar();
			$cont=0;
			$sql="SELECT * FROM testado";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql)){
				$Fila[$cont]['idtestado']=$laRow['idtestado'];
				$Fila[$cont]['nombreestado']=$laRow['nombreestado'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}		

		public function consultar_codigo_ejem(){
			$laEjemplar = array();
			$this->conectar();
			$sql = "SELECT *FROM tejemplar WHERE serialejemp='$this->lnSerial';";
			$pcsql = $this->filtro($sql);
			while($laRow = $this->proximo($pcsql))
			{
				$laEjemplar['idtejemplar']	= $laRow['idtejemplar'];
				$laEjemplar['serialejemp']		= $laRow['serialejemp'];
			}
			$this->desconectar();
			return $laEjemplar;
		}

		public function desactivar_ejemplar(){
			$this->conectar();
			$sql="UPDATE `tejemplar` SET `estatusejemp`='0' WHERE idtejemplar='$this->lnTEjemplar';";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		public function activar_ejemplar(){
			$this->conectar();
			$sql="UPDATE `tejemplar` SET `estatusejemp`='1' WHERE idtejemplar='$this->lnTEjemplar';";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}

		public function editar_modulo(){
			$this->conectar();
			$sql="UPDATE tmodulo SET nombremod='$this->lcNombre' WHERE idtmodulo='$this->lcIdModulo' ";
			$lnHecho=$this->ejecutar($sql);
			$this->desconectar();
			return $lnHecho;
		}


		public function listar_departamentos(){
			$this->conectar();
			$cont=0;
			$sql="SELECT iddepartamento, denominacion FROM tdepartamento";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql)){
				$Fila[$cont]['iddepartamento']=$laRow['iddepartamento'];
				$Fila[$cont]['denominacion']=$laRow['denominacion'];

				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

		public function fechaNormal($fecha){
			$nfecha = date('d/m/Y',strtotime($fecha));
			return $nfecha;
		}
	}
?>
