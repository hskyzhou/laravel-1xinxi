<?php 
	namespace Hsky\XinXi\Facades;

	use Illuminate\Support\Facades\Facade;

	class XinXiFacade extends Facade
	{

	    /**
	     * Get the registered name of the component.
	     *
	     * @return string
	     */
	    protected static function getFacadeAccessor()
	    {
	        return 'xinxi';
	    }
	}
