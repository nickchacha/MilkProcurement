<?php 
class AdminUsersController extend AdminController {
	protected $user;
	protected $role;
	protected $permission;
	public function __construct(User $user, Role $role, Permission $permission)
	{
		parent::__construct();
		$this->user = $user;
		$this->role = $role;
		$this->permission =$permission;

	}
	public function getIndex()
	{
		$users = $this->user;
		return View::make('admin/users/index', compact('users', 'title'));
		 
	}
}