<?php

namespace Icepace;

class User
{
    protected int $id;
    protected string $username;
    protected string $bio;
    protected string $avatar;

    public function __construct(int $id = 0, string $username = '', string $hashed_pass = '', string $bio = '', string $avatar = '')
    {
        $this->id = $id;
        $this->username = $username;
        $this->avatar = $avatar;
        $this->bio = $bio;
        $this->hashed_pass = $hashed_pass;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getAvatar(): string
    {
        return "./assets/imgs/avatars/" . $this->avatar;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function createUserCardHtml(): string
    {
        $htmlOutput = '<a href="./userProfile.php?username=' . $this->getUsername() . '">';
        $htmlOutput .= '<div class="userCard">';
        $htmlOutput .= '<img class="avatarImg" src="' . $this->avatar . '" alt="Profile Picture">';
        $htmlOutput .= '<p class="cardUsernameText">' . $this->username . '</p>';
        $htmlOutput .= '</div>';
        return $htmlOutput;
    }
}
