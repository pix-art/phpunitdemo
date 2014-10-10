<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/api/v1/notification');

		$content = $this->client->getResponse()->getContent();

		$this->assertTrue(is_object(json_decode($content)));

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
