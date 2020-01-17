<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\Student;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Department::create(['Designation'=> 'Ressources Humaines']);
       Department::create(['Designation'=> 'Communication']);
       Department::create(['Designation'=> 'Design']);
       Department::create(['Designation'=> 'Sponsoring']);
       Department::create(['Designation'=> 'Technique']);
       Department::create(['Designation'=> 'Logistique']);
       Student::create(['first_name'=> 'Ines','family_name'=>'Bachiri','email'=>'ji_bachiri@esi.dz','department_id'=>'1']);
    }
}
