<?php

declare(strict_types=1);

namespace App\Users\Domain\Factory;

use App\Users\Domain\Entity\User;
use App\Users\Domain\Service\UserPasswordHasherInterface;

class UserFactory
{
//    public function __construct(private UserPasswordHasherInterface $passwordHasher)
//    {
//    }

    public function create(string $email, string $password): User
    {
        return new User($email, $password);

    //    $user = new User($email);
    //    $user->setPassword($password, $this->passwordHasher);
    //
    //    return $user;
    }
}