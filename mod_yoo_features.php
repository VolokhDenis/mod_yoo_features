<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_yoo_features
 *
 * @copyright   YooYoo.labs 2016
 * @license     GNU General Public License
 */
defined('_JEXEC') or die;
// подключаем наш хелпер
require_once __DIR__ . '/helper.php';  

 
//вызываем метод getFeatures(), который находится в хелпере 
//(извлекает из базы данных нужную нам информацию)
$document = JFactory::getDocument();
 
// Подключаем стили
if ($params->get('include_css', 1))
{
   $document->addStyleSheet('modules/mod_yoo_features/media/css/yoo-features.css','text/css',"screen");
}
//Подключаем скрипты

if ($params->get('include_jquery', 1))
{
    $document->addScript('modules/mod_yoo_features/media/js/jquery-1.11.3.min.js','text/javascript', true);
}
if ($params->get('include_jquery_easing', 1))
{
    $document->addScript('modules/mod_yoo_features/media/js/jquery.easing.1.3.min.js', 'text/javascript', true);
}
if ($params->get('include_js', 1))
{
    $document->addScript('modules/mod_yoo_features/media/js/yoo-features.js', 'text/javascript', true);
}



//подключаем html-шаблон для вывода содержания модуля (шаблон default).
require JModuleHelper::getLayoutPath('mod_yoo_features', $params->get('layout', 'default'));

?>
