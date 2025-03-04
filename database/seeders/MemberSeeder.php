<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run()
    {
        Member::create([
            'name' => 'John Doe',
            'title' => 'Software Engineer',
            'address' => '123 Street, City, Country',
            'birthday' => '1990-05-15',
            'description' => 'Experienced developer specializing in Laravel.'
        ]);

        Member::create([
            'name' => 'Jane Smith',
            'title' => 'Project Manager',
            'address' => '456 Avenue, City, Country',
            'birthday' => '1988-11-22',
            'description' => 'Passionate about project management and team leadership.'
        ]);
    }
}
