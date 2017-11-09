<?php
class RouteContoller extends BaseController 
{
	function index()
	{
		return View::make('index');
	}
	function createroute()
	{
		return View::make('grader.create');
		
	}		
	
	function store()
	{
		$validator=Validate::make(Input::all(), Routes::$rules)
			if ($validator= passes())
			{
				$route=new Routes();
				$route->routename=Input::get('routename');
				$route->grader_id=Input::get('grader_id');
				$route->transporter_id=Input::get('transporter_id');
				$route->save();
				return Redirect::to('routes')->with('new route created');
			}

			

	//	retun View::make('hundlecreateGrader')
	}
	public function editroute($id)
	{
		return View::make('editroute');
	}
	public function handlegraderdit()
	{
		$validator=validator::make(Input::all(), Routes::$rules);
		if($validator = pass()){
			$route=Routes::find($id);
			$route->routename=Input::get('routename');
			$route->grader_id=Input::get('grader_id');
			$route->transporter_id=Input::get('transporter_id');
			$route->save();
			return Redirect::to('routes')->with('Route edited and saved');


		}

	}

	public function handledeletegrader()
	{
		$route=Routes::find($id);
		$route->delete();
		return Redirect::to('routes')-> with('Route has been deleted');
		//handle delete confrimation
	}
	

}