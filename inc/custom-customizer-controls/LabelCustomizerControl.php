<?php


// LabelCustomizerControl

class LabelCustomizerControl extends WP_Customize_Control {

   public $type = 'compact_customizer_control';

   public function render_content() {
      ?>
      <div class="flex" style="display:flex;align-items:center;gap:1rem;min-width:100%;">
         TEST<?php echo $this->label; ?>
      </div>
      <?php
   }
}

