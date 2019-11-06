<?php
    namespace OpenNetworkTools\OpenConfig;

    class EtherOptions {

        private $ae;

        public function __construct(){
        }

        public function getAE(){
            return $this->ae;
        }

        public function setAE($id, $config){
            $this->ae = $id;
            return $this;
        }

    }