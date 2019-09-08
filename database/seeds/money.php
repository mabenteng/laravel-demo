<?php

use Illuminate\Database\Seeder;

class money extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$data=[
		['who_id'=>3,'money'=>"我有三千块"],	
			['who_id'=>4,'money'=>"我有三千块"],	
			['who_id'=>5,'money'=>"我有三千块"],	
			['who_id'=>6,'money'=>"我有三千块"],	
			['who_id'=>7,'money'=>"我有三千块"],	
			['who_id'=>8,'money'=>"我有三千块"],	
			['who_id'=>9,'money'=>"我有三千块"],	
			['who_id'=>10,'money'=>"我有三千块"],	
			['who_id'=>2,'money'=>"我有三千块"],	
			['who_id'=>1,'money'=>"我有三千块"]
		];
		DB::table('bank')->insert($data);
    }
}
