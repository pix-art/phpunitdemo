<?php

class ApiTest extends TestCase {

	/**
	 * Test if the basic api call works, this should return all notifications
	 */
	public function testIndexCall()
	{
		$crawler = $this->client->request('GET', '/api/v1/notification');
		$content = $this->client->getResponse()->getContent();

		$this->assertTrue($this->client->getResponse()->isOk());
		$this->assertInstanceOf('stdClass', json_decode($content));
	}

	/**
	 * Test if the show api call works, this should return the notification with id 1
	 */
	public function testShowCall()
	{
		$crawler = $this->client->request('GET', '/api/v1/notification/1');
		$content = $this->client->getResponse()->getContent();
		$stdObject = json_decode($content);

		$this->assertTrue($this->client->getResponse()->isOk());
		$this->assertEquals('1', $stdObject->notification->id);
	}

	/**
	 * Test if the level api call works, this should return the notification with level 3
	 */
	public function testLevelCall()
	{
		$crawler = $this->client->request('GET', '/api/v1/notification/level/3');
		$content = $this->client->getResponse()->getContent();
		$stdObject = json_decode($content);

		$this->assertTrue($this->client->getResponse()->isOk());
		$this->assertEquals('3', $stdObject->notifications[0]->level);
	}

	/**
	 * Test if the user api call works, this should return the notifications from user 1
	 */
	public function testUserCall()
	{
		$crawler = $this->client->request('GET', '/api/v1/notification/user/1');
		$content = $this->client->getResponse()->getContent();
		$stdObject = json_decode($content);

		$this->assertTrue($this->client->getResponse()->isOk());
		$this->assertEquals('1', $stdObject->notifications[0]->user_id);
	}

	/**
	 * Test if the delete api call works, this should return the message "Notification 1 has been deleted"
	 */
	public function testDeleteCall()
	{
		$crawler = $this->client->request('delete', '/api/v1/notification/delete/1');
		$content = $this->client->getResponse()->getContent();
		$stdObject = json_decode($content);

		$this->assertTrue($this->client->getResponse()->isOk());
		$this->assertEquals('Notification 1 has been deleted', $stdObject->message);
	}

	/**
	 * Test if the show api call works after delete, this should return an exception
	 *
	 * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Notification not found!
	 */
	public function testShowCallWithNoneExistingId()
	{
		$crawler = $this->client->request('delete', '/api/v1/notification/delete/1');
		$crawler = $this->client->request('GET', '/api/v1/notification/1');
		$content = $this->client->getResponse()->getContent();
	}
}
