<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.org/
 * Date: 28.01.2017
 * Time: 19:17
 * Update: -
 * Version: 0.0.1
 *
 * Notes: Contains the DHL_Receiver class
 */

/**
 * Class DHL_Receiver
 */
class DHL_Receiver extends DHL_SendPerson {

	/**
	 * Returns a Class for the DHL-SendPerson
	 *
	 * @return StdClass - DHL-SendPerson-class
	 */
	public function getClass_v1() {
		// TODO: Implement getClass_v1() method.
	}

	/**
	 * Returns a Class for the DHL-SendPerson
	 *
	 * @return StdClass - DHL-SendPerson-class
	 */
	public function getClass_v2() {
		$class = new StdClass;
		// TODO: Implement getClass_v2() method.
		return $class;
	}
}
