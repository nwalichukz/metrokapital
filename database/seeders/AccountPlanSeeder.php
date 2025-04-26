<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AccountPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('investment_types')->insert([
            [
            'parent_name' => 'Savings',
            'name' => 'Beginner Plan',
            'min_amt'=>'150',
            'max_amt' => '4999',
            'earning_percentage'=> '0.8',
            'duration' => '60',
            'monthly_contribution'=>null,
            'description'=> 'savings investment plan',
            ],

            [
                'parent_name' => 'Savings',
                'name' => 'MTC Saving 2',
                'min_amt'=>'5000',
                'max_amt' => '25000',
                'earning_percentage'=> '1.2',
                'duration' => '90',
                'monthly_contribution'=>null,
                'description'=> 'savings investment plan',
                ],

                [
                    'parent_name' => 'Savings',
                    'name' => 'MTC Saving 3',
                    'min_amt'=>'30000',
                    'max_amt' => '99900',
                    'earning_percentage'=> '1.5',
                    'duration' => '120',
                    'monthly_contribution'=>null,
                    'description'=> 'savings investment plan'
                    ],

                    [
                        'parent_name' => 'Savings',
                        'name' => 'MTC Saving 4',
                        'min_amt'=>'150000',
                        'max_amt' => '500000',
                        'earning_percentage'=> '2',
                        'duration' => '365',
                        'monthly_contribution'=>null,
                        'description'=> 'savings investment plan'
                        ],

                        [
                            'parent_name' => 'Current',
                            'name' => 'Basic Plan',
                            'min_amt'=>'1000',
                            'max_amt' => '49999',
                            'earning_percentage'=> '0.5',
                            'duration' => '30',
                            'monthly_contribution'=>null,
                            'description'=> 'current investment plans'
                            ],

                            [
                                'parent_name' => 'Current',
                                'name' => 'MTC Current Plan 2',
                                'min_amt'=>'50000',
                                'max_amt' => '999000',
                                'earning_percentage'=> '0.8',
                                'duration' => '30',
                                'monthly_contribution'=>null,
                                'description'=> 'current investment plans'
                                ],
                                
                                [
                                    'parent_name' => 'Current',
                                    'name' => 'MTC Current Plan 3',
                                    'min_amt'=>'200000',
                                    'max_amt' => '1000000',
                                    'earning_percentage'=> '1.2',
                                    'duration' => '60',
                                    'monthly_contribution'=>null,
                                    'description'=> 'current investment plans'
                                    ],

                                    [
                                        'parent_name' => 'Retirement Plan',
                                        'name' => 'Basic Plan',
                                        'min_amt'=>'1000',
                                        'max_amt' => '100000',
                                        'monthly_contribution' =>'500',
                                        'earning_percentage'=> '3',
                                        'duration' => '365',
                                        'description'=> 'Retirement investment plans'
                                        ],

                                        [
                                            'parent_name' => 'Retirement Plan',
                                            'name' => 'MTC Retirement 2',
                                            'min_amt'=>'1000',
                                            'max_amt' => '100000',
                                            'monthly_contribution' =>'2000',
                                            'earning_percentage'=> '3',
                                            'duration' => '1095',
                                            'description'=> 'Retirement investment plans'
                                            ],

                                            [
                                                'parent_name' => 'Retirement Plan',
                                                'name' => 'MTC Retirement 3',
                                                'min_amt'=>'1000',
                                                'max_amt' => '100000',
                                                'monthly_contribution' =>'2000',
                                                'earning_percentage'=> '3',
                                                'duration' => '1460',
                                                'description'=> 'Retirement investment plans'
                                                ],

                                                [
                                                    'parent_name' => 'Retirement Plan',
                                                    'name' => 'MTC Retirement 4',
                                                    'min_amt'=>'1000',
                                                    'max_amt' => '100000',
                                                    'monthly_contribution' =>'2000',
                                                    'earning_percentage'=> '3',
                                                    'duration' => '1815',
                                                    'description'=> 'Retirement investment plans'
                                                    ],
        ]);
    }
}
