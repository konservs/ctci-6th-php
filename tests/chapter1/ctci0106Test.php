<?php
require_once __DIR__ . '/../../src/chapter1/ctci-1-6/ctci0106.php';

class CTCI0106Test extends \PHPUnit\Framework\TestCase {
	/**
	 * 
	 */
	public function testCompressed() {
		//Add - true
		$c = packStringSimple('aabcccccaaa');
		$this->assertTrue($c == 'a2b1c5a3');
		}
	/**
	 * 
	 */
	public function testWorthCase() {
		//Add - true
		$c = packStringSimple('abcdefg');
		$this->assertTrue($c == 'abcdefg');
		}
	/**
	 * 
	 */
	public function testMiddleCase() {
		//Add - true
		$c = packStringSimple('aabbccddeeff');
		$this->assertTrue($c == 'aabbccddeeff');
		}

	}

