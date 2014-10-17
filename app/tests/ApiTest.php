<?php

class ApiTest extends TestCase {

	/**
	 * Test if the basic api call works, this should return all notifications
	 */
	public function testIndexCall()
	{
		$crawler = $this->client->request('GET', '/api/v1/notification');
		$content = $this->client->getResponse()->getContent();
	}

	/**
	 * Test if the show api call works, this should return the notification with id 1
	 */
	public function testShowCall()
	{
		
	}

	/**
	 * Test if the level api call works, this should return the notification with level 3
	 */
	public function testLevelCall()
	{
		
	}

	/**
	 * Test if the user api call works, this should return the notifications from user 1
	 */
	public function testUserCall()
	{
		
	}

	/**
	 * Test if the delete api call works, this should return the message "Notification 1 has been deleted"
	 */
	public function testDeleteCall()
	{
		
	}

	/**
	 * Test if the show api call works after delete, this should return an InvalidArgumentException with message "Notification not found!"
	 */
	public function testShowCallWithNoneExistingId()
	{
		
	}
}
