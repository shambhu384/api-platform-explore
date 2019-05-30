<?php

namespace App\Validator;

use App\Entity\User;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

final class ComplexGroupsGenerator
{
    private $authorizationChecker;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }

    public function __invoke(User $user): array
    {
        return ['user-write', 'admin-write'];
    }
}
