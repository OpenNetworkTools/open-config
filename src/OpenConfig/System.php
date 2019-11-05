<?php
    namespace OpenNetworkTools\OpenConfig;

    class System implements \OpenNetworkTools\Interfaces\OpenConfig\SystemInterface {

        private $hostname;

        public function __construct(){
        }

        public function getHostname(){
            return $this->hostname;
        }

        public function setHostname($hostname){
            $this->hostname = $hostname;
            return $this;
        }

    }