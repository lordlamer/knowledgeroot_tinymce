<?php

/**
 * module bootstrap
 */
class TinymceBootstrap extends Knowledgeroot_Module_Bootstrap_Abstract {
    public function _initTinymce() {
	// init tinymce
	$tinymce = new Tinymce();

	// save ckeditor as default editor
	Knowledgeroot_Registry::set('rte', $tinymce);
    }
}
