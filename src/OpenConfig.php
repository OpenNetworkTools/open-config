<?php
    namespace OpenNetworkTools;

    class OpenConfig implements \OpenNetworkTools\Interfaces\OpenConfigInterface {

        private $system;

        public function __construct(){
            $this->system = new \OpenNetworkTools\OpenConfig\System();
        }

        public function getSystem(){
            return $this->system;
        }

    }