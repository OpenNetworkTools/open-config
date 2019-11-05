<?php
    class OpenConfigTests extends \PHPUnit\Framework\TestCase {

        public function testOpenConfig_instanceOf(){
            $config = new \OpenNetworkTools\OpenConfig();
            $this->assertInstanceOf(\OpenNetworkTools\OpenConfig::class, $config);
        }

        public function testOpenConfig_construct(){
            $config = new \OpenNetworkTools\OpenConfig();
            $this->assertEquals(new \OpenNetworkTools\OpenConfig(), $config);
        }

    }