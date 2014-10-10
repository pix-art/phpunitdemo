<?php

class NotificationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the nerds
        $notifications = Notification::all();

        // load the view and pass the notifications
        return View::make('notifications.index')
            ->with('notifications', $notifications);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('notifications.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'notification' => 'required',
            'level' 	   => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('notifications/create')
                ->withErrors($validator);
        } else {
            // store
            $notification = new Notification;
            $notification->notification  = Input::get('notification');
            $notification->level = Input::get('level');
            $notification->user_id = '1';
            $notification->save();

            // redirect
            Session::flash('message', 'Successfully created Notification!');
            return Redirect::to('notifications');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 // get the nerd
        $notification = Notification::find($id);

        // show the view and pass the notification to it
        return View::make('notifications.show')
            ->with('notification', $notification);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
        $notification = Notification::find($id);

        // show the edit form and pass the notification
        return View::make('notifications.edit')
            ->with('notification', $notification);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'notification' => 'required',
            'level' 	   => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('notifications/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            // store
            $notification = Notification::find($id);
            $notification->notification  = Input::get('notification');
            $notification->level = Input::get('level');
            $notification->user_id = '1';
            $notification->save();

            // redirect
            Session::flash('message', 'Successfully updated Notification!');
            return Redirect::to('notifications');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$notification = Notification::find($id);
        $notification->delete();

        // redirect
        Session::flash('message', 'Successfully deleted notification!');
        return Redirect::to('notifications');
    }


}
