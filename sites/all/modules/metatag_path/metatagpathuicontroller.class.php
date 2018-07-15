<?php
class MetaTagPathUIController extends EntityDefaultUIController {
	/**
	 * Overrides hook_menu() defaults.
	 */
	public function hook_menu() {
		$items = parent::hook_menu();
		$items[$this->path]['title'] = t('Paths');
		$items[$this->path]['type'] = MENU_LOCAL_TASK;
		return $items;
	}

	/**
	 * Overrides overvewTableHeaders() implementation.
	 * Adds an 'alias' column.
	 */
	public function overviewTableHeaders($conditions, $rows, $additional_header=array()) {
		$headers = parent::overviewTableHeaders($conditions, $rows, $additional_header);
		array_unshift($headers, t('Alias'));
		$headers[1] = t('Path');
		return $headers;
	}

	/**
	 * Overrides overvewTableRow() implementation.
	 * Adds an 'alias' column.
	 */
	public function overviewTableRow($conditions, $id, $entity, $additional_cols=array()) {
		$row = parent::overviewTableRow($conditions, $id, $entity, $additional_cols);
		$alias = drupal_get_path_alias($entity->path);
		$link = l("/{$alias}", $entity->path);
		array_unshift($row, $link);
		return $row;
	}
}
