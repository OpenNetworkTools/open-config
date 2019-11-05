<?php
    namespace OpenNetworkTools\OpenConfig;

    class System implements \OpenNetworkTools\Interfaces\OpenConfig\SystemInterface {

        private $hostname;

        public function __construct(){
        }

        public function getHostName(){
            return $this->hostname;
        }

        public function setHostName($hostname){
            $this->hostname = $hostname;
            return $this;
        }

    }