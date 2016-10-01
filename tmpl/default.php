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
<div>
<div class="yoo-features <?php echo $moduleclass_sfx;?>">
	

		<div class="serv_board"> <!--possible to improve as chooseble row type fluid/non fluid-->
	    <?php for ($i = 0; $i <= $cards-1; $i++){
					$num=$i+1;
					$yoo_main_board.= '<div id="serv_card_'.$num.'"class="yoo-feature serv_card col-lg-'.round(12/$cards).' col-md-'.round(12/$cards).' '.$class.'">';
					$yoo_main_board.= '<div class="screen"></div><!--Экран накрывающий картинку после наведения-->';
					$yoo_main_board.=	'<a><img src="'.$data[$i]['IntroPic'].'"/></a>';
					$yoo_main_board.= '</div><!--serv_card close-->';
			}
			echo $yoo_main_board;?>   
			
     </div> <!-- serv_board close-->

        <?php for ($i = 0; $i <= $cards-1; $i++) { ?>
	        <div class="serv_detail " id="serv_card_<?php echo $i+1; ?>" >
	        	<div class="info_table">
	        		<a><?php echo $data[$i]['DescText']; ?></a>
	        	</div><!--Info_table close-->
	        	 <?php if( isset($data[$i]['DescPic'])): ?>
		        	<div class="pic">
		        		<a><img src="<?php echo $data[$i]['DescPic']; ?>"/></a>
		        	</div><!--pic close-->
	        	<?php endif; ?>
	        	<div class="serv_close"></div><!--Close button-->
	        </div><!--Serv detail close-->
        <?php } // END:: array_chunk ?>

                    
		


</div><!--/.yoo-features-->

</div>