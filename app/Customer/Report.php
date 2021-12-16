<?php

namespace App\Customer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Db;

class Report extends Model
{
    public static function getAll($idgamehouse)
    {
        $gamehousedata = Db::table('reports')->get();

        return $gamehousedata;
    }
}
