<?php
 
class Transporters extends Eloquent
{
	protected $table = 'transporters';
	public static $rules=array('firstname'=>'required| alpha|min:5',
		'lastname'=>'required|alpha|min:5', 
		'mobile'=> 'required|numeric|min:12',
		'route'=> 'required|numeric|max:3'
		'IDnumner'=>'required|numeric|min:12',
		'carrier' => 'required|alpha|min:3')

	public function routes()
	{
		return $this->belongsTo('routes');
	}
	public function farmers()
	{
		return $this->hasMany('farmers');
	}
	public function collectioncenters()
	{
		return $this> hasMany('collectioncenter');
	}


	//public function 
}