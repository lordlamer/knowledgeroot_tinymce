<?php

/**
 * tinymce class
 */
class TinymceModule_Tinymce implements Knowledgeroot_Rte_Interface {
	/**
	 * show editor with content
	 *
	 * @param string $content
	 */
	public function show($content) {
	    $res = "";
	    $res .= '<textarea style="width: 650px; height: 300px;" name="content">'.htmlspecialchars($content).'</textarea>';
	    $res .= '<script type="text/javascript" src="./module/tinymce/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas"
});
</script>';

	    return $res;
	}
}