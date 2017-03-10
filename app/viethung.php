<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class viethung extends Model {

	protected $table = "viethung";

	protected $fillable = ['id','monhoc','giatien','giangvien'];
	public $timestamps = false;

}
