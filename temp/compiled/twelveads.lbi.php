
<script type="text/javascript" src="themes/ningbo/js/jssor.core.js"></script>
<script type="text/javascript" src="themes/ningbo/js/jssor.utils.js"></script>
<script type="text/javascript" src="themes/ningbo/js/jssor.slider.js"></script>
<script>
	jQuery(document).ready(function ($) {
		var options = {
			$AutoPlay: true,
			$AutoPlaySteps: 1,
			$AutoPlayInterval: 4000,
			$PauseOnHover: 1,
			$ArrowKeyNavigation: false,
			$SlideDuration: 0,
			$MinDragOffsetToSlide: 20,
			$SlideSpacing: 5,
			$DisplayPieces: 1,
			$ParkingPosition: 0,
			$UISearchMode: 1,
			$PlayOrientation: 1,
			$DragOrientation: 0,
			$ThumbnailNavigatorOptions: {
				$Class: $JssorThumbnailNavigator$,
				$ChanceToShow: 2,
				$Loop: 2,
				$AutoCenter: 3,
				$Lanes: 1,
				$SpacingX: 0,
				$SpacingY: 0,
				$DisplayPieces: 4,
				$ParkingPosition: 0,
				$Orientation: 2,
				$DisableDrag: true
			}
		};

		var jssor_slider1 = new $JssorSlider$("slider1_container", options);
		var jssor_slider2 = new $JssorSlider$("slider2_container", options);
		var jssor_slider3 = new $JssorSlider$("slider3_container", options);
		var jssor_slider4 = new $JssorSlider$("slider4_container", options);

		
	});
</script>
	<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 302.33px; height: 90px; background: #eee; overflow: hidden; float: left;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #fff; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/ningbo/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <div u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px; width: 233.33px; height: 90px;
            overflow: hidden;">
            <?php $_from = $this->_var['three_each_0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98032000_1488473628');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_98032000_1488473628']):
?>
            <div>
                <div class="kjContInner" style="display: block;">
                    <div class="kjAdImg">
                        <a title="<?php echo $this->_var['goods_0_98032000_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98032000_1488473628']['url']; ?>"><img alt="<?php echo $this->_var['goods_0_98032000_1488473628']['name']; ?>" src="<?php echo $this->_var['goods_0_98032000_1488473628']['thumb']; ?>"></a>
                    </div>
                     <a class="kjAdCover" title="<?php echo $this->_var['goods_0_98032000_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98032000_1488473628']['url']; ?>"><img alt="trp" src="themes/ningbo/images/empty.png"></a>
                    <ul>
                        <li class="yh18 kjAdCred">
                        <span class="kjAdPrice"><?php if ($this->_var['goods_0_98032000_1488473628']['promote_price'] != ''): ?><?php echo $this->_var['goods_0_98032000_1488473628']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_98032000_1488473628']['shop_price']; ?><?php endif; ?></span>
                        <span style="display:none"></span>
                        </li>
                        <li class="kjAdCred"><span style="display:none"></span></li>
                        <li class="kjAdName"><?php echo $this->_var['goods_0_98032000_1488473628']['name']; ?></li>
                    </ul>
                </div>
                <div u="thumb">
                    <div class="t"><?php echo $this->_var['goods_0_98032000_1488473628']['cat_name']; ?></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
		
		 <div u="thumbnavigator" class="jssort11" style="position: absolute; width: 68px; height: 90px; left:233px; top:0px;">
		 <div u="slides" style="cursor: pointer;">
                <div u="prototype" class="p" style="position: absolute; width: 68px; height: 30px; top: 0; left: 0px;">
                    <thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
                </div>
            </div>
        </div>
    </div>
    
    <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 302.33px; height: 90px; background: #eee; overflow: hidden; float: left;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #fff; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/ningbo/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <div u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px; width: 233.33px; height: 90px;
            overflow: hidden;">
            <?php $_from = $this->_var['three_each_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98082400_1488473628');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_98082400_1488473628']):
