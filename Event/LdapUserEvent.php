<?php

namespace IMAG\LdapBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use IMAG\LdapBundle\User\LdapUserInterface;

class LdapUserEvent extends Event
{
    /**
     * @var LdapUserInterface
     */
    private $user;

    /**
     * @var TokenInterface
     */
    private $token;

    public function __construct(LdapUserInterface $user, TokenInterface $token)
    {
        $this->user = $user;
    }

    /**
     * @return LdapUserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param LdapUserInterface $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return TokenInterface
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param TokenInterface $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
