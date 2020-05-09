
 <?php
/*
 * inwidget - плагин виджета instagram.com - https://tcse-cms.com/works/ 
 *
 * @author     Talik <talik@tcse-cms.com>
 */

if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
	die('Hacking attempt!');
}
/**
 * @global $member_id
 */

define('MODULE_DIR', ENGINE_DIR . '/modules/mod_tcse/inwidget');

echoheader('inwidget', 'inwidget - плагин виджета instagram.com');

include MODULE_DIR . '/admin/main.php';

include MODULE_DIR . '/admin/footer.php';

echofooter();

