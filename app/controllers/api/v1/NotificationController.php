<?php 
namespace api\v1;
class NotificationController extends \BaseController {

	public function index()
	{
		//return "hello API v1!";
		$response = array("status" => "success", "notifications" => \Notification::get());
		return \Response::json($response);
	}
}