<?php
    class conexionBD{
        private $server ="localhost";
        private $user ="root";
        private $pass ="1010";
        private $bd ="agenda";
        public $idConexion = null;
        public $estado = "";
        public $msjError = "";
        public function conectar(){
            $this->idConexion = mysqli_connect($this->server,
                                                $this->user,
                                                $this->pass,
                                                $this->bd);
            if(mysqli_connect_errno()){
                $this->msjError = mysqli_connect_error();
                $this->estado = "0";
            }else{
                $this->estado = "1";
                $this->msjError = "";
            }
        }

        public function desconectar(){
            mysqli_close($this->idConexion);
            $this->estado = "0";
            $this->msjError = "";
        }
    }
?>