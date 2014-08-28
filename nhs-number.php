<?php

/*
 * NHS Number Validation
 * Validates a NHS number and returns whether it is valid or not.
 *
 * @version: 1.0-stable
 * @author: Nathaniel Blackburn
 * @support: support@nblackburn.uk
 * @website: http://nblackburn.uk
*/
class NHSNumber
{
	public function __construct($number)
	{
		$this->number = substr($number, 0, 9);
		$this->length = strlen($number);
		$this->checkbit = substr($number, (strlen($number) - 1), 1);
		$this->valid = ($this->length == 10 && $this->calc_checkbit()) ? true : false;
	}
    
	/*
	* Calculate checkbit
	* Calculates the checkbit of the NHS number.
	* @return bool Returns true if the checkbit matches and false otherwise.
	*/
	private function calc_checkbit()
	{
		$length = strlen($this->number);
		$modulus = 11;
		$total = 0;
		
		// multiply the digit index by the negative position of the digit (length - index) and add it to the total.
		for($index = 0; $index < $length; $index++)
		    $total += ($this->number[$index] * ($modulus - ($index + 1)));
		
		$checkbit = ($modulus - ($total % $modulus));
		
		// if the checkbit is equal to ten, then modify it to zero to keep it within scope (0-9).
		if ($checkbit === 11)
		    $checkbit = 0;
		
		return ($checkbit !== 10 && $checkbit == $this->checkbit) ? true : false;
	}
}
