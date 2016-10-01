<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_yoo_features
 *
 * @copyright   YooYoo.labs 2016
 * @license     GNU General Public License
 */

defined('_JEXEC') or die;

$displayMode = $params->get('display_mode', 0);
?>

<div class="yoo-features <?php echo $moduleclass_sfx;?>">
	<div class="serv_board "> <!--possible to improve as chooseble row type fluid/non fluid-->
	    <?php for ($i = 0; $i <= $cards-1; $i++){
					$num=$i+1;
					$yoo_main_board.= '<div id="serv_card_'.$num.'"class="yoo-feature  serv_card col-lg-'.round(12/$cards).' col-md-'.round(12/$cards).' '.$class.'" ontouchstart="this.classList.toggle(\"hover\");">';
						$yoo_main_board.='<div class="flipper">';
							//$yoo_main_board.='<div class="screen"></div><!--Экран накрывающий картинку после наведения-->';
							$yoo_main_board.='<div class="serv_card_front">';
								$yoo_main_board.='<a><img src="'.$data[$i]['IntroPic'].'"/></a>';
							$yoo_main_board.='</div>';

							$yoo_main_board.='<div class="serv_card_back" id="serv_card_'.$num.'" >';
								$yoo_main_board.='<div class="info_table">';
									$yoo_main_board.='<a>'.$data[$i]['DescText'].'</a>';
								$yoo_main_board.='</div><!--Info_table close-->';
								if( isset($data[$i]['DescMore'])){
									$yoo_main_board.='<button class="more_button"><a>more</a></button>';//ADD more button
								}
							$yoo_main_board.='</div><!--Serv detail close-->';
						$yoo_main_board.='</div>';//flipper close
					$yoo_main_board.= '</div>';//serv_card close
			}
			echo $yoo_main_board;?>   
     </div> <!-- serv_board close-->
</div><!--/.yoo-features-->

