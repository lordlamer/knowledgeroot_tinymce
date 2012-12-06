<?php

/**
 * module bootstrap
 */
class TinymceBootstrap extends Knowledgeroot_Module_Bootstrap_Abstract {
    public function _initTinymce() {
	// init tinymce
	$tinymce = new TinymceModule_Tinymce();

	// save ckeditor as default editor
	Knowledgeroot_Registry::set('rte', $tinymce);
    }
}
