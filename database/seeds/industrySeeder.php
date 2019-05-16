<?php

use Illuminate\Database\Seeder;

class industrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('industry')->delete();

      $industries = array(
          ['industry_id'=>1, 'name'=>'Sales', 'description'=>'','status'=> 1],
          ['industry_id'=>2, 'name'=>'Marketing','description'=>'', 'status'=> 1],
          ['industry_id'=>3, 'name'=>'IT/Software', 'description'=>'','status'=> 1],
          ['industry_id'=>4, 'name'=>'Administrative', 'description'=>'','status'=> 1],
          ['industry_id'=>5, 'name'=>'Hospitality', 'description'=>'','status'=> 1],
          ['industry_id'=>6, 'name'=>'Construction', 'description'=>'','status'=> 1],
          ['industry_id'=>7, 'name'=>'Design', 'description'=>'','status'=> 1],
          ['industry_id'=>8, 'name'=>'Skilled Trade', 'description'=>'','status'=> 1],
          ['industry_id'=>9, 'name'=>'Medical', 'description'=>'','status'=> 1],
          ['industry_id'=>10, 'name'=>'Quality Assurance', 'description'=>'','status'=> 1],
          ['industry_id'=>11, 'name'=>'Research/Development', 'description'=>'','status'=> 1],
          ['industry_id'=>12, 'name'=>'Maintenance/Repair', 'description'=>'','status'=> 1],
          ['industry_id'=>13, 'name'=>'Science/Technology', 'description'=>'','status'=> 1],
          ['industry_id'=>14, 'name'=>'Accounting/Finance', 'description'=>'','status'=> 1],
          ['industry_id'=>15, 'name'=>'Management', 'description'=>'','status'=> 1],
          ['industry_id'=>16, 'name'=>'Engineering', 'description'=>'','status'=> 1],
          ['industry_id'=>17, 'name'=>'Logistics', 'description'=>'','status'=> 1],
          ['industry_id'=>18, 'name'=>'Human Resources', 'description'=>'','status'=> 1],
          ['industry_id'=>19, 'name'=>'Manufacturing', 'description'=>'','status'=> 1],
          ['industry_id'=>20, 'name'=>'Education/Training', 'description'=>'','status'=> 1],
          ['industry_id'=>21, 'name'=>'Customer Support', 'description'=>'','status'=> 1],
          ['industry_id'=>22, 'name'=>'Project Management', 'description'=>'','status'=> 1],
          ['industry_id'=>23, 'name'=>'Writing/Editing', 'description'=>'','status'=> 1],
          ['industry_id'=>24, 'name'=>'Translation', 'description'=>'','status'=> 1],
          ['industry_id'=>25, 'name'=>'Legal', 'description'=>'','status'=> 1],
          ['industry_id'=>26, 'name'=>'Consulting', 'description'=>'','status'=> 1],
          ['industry_id'=>27, 'name'=>'Security', 'description'=>'','status'=> 1],
          ['industry_id'=>28, 'name'=>'Other', 'description'=>'','status'=> 1],


      );

      DB::table('industry')->insert($industries);
    }
}