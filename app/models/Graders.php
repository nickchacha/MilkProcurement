<?php
class Graders extends Eloquent
{
	protected $table = 'graders';
	public static $rules=array('firstname'=>'required|alpha|min:2',
		'lastname'=>'required|alpha|min:2','phonenumber'=>'required||numeric|min:10',
		'route'=>'required');


	public function farmers ()
	{
		return $this->hasMany('farmers');

	}
	public function route()
	{
		return $this->hasOne('routes');

	}
	public function CollectionCenter()
	{
		return $this-> hasMany('collectioncenter')
	}
	public function Milkcollection()
	{
		return $this->hasmany('milkcollection');
	}
	public function trip()
	{
		return $this->hasMany('trip');
	}
}