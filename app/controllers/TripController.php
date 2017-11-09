<?php
class TripController extends BaseController
{
	function __construct()
	{
		$this->beforeFilter('auth')
	}
	function index()
	{

		return View::make('index');
		$trip=Trip::all()
		return View::make('daytrip')
	}

	function createtrip()
	{
		
			return View::make('daytrip.create');


	}
	function store()
	{
		$rules=array('date'=> 'required', 'grader'=> 'required', 'route'=> 'required');
		$validator=Validator::make(Input:: all(),$rules);
		if ($validator->fails()) {
            return Redirect::to('trip.create')
                            ->withErrors($validator);
                           
        } else {
            // store
            $trip= new Product;
            $trip ->startdate = Input::get('startdate');
            $trip ->grader=Input::get('grader');
            $trip ->route=Input::get('route');
            $trip->save();

            // redirect
            Session::flash('message', 'Successfully created a trip!');
            return Redirect::to('trip');
	}
	function editTrip($id)
	{
		return View::make('trip.edit');
	}
	function handletripEdit($id)
	{
		$validator=Validator::make(Input::all(), Trip::$rules)
		if($validator=passes(){
			$trip=Trip::find($id);
			$trip ->startdate = Input::get('startdate');
            $trip ->grader=Input::get('grader');
            $trip ->route=Input::get('route');
            $trip->save();
            return Redirect::to('trip.list')->with('trip edited');

		}
		else{
			return Redirect::to('trip.list')->withErrors($validator);

		}
	}
	function deleteTrip($id)
	{
		$trip=Trip::find($id);
		$trip->delete($id);
		return Redirect::to('trip.list')
->with('trip deleted');	}

}