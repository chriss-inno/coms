<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users=User::all();

		return View::make('users.index',compact('users'));


	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$profile=Profile::lists('name','id');

		return View::make('users.create',compact('profile'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		//Capture inputs
		 $user= new User();
		 $user->firstname=Input::get('firstname');
		 $user->Lastname=Input::get('lastname');
		 $user->phone=Input::get('phone');
		 $user->status=Input::get('status');

		 $user->save();

		 $prof=new Profile();
		 $prof->name='Computer';
		 $prof->userid=$user->id;
		 $prof->save();

		 return Redirect::to('users');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		return "Selected id is ".$id;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
