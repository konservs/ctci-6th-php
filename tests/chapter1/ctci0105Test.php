<?php
require_once __DIR__ . '/../../src/chapter1/ctci-1-5/ctci0105.php';

class CTCI0105Test extends \PHPUnit\Framework\TestCase {
	public function testAdd() {
		//Add - true
		$this->assertTrue(checkStringModification('pales','pale'));
		}
	public function testRemove() {
		//Remove - true
		$this->assertTrue(checkStringModification('pale','bale'));
		}
	public function testReplaces() {
		//1 replace - true
		$this->assertTrue(checkStringModification('pale','bale'));
		//2 replaces - false
		$this->assertFalse(checkStringModification('pale','bake'));
		}

	}
