<?php
namespace App\Classes;

use App\Cube;
use App\Classes\QueryCommand;
use App\Classes\UpdateCommand;

class TestCase
{
	const UPDATE_COMMAND = "UPDATE";
	const QUERY_COMMAND = "QUERY";
	private $cube;
	private $commands;
	private $numberOfOperations;
	private $results = array();

	public function __construct($N,$M,$commands)
	{	
		//Init cube and get the others params
		$this->cube = new Cube($N);
		$this->commands = $commands;
		$this->numberOfOperations = $M;
	}

	public function run()
	{
		//loop number of operations
		for ($i=0; $i < $this->numberOfOperations ; $i++) {
			$command = explode(' ',$this->commands[$i]); // Explode to get each command line
			$operation = $command[0]; // Get UPDATE or QUERY
			// Depend on what command/operation 
			// Get coordinates and execute command
			// Set a varibale($this->results) with results
			switch ($operation) {
			case self::UPDATE_COMMAND:
				$x = $command[1]; $y = $command[2]; $z = $command[3];
				$W = $command[4];
				$updateCommand = new UpdateCommand($this->cube,$x,$y,$z,$W);
				$updateCommand->execute();
				$this->results[] = $updateCommand->results();
				break;
			case self::QUERY_COMMAND:
				$x1 = $command[1]; $y1 = $command[2]; $z1 = $command[3];
				$x2 = $command[4]; $y2 = $command[5]; $z2 = $command[6];
				$queryCommand = new QueryCommand($this->cube,$x1,$y1,$z1,$x2,$y2,$z2);
				$queryCommand->execute();
				$this->results[] = $queryCommand->results();
				break;
			default:
				$this->results[] = "Bad input.";
				break;
		  }
		}
	}

	public function results()
	{
		return $this->results;
	}
}