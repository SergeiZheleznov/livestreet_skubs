<?php
/**
 * Конфиг
 */

$config = array();

// Переопределить имеющуюся переменную в конфиге:
// Переопределение роутера на наш новый Action - добавляем свой урл  http://domain.com/skubs
// Config::Set('router.page.skubs', 'PluginSkubs_ActionSkubs');

// Добавить новую переменную:
$config['blogs_limit'] = 10;
// Эта переменная будет доступна в плагине как Config::Get('plugin.skubs.per_page')

return $config;
