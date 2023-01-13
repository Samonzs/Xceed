<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\TermsAndConditions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TermsAndConditions::create([
            'termsAndConditions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et eros ac tellus cursus fringilla eu faucibus lacus. 
            Cras id venenatis metus. Nam ac hendrerit neque. Vivamus a dignissim risus, eu convallis massa. Aenean maximus maximus mi quis aliquam. Sed euismod 
            dictum convallis. Curabitur lacinia dui odio. Vestibulum dignissim mauris id massa fermentum, quis tempus turpis varius. Duis eget imperdiet odio. 
            Curabitur fermentum, urna ac sodales tincidunt, ex purus tincidunt ex, in molestie purus velit nec ante. Morbi gravida elit ac nisi pulvinar, at dictum 
            est condimentum. Etiam diam ex, semper et est eget, pulvinar posuere ligula. Pellentesque ullamcorper vehicula fermentum. Fusce ac erat tellus. 
            Phasellus luctus sollicitudin porttitor.'
        ]);

        Admin::create([
            'fname' => 'Jayson',
            'lname' => 'Conceicao',
            'email' => 'jayson@xceedelectrical.com.au',
            'password' => Hash::make('Jayson123@'),

        ]);
        
    }
}
