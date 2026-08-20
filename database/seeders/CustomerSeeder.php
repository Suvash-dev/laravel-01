<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'shourab',
                'email' => 'shourab.cit.bd@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ataur',
                'email' => 'ataur@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Suvash',
                'email' => 'ctgsuvas@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'foyjur',
                'email' => 'foyjurrafee99@gmail.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }
    }
}