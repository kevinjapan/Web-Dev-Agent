<?php

// CompactNumberCustomizerControl
// assuming all ctrls are a single setting, to reduce footprint of ctrls, we want option
// to display label and input side-by-side - simply displays label and input side-by-side

// to do 
// - adapt to handle simple input w/ range selection.. as orig ctrl.
// - move inline styles to css


class CompactNumberCustomizerControl extends WP_Customize_Control {

   public $type = 'compact_customizer_control';

   public function render_content() {
      ?>
      <!-- to do : need to use label - or separate control? -->
      <!--div style="margin-bottom:.5rem;"><?php echo $this->label; ?></div-->
      
      <div class="flex" style="display:flex;align-items:center;gap:1rem;min-width:100%;">
         <?php if(!empty($this->description)) { ?>
            <div class="customize-control-description" style="width:50%;height:fit-content;">
               <?php echo wp_kses_post($this->description ); ?>
            </div>
         <?php } ?>
         <?php // if( !empty( $this->label ) ) { ?>
         <input 
            id="_customize-input-<?php echo $this->id; ?>" 
            type="number" 
            aria-describedby="_customize-description-<?php echo $this->id; ?>" 
            min="0" 
            max="<?php echo $this->input_attrs['max']; ?>" 
            step="<?php echo $this->input_attrs['step']; ?>" 
            style="width: 60px;" 
            value="<?php echo esc_attr($this->value()); ?>"  
            data-customize-setting-link="<?php echo $this->id; ?>">

         <?php // } ?>
      </div>

      <!-- future : keep reference to link() here - likely important in some scenarios but not needed for now -->
      <!-- <div><?php // echo $this->link(); ?></div> -->
     
      <?php
   }
}

