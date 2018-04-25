<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
          'name' => 'fanjiayong',
          'password' =>Hash::make('fanjiayong'),
        ];
        DB::table('admins')->insert($param);
    }
}
