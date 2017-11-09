<?php
class Trip extends Eloquent
{
	protected $table = 'trip';
	
	public function route()
	{
		return $this->belongsTo('routes');

	}
	public function graders()
	{
		return $this->belongsTo ('graders');
	}
	public function dayscollection()
	{
		return $this->hasMany('trip');
	}
}