<?php
class PluginSkubs_ModuleBlog_EntityBlog extends PluginSkubs_Inherit_ModuleBlog_EntityBlog {

	/**
	 * Возвращает кол-во публикаций пользователя в блоге
	 *
	 * @return int|null
	 */
	public function getSkubs() {
		return $this->_getDataOne('blog_skubs');
	}
	/**
	 * Устанавливает кол-во публикаций пользователя в блоге
	 *
	 * @param string $data
	 */
	public function setSkubs($data) {
		$this->_aData['blog_skubs']=$data;
	}
}
?>