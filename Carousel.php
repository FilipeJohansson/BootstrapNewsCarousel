<?php

class Carousel {
    public function __construct($image = NULL, $title = NULL, $desc = NULL) {
        $this->image = $image;
        $this->title = $title;
        $this->desc = $desc;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        if (property_exists($this, $name))
            return $this->$name;
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }
}
