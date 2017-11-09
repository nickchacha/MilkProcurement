<? php
class MilkCollection extends Eloquent
{
	protected $table = 'MilkCollection';
	
	public function routes()
	{
		return $this->belongsTo('routes');
	}
	public function farmers()
	{
		return $this->belongsTo('farmers');

	}
	public function CollectionCenter()
	{
		return $this->belongsTo('collectioncenter')''
	}

}