?>
            <div>
                <div class="kjContInner" style="display: block;">
                    <div class="kjAdImg">
                        <a title="<?php echo $this->_var['goods_0_98082400_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98082400_1488473628']['url']; ?>"><img alt="<?php echo $this->_var['goods_0_98082400_1488473628']['name']; ?>" src="<?php echo $this->_var['goods_0_98082400_1488473628']['thumb']; ?>"></a>
                    </div>
                     <a class="kjAdCover" title="<?php echo $this->_var['goods_0_98082400_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98082400_1488473628']['url']; ?>"><img alt="trp" src="themes/ningbo/images/empty.png"></a>
                    <ul>
                        <li class="yh18 kjAdCred">
                        <span class="kjAdPrice"><?php if ($this->_var['goods_0_98082400_1488473628']['promote_price'] != ''): ?><?php echo $this->_var['goods_0_98082400_1488473628']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_98082400_1488473628']['shop_price']; ?><?php endif; ?></span>
                        <span style="display:none"></span>
                        </li>
                        <li class="kjAdCred"><span style="display:none"></span></li>
                        <li class="kjAdName"><?php echo $this->_var['goods_0_98082400_1488473628']['name']; ?></li>
                    </ul>
                </div>
                <div u="thumb">
                    <div class="t"><?php echo $this->_var['goods_0_98082400_1488473628']['cat_name']; ?></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
		
		 <div u="thumbnavigator" class="jssort11" style="position: absolute; width: 68px; height: 90px; left:233px; top:0px;">
		 <div u="slides" style="cursor: pointer;">
                <div u="prototype" class="p" style="position: absolute; width: 68px; height: 30px; top: 0; left: 0px;">
                    <thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
                </div>
            </div>
        </div>
    </div>
    
    <div id="slider3_container" style="position: relative; top: 0px; left: 0px; width: 302.33px; height: 90px; background: #eee; overflow: hidden; float: left;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #fff; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/ningbo/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <div u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px; width: 233.33px; height: 90px;
            overflow: hidden;">
            <?php $_from = $this->_var['three_each_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98131300_1488473628');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_98131300_1488473628']):
?>
            <div>
                <div class="kjContInner" style="display: block;">
                    <div class="kjAdImg">
                        <a title="<?php echo $this->_var['goods_0_98131300_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98131300_1488473628']['url']; ?>"><img alt="<?php echo $this->_var['goods_0_98131300_1488473628']['name']; ?>" src="<?php echo $this->_var['goods_0_98131300_1488473628']['thumb']; ?>"></a>
                    </div>
                     <a class="kjAdCover" title="<?php echo $this->_var['goods_0_98131300_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98131300_1488473628']['url']; ?>"><img alt="trp" src="themes/ningbo/images/empty.png"></a>
                    <ul>
                        <li class="yh18 kjAdCred">
                        <span class="kjAdPrice"><?php if ($this->_var['goods_0_98131300_1488473628']['promote_price'] != ''): ?><?php echo $this->_var['goods_0_98131300_1488473628']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_98131300_1488473628']['shop_price']; ?><?php endif; ?></span>
                        <span style="display:none"></span>
                        </li>
                        <li class="kjAdCred"><span style="display:none"></span></li>
                        <li class="kjAdName"><?php echo $this->_var['goods_0_98131300_1488473628']['name']; ?></li>
                    </ul>
                </div>
                <div u="thumb">
                    <div class="t"><?php echo $this->_var['goods_0_98131300_1488473628']['cat_name']; ?></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
		
		 <div u="thumbnavigator" class="jssort11" style="position: absolute; width: 68px; height: 90px; left:233px; top:0px;">
		 <div u="slides" style="cursor: pointer;">
                <div u="prototype" class="p" style="position: absolute; width: 68px; height: 30px; top: 0; left: 0px;">
                    <thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
                </div>
            </div>
        </div>
    </div>
    
    <div id="slider4_container" style="position: relative; top: 0px; left: 0px; width: 302.33px; height: 90px; background: #eee; overflow: hidden; float: left;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #fff; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/ningbo/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <div u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px; width: 233.33px; height: 90px;
            overflow: hidden;">
            <?php $_from = $this->_var['three_each_3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98180300_1488473628');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_98180300_1488473628']):
?>
            <div>
                <div class="kjContInner" style="display: block;">
                    <div class="kjAdImg">
                        <a title="<?php echo $this->_var['goods_0_98180300_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98180300_1488473628']['url']; ?>"><img alt="<?php echo $this->_var['goods_0_98180300_1488473628']['name']; ?>" src="<?php echo $this->_var['goods_0_98180300_1488473628']['thumb']; ?>"></a>
                    </div>
                     <a class="kjAdCover" title="<?php echo $this->_var['goods_0_98180300_1488473628']['name']; ?>" target="_blank" href="<?php echo $this->_var['goods_0_98180300_1488473628']['url']; ?>"><img alt="trp" src="themes/ningbo/images/empty.png"></a>
                    <ul>
                        <li class="yh18 kjAdCred">
                        <span class="kjAdPrice"><?php if ($this->_var['goods_0_98180300_1488473628']['promote_price'] != ''): ?><?php echo $this->_var['goods_0_98180300_1488473628']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_98180300_1488473628']['shop_price']; ?><?php endif; ?></span>
                        <span style="display:none"></span>
                        </li>
                        <li class="kjAdCred"><span style="display:none"></span></li>
                        <li class="kjAdName"><?php echo $this->_var['goods_0_98180300_1488473628']['name']; ?></li>
                    </ul>
                </div>
                <div u="thumb">
                    <div class="t"><?php echo $this->_var['goods_0_98180300_1488473628']['cat_name']; ?></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
		
		 <div u="thumbnavigator" class="jssort11" style="position: absolute; width: 68px; height: 90px; left:233px; top:0px;">
		 <div u="slides" style="cursor: pointer;">
                <div u="prototype" class="p" style="position: absolute; width: 68px; height: 30px; top: 0; left: 0px;">
                    <thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
                </div>
            </div>
        </div>
    </div>