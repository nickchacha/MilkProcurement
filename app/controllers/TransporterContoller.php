<?php
class TransporterContoller extends BaseController 
{
	function index()
	{
		return View::make('index');
	}
	function createtransporter()
	{
		return View::make('transporter.create');
	}
	function store()
	{
		$validator=Validator::make(Input::all(), Transporter::$rules);
		if($validator->passes())
		{
			$transporter= new Transporter();
			$transporter->firstname=Input::get('firstname');
			$transporter->lastname=Input::get('lastname');
			$transporter->mobilenumner=Input::::get('mobilenumber');
			$transporter->route_id=Input::('route_id');
			$transporter->IDnumber=Input::('IDnumber');
			$transporter->Carrier=Input::('carrier');
			if(Input::has('Motobike')){
				$transporter->motobikeregnumber='motobikeregnumber';
			}
			if(Input::has('Vehicle')){
				$transporter->vehiclemodel=Input::('vehiclemodel');
				$transporter->vehicleregnumber=Input::('vehicleregnumber');
				$transporter->vehiclecapacity=Input::('vehiclecapacity');
			}
			$transporter->save();
		}
	//	retun View::make('hundlecreateGrader')
	}
	public function editTransporter($id)
	{
		return View::make('transporter.Edit');
	}
	public function handletransporterEdit()
	{
		$validate=Validator::make(Input::all(), Transporter::$rules);
		if ($Validator->passes()){
			$transporter= Transporter::find($id);
			$transporter->firstname=Input::get('firstname');
			$transporter->lastname=Input::get('lastname');
			$transporter->mobilenumner=Input::::get('mobilenumber');
			$transporter->route_id=Input::('route_id');
			$transporter->IDnumber=Input::('IDnumber');
			$transporter->carrier=Input::('carrier');
			if(Input::has('Motobike')){
				$transporter->motobikeregnumber='motobikeregnumber';
			}
			if(Input::has('Vehicle')){
				$transporter->vehiclemodel=Input::('vehiclemodel');
				$transporter->vehicleregnumber=Input::('vehicleregnumber');
				$transporter->vehiclecapacity=Input::('vehiclecapacity');
			}
			$transporter->save();
			return Redirect::to('transporter.list')->with('Transporter Edited');

			else{
				Redirect::to('transporte.edit'->withErrors($validator);
			}

		}

	}
	public function deleteTranporter()
	{
		$transporter=Transporter::find($id);
		$transporter->delete($id);
		Redirect::to('transporter.list')->with('transporter deleted');

	}
	

}