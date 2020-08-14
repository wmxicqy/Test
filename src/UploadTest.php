<?php

namespace Upload;

class UploadTest
{
    private $name = '';
    private $age = '';

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function handle()
    {
        return $this->name . '-' . $this->age;
    }
}