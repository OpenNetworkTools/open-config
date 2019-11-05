<?php
    class OpenConfigSystemTests extends \PHPUnit\Framework\TestCase {

        public function testOpenConfigSystem_instanceOf(){
            $system = new \OpenNetworkTools\OpenConfig\System();
            $this->assertInstanceOf(\OpenNetworkTools\OpenConfig\System::class, $system);
        }

        public function testOpenConfigSystem_construct(){
            $system = new \OpenNetworkTools\OpenConfig\System();
            $this->assertEquals(new \OpenNetworkTools\OpenConfig\System(), $system);
        }

        public function testOpenConfigSystem_setHostnameString(){
            $config = new \OpenNetworkTools\OpenConfig();
            $config->getSystem()->setHostname("test");
            $this->assertEquals("test", $config->getSystem()->getHostname());
        }

    }