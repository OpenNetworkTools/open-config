<?php
    namespace OpenNetworkTools\Interfaces\OpenConfig;

    interface SystemInterface {

        public function __construct();

        /**
         * @return string
         */
        public function getHostname();

        /**
         * @param string $hostname
         * @return \OpenNetworkTools\OpenConfig\System
         */
        public function setHostname($hostname);

    }