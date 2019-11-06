<?php
    namespace OpenNetworkTools;

    class OpenConfig implements \OpenNetworkTools\Interfaces\OpenConfigInterface {

        private $interfaces;
        private $system;
        private $vlans;

        public function __construct(){
            $this->system = new \OpenNetworkTools\OpenConfig\System();
        }

        public function addInterface($name){
            $this->interfaces[$name] = new \OpenNetworkTools\OpenConfig\Interfaces($name);
            return $this->interfaces[$name];
        }

        public function getSystem(){
            return $this->system;
        }

        /**
         * @param $id
         * @param null $name
         * @return \OpenNetworkTools\OpenConfig\Vlan
         */
        public function addVlan($id, $name = null){
            if(is_null($name)) $name = "VLAN_".$id;
            $this->vlans[$name] = new \OpenNetworkTools\OpenConfig\Vlan($id, $name);
            return $this->vlans[$name];
        }

        /**
         * @param $name
         * @return \OpenNetworkTools\OpenConfig\Vlan
         */
        public function getVlan($name){
            return $this->vlans[$name];
        }

    }