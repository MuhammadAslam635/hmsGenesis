<?php

namespace App\Enums;

enum EmployeeRole: string
{
    case ADMIN = 'admin';
    case NURSE = 'nurse';
    case PHARMACIST = 'pharmacist';
    case TECHNICIAN = 'technician';

    public function labels(): string
    {
        return match ($this) {
            self::ADMIN => '👨‍💼 Administrator',
            self::NURSE => '👩‍⚕️ Nurse',
            self::PHARMACIST => '💊 Pharmacist',
            self::TECHNICIAN => '🔧 Technician',
        };
    }

    public function labelPowergridFilter(): string
    {
        return $this->labels();
    }
}
