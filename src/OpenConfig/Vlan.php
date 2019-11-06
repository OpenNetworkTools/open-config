<?php
    namespace OpenNetworkTools\OpenConfig;

    class Vlan implements \OpenNetworkTools\Interfaces\OpenConfig\VlanInterface {

        private $description;
        private $id;
        private $irb;
        private $name;

        public function __construct($id, $name){
            $this->id   = $id;
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getDescription(){
            return $this->description;
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description){
            $this->description = $description;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getId(){
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id){
            $this->id = $id;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getIrb(){
            return $this->irb;
        }

        /**
         * @param mixed $irb
         */
        public function setIrb($irb, $config){
            $this->irb = $irb;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getName(){
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name){
            $this->name = $name;
            return $this;
        }

    }