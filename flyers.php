<?php 
function flyer_post() {
ob_start();

$rows = get_field('flyers');
?>
<div class="owl-carousel owl-theme fly_wrapper">
<?php 
    if($rows){
        foreach($rows as $row){
        ?>
                <div class="item">
                    <div class="item_wrapper">
                        <div class="item_relate">
                        <div class="fly_image">
                            <img src="<?php echo $row['flyers_image'];  ?>"/>
                        </div>
                        <div class="fly_overlap">
                            <h3>DOWNLOAD</h3>
                        <a href="<?php echo $row['flyers_pdf']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="43.761" height="58.911" viewBox="0 0 43.761 58.911">
                    <g id="noun-download-1519473" transform="translate(-385.438 -311.16)">
                    <path id="Path_81" data-name="Path 81" d="M407.362,311.16a2.447,2.447,0,0,0-2.448,2.448v37.936l-15.248-15.321a2.449,2.449,0,1,0-3.463,3.463l19.433,19.433a3.1,3.1,0,0,0,.367.306h.1l.318.171h.147a1.357,1.357,0,0,0,.318.086,2.036,2.036,0,0,0,.477,0,2.237,2.237,0,0,0,.49,0,1.43,1.43,0,0,0,.306-.086h.147l.318-.171h.1l.379-.306,19.421-19.433a2.449,2.449,0,1,0-3.463-3.463l-15.248,15.26V313.608a2.447,2.447,0,0,0-2.448-2.448Z" transform="translate(-0.044)" fill="#fff"/>
                    <path id="Path_82" data-name="Path 82" d="M387.886,845.735h38.866a2.448,2.448,0,1,0,0-4.9H387.886a2.448,2.448,0,1,0,0,4.9Z" transform="translate(0 -475.664)" fill="#fff"/>
                    </g>
                    </svg>
                        </a>
                        </div>
                        </div>            
                        <div class="fly_img_text"><h3><?php echo  $row['flyers_title'] ; ?></h3></div>
                    </div>
                </div><?php
        }
    }
?>
</div>
<?php

  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}
add_shortcode('flyer_post', 'flyer_post');
