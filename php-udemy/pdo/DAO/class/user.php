<?php 

    class User {

        private $idUsuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        public function getUsuario (){
            return $this-> idUsuario;
        }
        public function setUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function getLogin (){
            return $this-> deslogin;
        }
        public function setLogin($deslogin){
            $this->deslogin = $deslogin;
        }
        
        public function getSenha (){
            return $this-> dessenha;
        }
        public function setSenha($dessenha){
            $this->dessenha = $dessenha;
        }

        public function getDtCadastro (){
            return $this-> dtcadastro;
        }
        public function setDtCadastro($dtcadastro){
            $this->dtcadastro = $dtcadastro;
        }

        public function loadById($id){
            $sql = new Sql();
            $res = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario= :ID", array(
                ":ID"=>$id
            ));

            if(isset($res[0])){
                $row = $res[0];
                $this->setUsuario($row['idusuario']);
                $this->setLogin($row['deslogin']);
                $this->setSenha($row['dessenha']);
                $this->setDtCadastro($row['dtcadastro']);
            }
        }

        public function search($login){
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH", array(
                ":SEARCH"=>"%".$login."%"
            ));
        }

        public function login($login, $password){
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
                ":LOGIN"=>$login,
                ":PASSWORD"=>$password
            ));

            if(isset($res[0])){
                $row = $res[0];
                $this->setUsuario($row['idusuario']);
                $this->setLogin($row['deslogin']);
                $this->setSenha($row['dessenha']);
                $this->setDtCadastro($row['dtcadastro']);
            }

            else{
                throw new Exception("Login e/ou senha inválidos");
            }
        }

        public function delete(){
            $sql = new Sql();
            $sql->query("DELETE FROM tb_usuarios Where idusuario= :ID", array(
                ':ID'=>$this->getUsuario()
            ));

            $this->setUsuario(0);
            $this->deslogin("");
            $this->dessenha("");
            $this->dtcadastro("");

        }

        //public static function getList(){
        //    $sql = new Sql();
        //    return $sql->select("SELECT * FROM tb_usuarios");
        //}

        public function __toString()
        {
            return json_encode(array(
                "idusuario"=>$this->getUsuario(),
                "deslogin"=>$this->getLogin(),
                "dessenha"=>$this->getSenha(),
                "dtcadastro"=>$this->getDtCadastro(),
            ));
        }

    }

?>