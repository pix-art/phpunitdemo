<?php 
namespace api\v1;

class NotificationController extends \BaseController {

	public function index()
	{
		//return "hello API v1!";
		$response = array("status" => "success", "notifications" => \Notification::with('user')->get());
		return \Response::json($response);
	}

	public function show($id)
	{
		// show only one specific notification
		$notification = \Notification::find($id);
		$response = array("status" => "success", "notification" => $notification);
		return \Response::json($response);
	}
}