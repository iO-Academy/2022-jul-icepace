<?php

use Icepace\User;
use PHPUnit\Framework\TestCase;
require_once 'vendor/autoload.php';

class UserTest extends TestCase
{
    public function testSuccessCreateUserCardHtml1()
    {
        $user = new User(1,'fakeUsername', 'fakeHashedPass', 'fake bio', 'fakeAvatar.jpeg');
        $result = $user->createUserCardHtml();
        $expected = '<div class="userCard"><img class="avatarImg" src="fakeAvatar.jpeg" alt="Profile Picture"><p class="cardUsernameText">fakeUsername</p></div>';
        $this->assertEquals($expected, $result);
    }

    public function testSuccessCreateUserCardHtml2()
    {
        $user = new User(1, 5, 'fakeHashedPass', 'fake bio', 3);
        $result = $user->createUserCardHtml();
        $this->assertEquals('<div class="userCard"><img class="avatarImg" src="3" alt="Profile Picture"><p class="' . "cardUsernameText" . '">5</p></div>', $result);
    }
}
