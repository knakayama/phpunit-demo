<?php

class Triangle {
    private $_width;
    private $_height;

    public function __construct($width, $height) {
        if (!is_numeric($width) || !is_numeric($height)) {
            throw new illigalArgumentException('width or height is not numeric.', 10);
        }
        $this->_width  = $width;
        $this->_height = $height;
    }

    public function getArea() {
        return $this->_width * $this->_height / 2;
    }
}

class illigalArgumentException extends Exception {
}

