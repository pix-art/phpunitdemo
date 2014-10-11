<?php 
namespace api\v1;

class NotificationController extends \BaseController
{

	public function index()
	{
		$response = array("status" => "success", "notifications" => \Notification::with('user')->get());
		return \Response::json($response);
	}

	public function show($id)
	{
		$notification = \Notification::find($id);
		$response = array("status" => "success", "notification" => $notification);
		return \Response::json($response);
	}

	public function importance($level)
	{
		$response = array("status" => "success", "notifications" => \Notification::with('user')->where('level', '=', $level)->get());
		return \Response::json($response);
	}

	public function user($user)
	{
		$response = array("status" => "success", "notifications" => \Notification::with('user')->where('user_id', '=', $user)->get());
		return \Response::json($response);
	}
}