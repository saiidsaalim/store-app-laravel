<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name'])]

class Category extends Model
{
    // protected $table = 'categories';

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // } untuk membuat model apabila nama model tidak sesuai dengan nama tabel, 
    // maka kita harus mendefinisikan nama tabel pada model tersebut dengan menggunakan properti $table. Namun, jika nama model sudah sesuai dengan nama tabel, maka kita tidak perlu mendefinisikan properti $table.
}
