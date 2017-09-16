<?php
class MilkCollectionContoller extends BaseController 
{
	function index()
	{
		return View::make('index');
	}
	function creategrader()
	{
		return View::make('creategrader')
	}
	function hundlecreategrader()
	{
	//	retun View::make('hundlecreateGrader')
	}
	public function editgrader(Farmer, $farmer)
	{
		return View::make('editgrader');
	}
	public function handlegraderdit()
	{

	}
	public function deletegrader()
	{
		retun View::make(deletegrader);

	}
	public function handledeletegrader()
	{
		//handle delete confrimation
	}
	

}