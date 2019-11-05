<?php
    class OpenConfigSystemTests extends \PHPUnit\Framework\TestCase {

        public function testOpenConfigSystem_instanceOf(){
            $system = new \OpenNetworkTools\OpenConfig\System();
            $this->assertInstanceOf(\OpenNetworkTools\OpenConfig\System::class, $system);
        }

    }