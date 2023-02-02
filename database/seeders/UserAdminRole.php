<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\TermsAndConditions;
use Illuminate\Support\Facades\Hash;


class UserAdminRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TermsAndConditions::create([
            'termsAndConditions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        User::create([
            'staff_fname' => 'Jayson',
            'staff_lname' => 'Conceicao',
            'staff_email' => 'jayson@xceedelectrical.com.au',
            'password' => Hash::make('Jayson123@'),
            'role' => 'admin'
        ]);
    }
}
