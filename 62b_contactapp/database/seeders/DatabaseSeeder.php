<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 users
        \App\Models\User::factory(10)->create();

        // Create specific admin user
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        // Create companies
        \App\Models\Company::create([
            'name' => 'Tech Solutions Inc',
            'email' => 'contact@techsolutions.com',
            'address' => '123 Silicon Valley, CA 94025',
            'company_id' => 1,
        ]);

        \App\Models\Company::create([
            'name' => 'Global Enterprises Ltd',
            'email' => 'info@globalenterprises.com',
            'address' => '456 Business Park, NY 10001',
            'company_id' => 1,
        ]);

        \App\Models\Company::create([
            'name' => 'Innovation Labs',
            'email' => 'hello@innovationlabs.com',
            'address' => '789 Startup Street, TX 78701',
            'company_id' => 1,
        ]);

        \App\Models\Company::create([
            'name' => 'Digital Marketing Pro',
            'email' => 'support@digitalmarketingpro.com',
            'address' => '321 Commerce Ave, FL 33101',
            'company_id' => 1,
        ]);

        \App\Models\Company::create([
            'name' => 'Cloud Services Group',
            'email' => 'info@cloudservices.com',
            'address' => '555 Tech Tower, WA 98101',
            'company_id' => 1,
        ]);
    }
}
