<?php

/**
 * tinymce class
 */
class Tinymce extends Knowledgeroot_Rte_Abstract {
	/**
	 * show editor with content
	 *
	 * @param string $content
	 */
	public function show($content = null) {
	    if($content != null)
		$this->content = (string) $content;

	    $res = "";
	    $res .= '<textarea style="width: 650px; height: 300px;" name="' . $this->name . '">'.htmlspecialchars($this->content).'</textarea>';
	    $res .= '
<script type="text/javascript" src="./module/tinymce/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas"
});
</script>';

	    return $res;
	}
}