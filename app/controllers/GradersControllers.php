<?php
class GradersController extends BaseController 
{
	function index()
	{
		return View::make('index');
	}
	function createGraders()
	{
		return View::make('grader.create');
	}

	function store()
	{
		$validator = Validate::make(Input::all(), Graders::$rules);
		if($validator->passes()){
			$grader=new Graders();
			$grader->firstname = Input::get('firstname');
			$grader->lastname = Input::get('lastname');
			$grader->phonenumber = Input::get('email');
			$grader->route_id=Input::get('route_id');
			//$grader->collectioncenters_id=Input::('collectioncentre_id');
			$grader->save();
			return Redirect::to('grader/list')->with('new grader has been created');
			
		}
		else{
			return Redirect::to('grader.create')->with('please collect the following')->withErrors($validator)->withInput();
		}

	}
	
	
	public function editGrader($id)
	{
		//$validator=Validate::make(Input::all(), Graders::$rules);
		return View::make('grader.edit');
	}

	public function handlegraderdit()
	{
		$validator=Validate::make(Input::all(), Graders::$rules);
		if($validator=pass()){
			$grader = Grader::find($id);
			$grader->firstname = Input::get('firstname');
			$grader->lastname= Input::get('lastname');
			$grader->phonenumber = Input::get('email');
			$grader->route_id=Input::get('route_id');
			$grader->save();
		}
		else()
		{
			return Redirect::to('grader/'.$id.'edit')->withErrors($vadator);
		}


	}
	public function deleteGrader($id)
	{
		$grader=Graders::find($id);
		$garder->delete();
		return Redirect::to('index');

	}


}