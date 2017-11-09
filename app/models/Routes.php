<?php
class Routes extends Eloquent 
{
	protected $table = 'routes';
	public static $rules=array('routename'=>'required|alpha|min:3');


	public function farmers()
	{
		return $this->hasMany('farmers');
	}

	
	public function CollectionCenters()
	{
		return $this->hasMany('collectioncenter');
    }
    public function Transporter();
    {
    	return $this-> hasOne('transporters');
    }
    public function MilkCollection()
    {
    	return $this->hasMany('milkcollection');
    }
}
	public function trip()
	{
		return $this-> hasMany('trip');
	}