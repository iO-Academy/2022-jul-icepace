<?php

class User
{
    protected string $username;
    protected string $bio;
    protected string $avatar;

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
        $htmlOutput = '';
        return $htmlOutput;
    }
}