<?php

namespace Icepace;

class User
{
    protected int $id;
    protected string $username;
    protected string $bio;
    protected string $avatar;
    protected string $hashed_pass;

    /**
     * This constructor is only to be used for unit testing purposes
     *
     * @param int $id example id for testing purposes
     * @param string $username example username for testing purposes
     * @param string $hashed_pass example hashed password for testing purposes
     * @param string $bio example bio for testing purposes
     * @param string $avatar example avatar for testing purposes
     */
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

    public function getFullAvatarPath(): string
    {
        return "./assets/imgs/avatars/" . $this->avatar;
    }

    public function getSanitizedBio(): string
    {
        $bioStripped = strip_tags($this->bio);
        return str_replace("\n", '<br />', $bioStripped);
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
        $htmlOutput = '<a class="profileLink" href="./userProfile.php?username=' . $this->getUsername() . '">';
        $htmlOutput .= '<div class="userCard">';
        $htmlOutput .= '<img class="avatarImg" src="' . $this->getFullAvatarPath() . '" alt="Profile picture" />';
        $htmlOutput .= '<p class="cardUsernameText">' . $this->username . '</p>';
        $htmlOutput .= '</div></a>';
        return $htmlOutput;
    }
}
