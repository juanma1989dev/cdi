<?php namespace CDI\Modules;

use Illuminate\Routing\Redirector as Redirect;
use Illuminate\Support\Facades\Response as ResponseBase;

class ResponseData 
{
	protected  $redirect;

	public function __construct( Redirect $redirect )
	{
		$this->redirect = $redirect;
	}

	public function ajax( $entity, $nameFunction, $values = null, $dataResponse = null )
	{



		if ( \Request::ajax() ) 
		{
			$data = call_user_func_array(array($entity, $nameFunction), array( $values ));

			// switch ( $nameFunction ) 
			// {
			// 	case 'store':
			// 		$data = $entity->store( $values );					
			// 		break;

			// 	case 'delete':
			// 		$entity->delete( $values );
			// 		$data = null; //checar esto
			// 		break;

			// 	default:
			// 		return false;
			// 		break;
			// }

			if (  $entity->getSuccess() ) 
			{
				return \Response::json(array('success' => true, $dataResponse => $data));
			}
			return \Response::json(array('success' => false, 'errors' => $data));
		}
	}

	public function html( $entity, $nameFunction, $route, $values = null, $dataResponse = null)
	{	
		$data = $entity->update( $values[0], $values[1]  );


		if ( $entity->getSuccess() ) 
		{
			return $this->redirect->to( $route );
		}

		return  $this->redirect->to( $route .'/' . $values[0] )->withErrors( $data );
	}

}