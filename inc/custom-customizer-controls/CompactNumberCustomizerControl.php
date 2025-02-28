<?php


// CompactNumberCustomizerControl
// assuming all ctrls are a single setting, to reduce footprint of ctrls, we want option
// to display label and input side-by-side - simply displays label and input side-by-side

class CompactNumberCustomizerControl extends WP_Customize_Control {

   public $type = 'compact_number_customizer_control';

   public function render_content() {
      ?>
      <?php if($this->label !== "") {?>
         <div class="wda_customizer_ctrl_label"><h4><?php echo $this->label; ?></h4></div>
      <?php }?>

      <div class="wda_compact_number_customizer_ctrl">
         <?php if(!empty($this->description)) { ?>
            <div class="customize-control-description">
               <?php echo wp_kses_post($this->description );?>
            </div>
         <?php } ?>
         <input 
            id="_customize-input-<?php echo $this->id;?>" 
            type="number" 
            aria-describedby="_customize-description-<?php echo $this->id; ?>" 
            min="0" 
            max="<?php echo $this->input_attrs['max']; ?>" 
            step="<?php echo $this->input_attrs['step']; ?>"
            class="wda_compact_number_customizer_ctrl_input"
            value="<?php echo esc_attr($this->value()); ?>"  
            data-customize-setting-link="<?php echo $this->id; ?>">
      </div>

      <?php
      // future : keep reference to link() here - likely important in some scenarios but not needed for now
      // <div><?php // echo $this->link();</div>
     
   }
}

