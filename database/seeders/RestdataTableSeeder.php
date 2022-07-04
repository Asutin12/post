<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $param = [
           'message'=>'Good Japan',
           'url'=>'https://www.google.co.jp',
       ];
       $restdata = new Restdata;
       $restdata->fill($param)->save();
       
        $param = [
            'message'=>'Yahoo Japan',
            'url'=>'https://www.yahoo.cp.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            'message'=>'MSN Japan',
            'url'=>'https://www.msn.com/ja-jp',
        ];
        $reatdata = new Restdata;
        $restdata->fill($param)->save();
    }
}
