<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_yoo_features
 *
 * @copyright   YooYoo.labs 2016
 * @license     GNU General Public License
 */

defined('_JEXEC') or die;

/**
 * Хелпер для mod_yoo_features
 *
 * @package     Joomla.Site
 * @subpackage  mod_yoo_features
 *
 * @since       1.0
 */
$moduleclass_sfx = $params->get('moduleclass_sfx');
// Get cards
    $cards = $params->get('cards', 4);

//Get Card data
        $data = array();
    //Card 1
    if( $params->get('IntroText1') ){
        $data[0][ 'IntroText' ]              = $params->get('IntroText1');
        $data[0][ 'IntroPic' ]             = $params->get('IntroPic1');
        $data[0][ 'DescText' ]        = $params->get('DescText1');
        $data[0][ 'DescPic' ]             = $params->get('DescPic1');
    }

    //Card 2
    if( $params->get('IntroText2') ){
        $data[1][ 'IntroText' ]              = $params->get('IntroText2');
        $data[1][ 'IntroPic' ]             = $params->get('IntroPic2');
        $data[1][ 'DescText' ]        = $params->get('DescText2');
        $data[1][ 'DescPic' ]             = $params->get('DescPic2');
    }

    //Card 3
    if( $params->get('IntroText3') ){
        $data[2][ 'IntroText' ]              = $params->get('IntroText3');
        $data[2][ 'IntroPic' ]             = $params->get('IntroPic3');
        $data[2][ 'DescText' ]        = $params->get('DescText3');
        $data[2][ 'DescPic' ]             = $params->get('DescPic3');
    }

    //Card 4
    if( $params->get('IntroText4') ){
        $data[3][ 'IntroText' ]              = $params->get('IntroText4');
        $data[3][ 'IntroPic' ]             = $params->get('IntroPic4');
        $data[3][ 'DescText' ]        = $params->get('DescText4');
        $data[3][ 'DescPic' ]             = $params->get('DescPic4');
    }

?>