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
        $expected = '<a class="profileLink" href="./userProfile.php?username=fakeUsername"><div class="userCard"><img class="avatarImg" src="./assets/imgs/avatars/fakeAvatar.jpeg" alt="Profile picture" /><p class="cardUsernameText">fakeUsername</p></div></a>';
        $this->assertEquals($expected, $result);
    }

    public function testSuccessGetSanitizedBio()
    {
        $user = new User(1,'fakeUsername', 'fakeHashedPass', 'Hello! <img src="https://media1.giphy.com/media/Vuw9m5wXviFIQ/200w.gif" />', 'fakeAvatar.jpeg');
        $result = $user->getSanitizedBio();
        $expected = 'Hello! ';
        $this->assertEquals($expected, $result);
    }

    public function testSuccessGetFullAvatarPath()
    {
        $user = new User(1,'fakeUsername', 'fakeHashedPass', 'fake bio', 'fakeAvatar.jpeg');
        $result = $user->getFullAvatarPath();
        $this->assertEquals("./assets/imgs/avatars/fakeAvatar.jpeg", $result);
    }
}
