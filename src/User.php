<?php

namespace Icepace;
require_once 'vendor/autoload.php';

class User
{
    protected string $username;
    protected string $hashed_pass;
    protected string $bio;
    protected string $avatar;

    public function __construct(string $username, string $hashed_pass, string $bio, string $avatar)
    {
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
        return $this->avatar;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function createUserCardHtml(): string
    {
        $htmlOutput = '<div class="userCard">';
        $htmlOutput .= '<img class="avatarImg" src="' . $this->avatar . '" alt="Profile Picture">';
        $htmlOutput .= '<p class="cardUsernameText">' . $this->username . '</p>';
        $htmlOutput .= '</div>';
        return $htmlOutput;
    }
}
