<?php
namespace Icepace;

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

    public function getHashedPass(): string
    {
        return $this->hashed_pass;
    }

    public function createUserCardHtml(): string
    {
        $htmlOutput = '';
        return $htmlOutput;
    }
}