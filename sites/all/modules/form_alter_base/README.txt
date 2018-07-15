Form Alter Base changes the way you think about form alters. You no longer have to create long implementations of hook_form_alter with a ton of if statements or a very long switch. It packs it all in a nice base class, which helps you write very clean code.

Example extending class can look like this:

<?php
class MyModuleFormAlter extends FormAlterBase {
	/**
	 * Checks form alters matching petition signature form
	 * @type check
	 */
	protected function check_petition_signature() {
		// Petition signature forms all look the same, so we only use one method to alter all of them
		if (!method_exists($this, $method) && preg_match('/petition_signature_form_\d+/', $this->form_id))
			return 'petition_signature_form';
		return false;
	}


	/**
	 * Alters petition signature form
	 */
	protected function petition_signature_form() {
		// Changes order of some fields
		foreach (array('name', 'email', 'town', 'title') as $i => $field)
			$this->form['signature'][$field]['#weight'] = $i;
	}


	/**
	 * Alters Event node form
	 */
	protected function event_node_form() {
		// Make city and street not required for this node type.
		$this->form['field_city'][0]['#required'] = true;
		$this->form['field_street'][0]['#required'] = true;
	}
}
?>

All you have to do is to put the class somewhere in your module (i suggest keeping it in separate file and loading it with require_once at the top of your .module file).

By default, the following checks are performed:

* form_id - the method name equal to form id, useful for example when altering forms that only have one instance
* node_id - when form_id contains the string node_123 (123 being node ID); the id gets truncated
* views_exposed_form - adds view and display names to method name; views_exposed_form__view_name__display_name
* webform_client_form - adds slugified node title to method name; webform_client_form_title

As seen in the example code above, it's pretty easy to add your own checks. The only requirement is that the method has a DocBlock with '@type check'. The returned value should be either a string with method name to check, or false if the form_id doesn't match defined pattern.
