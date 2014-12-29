<?php namespace CDI\Modules;

	use Illuminate\Support\Facades\Facade;

	class Response  extends Facade
	{
		protected static function getFacadeAccessor()
		{
			return 'ResponseData';
		}
	}

?>