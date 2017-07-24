<?php

namespace App\Http\Controllers;

use App\Classes\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class CubeController extends Controller
{
    private $results = array();

    public function index(Request $request)
    {
    	//If there is nothing in the input, it will return the home(welcome view)
		if( empty($request->input) ){
			return view('welcome',['noInput' => 'Nothing to submit.']);
			/*$data =  \Corcel\Page::slug('sample-page')->first();
    		return view('home')->with('data', $data);*/
		}

		$userInput = $this->inputToArray($request->input);
		$count = 0;
		$T = (int) $userInput[$count++];
		// loop each test case 
		for ($i=0; $i < $T ; $i++) {
			$tmp = explode(' ', $userInput[$count++]);
			$N = (int) $tmp[0]; // Get N matrix
			$M = (int) $tmp[1]; // Get operations
			$commands = array_slice($userInput,$count,$M);
			// Do a test case
			$testCase = new TestCase($N,$M,$commands);
			$testCase->run();
			$count = $count + $M;
			// fecth the results 
			foreach ($testCase->results() as $result) {
				$this->results[] = $result;
			}
		}
		// return view and results
		return view('welcome',['results' => $this->results]);
    }

    private function inputToArray($input)
    {
		$text = trim($input);
		// get each line into an array
		$textArray = explode("\n", $text);

		return array_filter($textArray, 'trim');
    }
}