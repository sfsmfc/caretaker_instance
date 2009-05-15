<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2008 Christopher Hlubek (hlubek@networkteam.com)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * The Security Manager 
 * 
 * @author Christopher Hlubek <hlubek@networkteam.com>
 * @package		TYPO3
 * @subpackage	tx_caretakerinstance
 */
interface tx_caretakerinstance_ISecurityManager {
	
	/**
	 * Decode a Command Request (decrypt, merge data)
	 *
	 * @param tx_caretakerinstance_CommandRequest $commandRequest
	 */
	function decodeRequest(tx_caretakerinstance_CommandRequest $commandRequest);

	/**
	 * Validate a Command Request (check session token, host address)
	 *
	 * @param tx_caretakerinstance_CommandRequest $commandRequest
	 */
	function validateRequest(tx_caretakerinstance_CommandRequest $commandRequest);
	
	/**
	 * Create a new session token for allowed hosts
	 *
	 * @param unknown_type $clientHostAddress
	 */
	function createSessionToken($clientHostAddress);
	
	/**
	 * Encode the result data
	 *
	 * @param string $resultData The Command Result data (e.g. JSON)
	 * @return string The encrypted Command Result data 
	 */
	function encodeResult($resultData);
}
?>