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
        // Create companies
        $company1 = \App\Models\Company::create([
            'name' => 'Tech Solutions Inc',
            'email' => 'contact@techsolutions.com',
            'address' => '123 Silicon Valley, CA 94025',
            'company_id' => 1,
        ]);

        $company2 = \App\Models\Company::create([
            'name' => 'Global Enterprises Ltd',
            'email' => 'info@globalenterprises.com',
            'address' => '456 Business Park, NY 10001',
            'company_id' => 1,
        ]);

        $company3 = \App\Models\Company::create([
            'name' => 'Innovation Labs',
            'email' => 'hello@innovationlabs.com',
            'address' => '789 Startup Street, TX 78701',
            'company_id' => 1,
        ]);

        $company4 = \App\Models\Company::create([
            'name' => 'Digital Marketing Pro',
            'email' => 'support@digitalmarketingpro.com',
            'address' => '321 Commerce Ave, FL 33101',
            'company_id' => 1,
        ]);

        $company5 = \App\Models\Company::create([
            'name' => 'Cloud Services Group',
            'email' => 'info@cloudservices.com',
            'address' => '555 Tech Tower, WA 98101',
            'company_id' => 1,
        ]);

        // Create contacts for Tech Solutions Inc
        \App\Models\Contact::create([
            'firstname' => 'John',
            'lastname' => 'Smith',
            'email' => 'john.smith@techsolutions.com',
            'phone' => '+1-555-0101',
            'address' => '123 Main Street, CA 94025',
            'company_id' => $company1->id,
        ]);

        \App\Models\Contact::create([
            'firstname' => 'Sarah',
            'lastname' => 'Johnson',
            'email' => 'sarah.johnson@techsolutions.com',
            'phone' => '+1-555-0102',
            'address' => '456 Oak Avenue, CA 94025',
            'company_id' => $company1->id,
        ]);

        // Create contacts for Global Enterprises Ltd
        \App\Models\Contact::create([
            'firstname' => 'Michael',
            'lastname' => 'Brown',
            'email' => 'michael.brown@globalenterprises.com',
            'phone' => '+1-555-0201',
            'address' => '789 Broadway, NY 10001',
            'company_id' => $company2->id,
        ]);

        \App\Models\Contact::create([
            'firstname' => 'Emily',
            'lastname' => 'Davis',
            'email' => 'emily.davis@globalenterprises.com',
            'phone' => '+1-555-0202',
            'address' => '321 Park Avenue, NY 10001',
            'company_id' => $company2->id,
        ]);

        // Create contacts for Innovation Labs
        \App\Models\Contact::create([
            'firstname' => 'David',
            'lastname' => 'Wilson',
            'email' => 'david.wilson@innovationlabs.com',
            'phone' => '+1-555-0301',
            'address' => '555 Innovation Drive, TX 78701',
            'company_id' => $company3->id,
        ]);

        \App\Models\Contact::create([
            'firstname' => 'Jennifer',
            'lastname' => 'Martinez',
            'email' => 'jennifer.martinez@innovationlabs.com',
            'phone' => '+1-555-0302',
            'address' => '777 Tech Boulevard, TX 78701',
            'company_id' => $company3->id,
        ]);

        // Create contacts for Digital Marketing Pro
        \App\Models\Contact::create([
            'firstname' => 'Robert',
            'lastname' => 'Anderson',
            'email' => 'robert.anderson@digitalmarketingpro.com',
            'phone' => '+1-555-0401',
            'address' => '888 Marketing Lane, FL 33101',
            'company_id' => $company4->id,
        ]);

        \App\Models\Contact::create([
            'firstname' => 'Lisa',
            'lastname' => 'Taylor',
            'email' => 'lisa.taylor@digitalmarketingpro.com',
            'phone' => '+1-555-0402',
            'address' => '999 Digital Street, FL 33101',
            'company_id' => $company4->id,
        ]);

        // Create contacts for Cloud Services Group
        \App\Models\Contact::create([
            'firstname' => 'James',
            'lastname' => 'Thomas',
            'email' => 'james.thomas@cloudservices.com',
            'phone' => '+1-555-0501',
            'address' => '111 Cloud Way, WA 98101',
            'company_id' => $company5->id,
        ]);

        \App\Models\Contact::create([
            'firstname' => 'Amanda',
            'lastname' => 'White',
            'email' => 'amanda.white@cloudservices.com',
            'phone' => '+1-555-0502',
            'address' => '222 Server Road, WA 98101',
            'company_id' => $company5->id,
        ]);
    }
}
