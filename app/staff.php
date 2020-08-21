<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //
    //ชื่อตารางในฐานข้อมูล
protected $table = "staffs";
//ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
protected $fillable = ["Name","Age","Salay","Phone"];    
//Primary Key
 	protected $primaryKey = "id";
}
