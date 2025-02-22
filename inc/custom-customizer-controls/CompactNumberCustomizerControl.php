<?php


// CompactNumberCustomizerControl
// assuming all ctrls are a single setting, to reduce footprint of ctrls, we want option
// to display label and input side-by-side - simply displays label and input side-by-side

class CompactNumberCustomizerControl extends WP_Customize_Control {

   public $type = 'compact_number_customizer_control';

   public function render_content() {

      // to do : 
      // - move inline styles to css files
      // - rollout : make sure all comments are in php (a) don't show in client-side (b) more importantly, will show up as errors in my code editor
      // - review source code client-side - tidy as needed
      // - need to use label - or separate control? 
      // - current label is too similar to input box - cf eg menu customizer labels : rollout to all Custom Controls w/ label
      ?>
      <?php if($this->label !== "") {?>
         <div style="margin-bottom:.5rem;background:white;"><h4 style="margin:0;padding:.25rem;font-weight:200;font-size:1rem;"><?php echo $this->label; ?></h4></div>
      <?php }?>

      <div class="flex" style="display:flex;align-items:center;gap:1rem;min-width:100%;">
         <?php if(!empty($this->description)) { ?>
            <div class="customize-control-description" style="width:50%;height:fit-content;">
               <?php echo wp_kses_post($this->description );?>
            </div>
         <?php } ?>
         <?php // if( !empty( $this->label ) ) to do : ??? { ?>
         <input 
            id="_customize-input-<?php echo $this->id;?>" 
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

      <?php
      // future : keep reference to link() here - likely important in some scenarios but not needed for now
      // <div><?php // echo $this->link();</div>
     
   }
}

