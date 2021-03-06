<?php
/**
* 
*/

# Define namespace
namespace WCFE\Modules\Editor\View\Editor\Templates\Fields\MultiSiteSubDomainInstall;

# Input field base
use WCFE\Modules\Editor\View\Editor\Fields\CheckboxField;

/**
* 
*/
class Field extends CheckboxField {

	/**
	* put your comment there...
	* 
	*/
	public function getText() {
		return $this->_( 'Enable Sub Domains' );
	}
	
	/**
	* put your comment there...
	* 
	*/
	public function getTipText() {
		return $this->_( 'Use sub domains for network sites' );
	}

	/**
	* put your comment there...
	* 
	*/
	protected function getValue() {
		return 1;
	}

}
