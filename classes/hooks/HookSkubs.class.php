<?php

class PluginSkubs_HookSkubs extends Hook {

    /*
     * Регистрация событий на хуки
     */
    public function RegisterHook() {
        $this->AddHook('template_profile_whois_activity_item', 'InsertSkubStat');
    }

    public function InsertSkubStat($aData) {
        $oUser = $aData['oUserProfile'];
        $this->Viewer_Assign('aSkubBlogs',$this->PluginSkubs_ModuleSkubs_GetSkubStat($oUser->getId(),Config::Get('plugin.skubs.blogs_limit')));
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'skubs.tpl');
    }
}
?>
