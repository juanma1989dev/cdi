<?php namespace CDI\Modules;
	
	use Illuminate\Support\ServiceProvider;

	class ResponseDataServiceProvider extends ServiceProvider
	{
		public function register()
		{
			$this->app['ResponseData'] = $this->app->share( function( $app )
			{
				$ResponseData = new ResponseData( $app['redirect'] );
				return $ResponseData;
			});
		}
	}
	
?>