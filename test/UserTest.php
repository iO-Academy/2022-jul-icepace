<?php
namespace Icepace\Test;
require_once '../vendor/autoload.php';
use Icepace\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSuccessCreateUserCardHtml1()
    {
        $user = new User(1,'fakeUsername', 'fakeHashedPass', 'fake bio', 'fakeAvatar.jpeg');
        $result = $user->createUserCardHtml();
        $this->assertEquals('<div class="userCard"><img class="avatarImg" src="./assets/imgs/avatars/placeholder.jpg" alt="Profile Picture"><p class="' . "cardUsernameText" . '">fakeUsername</p></div>', $result);
    }
}
