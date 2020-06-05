<?php

class SpecialGlobalNewFiles extends SpecialPage {

	function __construct() {
		parent::__construct( 'GlobalNewFiles' );
	}

	function execute( $par ) {
		$this->setHeaders();
		$this->outputHeader();

		$pager = new GlobalNewFilesPager();
		$pager->getFullOutput();
	}

	protected function getGroupName() {
		return 'other';
	}
}
