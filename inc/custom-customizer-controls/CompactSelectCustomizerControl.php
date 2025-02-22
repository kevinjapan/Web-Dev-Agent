<?php

// CompactSelectCustomizerControl
// assuming all ctrls are a single setting, to reduce footprint of ctrls, we want option
// to display label and input side-by-side - simply displays label and input side-by-side

// to do : should data-customize-setting-link be $this->link() rather than $this->id
// to do : apply selected="selected" to appropriate <option>


class CompactSelectCustomizerControl extends WP_Customize_Control {

   public $type = 'compact_select_customizer_control';

   public function render_content() {

      // to do : need to use label - or separate control?
      ?>
      <?php if($this->label !== "") {?>
         <div style="margin-bottom:.5rem;background:white;"><h4 style="margin:0;padding:.25rem;font-weight:200;font-size:1rem;"><?php echo $this->label;?></h4></div>
      <?php }?>

      <div class="flex" style="display:flex;align-items:center;gap:1rem;min-width:100%;">
         <?php if(!empty($this->description)) { ?>
            <div class="customize-control-description" style="width:50%;height:fit-content;">
               <?php echo wp_kses_post($this->description );?>
            </div>
         <?php } ?>
         <select 
            id="_customize-input-<?php echo $this->id;?>" 
            aria-describedby="_customize-description-<?php echo $this->id;?>" 
            data-customize-setting-link="<?php echo $this->id;?>">
               <?php
                  foreach($this->choices as $key => $value) {
                     ?>
                     <option value="<?php echo $key;?>"><?php echo $value;?></option>
                     <?php
                  }
               ?>
         </select>

      </div>
      
      <?php

   }

}