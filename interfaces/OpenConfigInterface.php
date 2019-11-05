<?php
    namespace OpenNetworkTools\Interfaces;

    interface OpenConfigInterface {

        public function __construct();

        /**
         * @return \OpenNetworkTools\OpenConfig\System
         */
        public function getSystem();
    }