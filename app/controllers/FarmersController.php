<?
class FarmersController extends BaseController
{
	
	public function index()
	{
		return View::make('index');
	}
	public function create()
	{
		return View::make('create')
	}
	public function handleCreate()
	{
		//return View::make()
	}
	public function edit(Farmer, $farmer)
	{
		return View::make('edit');
	}
	public function handleEdit()
	{

	}
	public function delete()
	{
		retun View::make(delete);

	}
	public function handledelete()
	{
		//handle delete confrimation
	}
	
}