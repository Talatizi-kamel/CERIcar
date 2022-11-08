<?php

class mainController
{

	public static function helloWorld($request, $context)
	{
		$context->mavariable = "hello world";
		return context::SUCCESS;
	}



	public static function index($request, $context)
	{

		return context::SUCCESS;
	}



	public static function superTest($request, $context)
	{

		$context->par1 = $request['par1'];
		$context->par2 = $request['par2'];

		if (($context->par1 != null) and ($context->par2 != null)) {

			return context::SUCCESS;
		} else {

			$context->error = 'il vous manque un paramétre dans l url ';
			return context::ERROR;
		}
	}
}
