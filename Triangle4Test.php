<?php

require_once 'Triangle.class.php';

class Triangle4Test extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException illigalArgumentException
     * @expectedExceptionMessage Argument width or height are not numeric
     * @expectedExceptionCode 10
     */
    public function testArea() {
        $t = new Triangle('test', 10);
    }
}

