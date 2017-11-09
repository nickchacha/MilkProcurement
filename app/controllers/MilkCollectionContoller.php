<?php
class MilkCollectionContoller extends BaseController 
{
	function index()
	{
		return View::make('index');
	}
	

	function createCollection()
	{
	 return View::make('collection.create');	
	}

	function store()
	{
		$validation= Validation::make(Input::all(), MilkCollection::$rules);
		if($validator = pass())
		{
			$collection=new MilkCollection();
			$collection->farmer_id=Input::get('farmers_id');
			$collection->route_id=Input::get('route_id');
			$collection->grader_id=Input::get('grader_id');
			$collection->transporter_id=Input::get('transporter_id');
			$collection->trip_id=Input::get('trip_id');
			$collection->collection_date=Input::get('collection_date');
			$collection->daycollection=Input::get('daycollection');
			$collection->save();
			return Redirect::to('collection.list')->with('Order updated');
		//return Redirect::to('creategrader')
	}
	else
	{
		Redirect::to('collection.list')->withErrors($validator)->withInput;
	}
}
	
	
	public function editCollection($id)
	{
		return View::make('collection.edit');
	}
	public function handleCollection(1$id)
	{
		$validator=Validator::make(Input::all(), $rules);
		if($validator = pass())
		{
			$collection=MilkCollection::find($id);
			$collection->farmer_id=Input::get('farmers_id');
			$collection->route_id=Input::get('route_id');
			$collection->grader_id=Input::get('grader_id');
			$collection->transporter_id=Input::get('transporter_id');
			$collection->trip_id=Input::get('trip_id');
			$collection->collection_date=Input::get('collection_date');
			$collection->daycollection=Input::get('daycollection');
			$collection->save();
			return Redirect::to('collection.list')->with('Farmers is updated');

		}
		else{
			return Redirect::to('collection.list')->withErrors($validator);
		}


	}
	public function deletegrader()
	{
		$collection=MilkCollection::find($id);
		$collection->delete();

		Session::flash('message', 'Successfully deleted ');
        return Redirect::to('collection.list');

	}
	
	

}