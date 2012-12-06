<?php

/**
 * tinymce module initialisation
 */
class TinymceModule implements Knowledgeroot_Module_Interface {
	/**
	 * return tinymce config path
	 */
	public function getConfigPath() {
		return __DIR__ . '/config/module.ini';
	}
}
