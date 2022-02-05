<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    public function getMember(){
        return $this->hasOne(Member::class,'member_id','id'); ///member id foregin key
        // return $this->hasMany(GroupModel::class,'group_id');

    }
}
