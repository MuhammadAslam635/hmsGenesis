<?php

namespace App\Enums;

enum RoleType: string
{
    case SUPERADMIN = 'superadmin';
    case ADMIN = 'admin';
    case DOCTOR = 'doctor';
    case STAFF = 'staff';
    case PHARMACIST = 'pharmacist';
    case TECHNICIAN = 'technician';
    case USER = 'user';
    case EMPLOYEE = 'employee';

    /**
     * Get the description of the role type.
     *
     * @return string
     */
    public function description(): string
    {
        return match($this)
        {
            self::SUPERADMIN => 'Super Administrator',
            self::ADMIN => 'Administrator',
            self::DOCTOR => 'Doctor',
            self::STAFF => 'Staff',
            self::PHARMACIST => 'Pharmacist',
            self::TECHNICIAN => 'Technician',
            self::USER => 'User',
            self::EMPLOYEE => 'Employee',
        };
    }

    /**
     * Get all role types as an array.
     *
     * @return array
     */
    public static function getAll(): array
    {
        return [
            self::SUPERADMIN->value => self::SUPERADMIN->description(),
            self::ADMIN->value => self::ADMIN->description(),
            self::DOCTOR->value => self::DOCTOR->description(),
            self::STAFF->value => self::STAFF->description(),
            self::PHARMACIST->value => self::PHARMACIST->description(),
            self::TECHNICIAN->value => self::TECHNICIAN->description(),
            self::USER->value => self::USER->description(),
            self::EMPLOYEE->value => self::EMPLOYEE->description(),
        ];
    }
}
