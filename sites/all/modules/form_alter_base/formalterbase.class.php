<?php
abstract class FormAlterBase {
	protected $form;
	protected $form_state;
	protected $form_id;

	static protected $checks;
	static protected $debug = false;

	/**
	 * The constructor. Assigns the form data to object.
	 */
	public function __construct(&$form, &$form_state, $form_id) {
		$this->form = &$form;
		$this->form_state = &$form_state;
		$this->form_id = $form_id;

		if (static::$debug && module_exists('devel')) {
			dpm($this->form_id);
			dpm($this->form);
		}

		if (!isset(static::$checks)) {
			static::$checks = array();
			$reflection = new ReflectionClass(get_class($this));
			foreach ($reflection->getMethods() as $method) {
				$comment = $method->getDocComment();
				if ($comment && preg_match('/@type\s+check/m', $comment, $matches)) {
					if (preg_match('/@require\s+(.+)\s+$/m', $comment, $matches))
						if (!module_exists($matches[1]))
							continue;
					static::$checks[] = $method->name;
				}
			}
		}
	}


	/**
	 * Processes the form using this object's protected methods
	 */
	public function process() {
		foreach (static::$checks as $check) {
			if (!method_exists($this, $check))
				continue;
			$method = $this->$check();
			if ($method && method_exists($this, $method)) {
				$this->$method();
				return;
			}
		}
	}


	/**
	 * Checks form alters matching the exact form_id
	 * @type check
	 */
	protected function check_form_id() {
		return $this->form_id;
	}


	/**
	 * Checks form alters matching node_ID format
	 * @type check
	 */
	protected function check_node_id() {
		if (preg_match('/node_\d+/', $this->form_id))
			return preg_replace('/node_\d+/', 'node', $this->form_id);
		return false;
	}


	/**
	 * Checks form alters matching exposed forms from views
	 * @type check
	 */
	protected function check_views_exposed_form() {
		if ($this->form_id == 'views_exposed_form')
			return $this->form['#theme'][0];
		return false;
	}


	/**
	 * Checks form alters matching webform client forms
	 * @type check
	 * @require webform
	 */
	protected function check_webform_client_form() {
		// Keeping node IDs hardcoded sucks, so we check for methods
		// that include the webform's name - slugified
		if (preg_match('/webform_client_form_\d+/', $this->form_id)) {
			module_load_include('inc', 'pathauto');
			$name = preg_replace('/[^a-z0-9_]/i', '_', pathauto_cleanstring($this->form['#node']->title));
			return "webform_client_form_{$name}";
		}
		return false;
	}
}

