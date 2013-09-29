<?php

class PluginSkubs_ModuleSkubs extends Module {
	
	protected $oMapper;

	public function Init() {
		$this->oMapper = Engine::GetMapper(__CLASS__);
	}

	public function GetSkubStat($sUserId,$iLimit) {
		if (false === ($data = $this->Cache_Get("plugin_skub_{$sUserId}_{$iLimit}"))) {
			$data = $this->oMapper->GetSkubStat($sUserId,$iLimit);
			$this->Cache_Set($data, "plugin_skub_{$sUserId}_{$iLimit}", array('blog_update',"blog_relation_change_{$sUserId}"), 60*60*24);
		}
		return $data;
	}

}
?>
