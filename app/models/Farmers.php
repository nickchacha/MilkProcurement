<?php
class Farmers extends Eloquent
{
	protected $table = 'farmers';
	public static $rules=array('firstname' => 'required|alpha|min:2',
		'lastname' => 'required|alpha|min2',
		'phone' => 'required|numeric:12',
		'route' => 'required',
		'sub-station' => 'require');

	
	public function route()
	{
		return $this->belongsTo('routes');
	}
	

	public function grades()
	{
		return $this->belongsTo('graders');
	}
	
	public function CollectionCenter ()
	{
		return $this->belongsTo('collectioncenter');
	}
	
	
	public function Milkcollection()
	{
		return $this->hasOne('milkcollection');
	}
	public function transporter()
	{
		return $this->belongsTo('tranporters');
	}
	
}