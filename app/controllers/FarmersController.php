<?
class FarmersController extends BaseController
{
	
	public function index()
	{
		$farmers=Farmers::all();
		return View::make('farmers.index')->with('farmers',$farmers);
	}

	public function createFarmers()
	{
		return View::make('farmers.create');
	}

	public function store()
	{
		$validator = Validate::make(Input::all(), Farmers::$rules);
		if($validator->passes()){

			$farmer=new farmers();
			$farmer->firstname = Input::get('firstname');
			$farmer->lastname = Input::get('lastname');
			$farmer->phonenumber = Input::get('email');
			$farmer->route_id=Input::get('route_id');
			$farmer->collectioncenters_id=Input::('collectioncentre_id');
			
// Was New farmer created
			if ($farmer->save())
			{
							return Redirect::to('farmers.list')->with('new farmer has been created');
			}
			//$farmer->save();
			
		}
		else{
			return Redirect::to('farmers.create')->with('please collect the following')->withErrors($validator)->withInput();
		}

		
	}
	
	public function show($id)
	{
		$farmers=Farmers::find($id);
		return View::make('farmers.details');
		//return View::make()
	}
	public function editfarmers($id)
	{
		$farmers=Farmers::find($id)
		return View::make('farmers.edit') -> with('farmers.detail', $farmers);
	}
	
	public function updatefarmer($id)
	{
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fail())
		{
			return Redirect::to('farmers/'.$id.'edit')->withErrors($validator);
		}
		else{
			$farmers = Farmers::find($id);
			$farmer->firstname = Input::get('firstname');
			$farmer->lastname = Input::get('lastname');
			$farmer->phonenumber = Input::get('email');
			$farmer->route_id=Input::get('route_id');
			$farmer->collectioncenters_id=Input::('collectioncentre_id');
			$farmers->save();
			return Redirect::to('farmers.list') -> with('Farmers is updated');
		}

	}

	public function deletefarmer()
	{
		$farmers = Farmers::find($id);
		$farmers->delete();
		return Redirect::to('farmers.list')->with('Farmer account has been deleted');
		//retun View::make(delete);

	}
	
	
}