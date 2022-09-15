<?php

require_once "../vendor/autoload.php";
use Icepace\UserCreator;
use PHPUnit\Framework\TestCase;

class UserCreatorTest extends TestCase
{
    public function testSuccessSanitiseUsername()
    {
        $input = 'gary ';
        $expectedOutput = 'gary';
        $actualOutput = UserCreator::sanitiseUsername($input);
        $this::assertEquals($expectedOutput,$actualOutput);
    }
}
