<?php

namespace Tests;


use PHPUnit\Framework\TestCase;
use Upload\UploadTest;

class UploadTestTest extends TestCase
{

    public function testHandle()
    {
        $name = 'LiYueXi';
        $age = 20;
        $uploadTest = new UploadTest($name, $age);
        $this->assertSame($name . '-' . $age, $uploadTest->handle());

    }
}
