<?php

namespace App\Entity;

class UserRole
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * Get all possible role values.
     */
    public static function getAvailableRoles(): array
    {
        return [
            self::ROLE_USER,
            self::ROLE_ADMIN,
        ];
    }

    /**
     * Get the role label.
     *
     * @return string Role label
     */
    public static function label(string $role): string
    {
        return match ($role) {
            self::ROLE_USER => 'label.role_user',
            self::ROLE_ADMIN => 'label.role_admin',
            default => 'Nieznana rola',
        };
    }
}
