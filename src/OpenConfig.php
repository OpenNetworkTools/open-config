<?php
    namespace OpenNetworkTools;

    class OpenConfig implements \OpenNetworkTools\Interfaces\OpenConfigInterface {

        private $system;

        public function __construct(){
        }

        public function getSystem(){
            return $this->system;
        }

    }