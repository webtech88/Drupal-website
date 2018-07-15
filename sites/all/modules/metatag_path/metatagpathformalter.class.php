<?php
module_load_include('class.php', 'form_alter_base', 'formalterbase');

class MetatagPathFormAlter extends FormAlterBase {
	#static protected $debug = true;

	/**
	 * Alters commend form for blog node type.
	 * Removes author information for logged in users
	 * and title of comment textarea.
	 */
	protected function metatagpath_form() {
		$this->form['metatags']['#collapsible'] = false;
	}
}
