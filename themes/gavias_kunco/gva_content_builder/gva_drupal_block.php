<?php 
if(!class_exists('element_gva_drupal_block')):
   class element_gva_drupal_block{
      public function render_form(){
         $fields = array(
            'type' => 'gsc_drupal_block',
            'title' => ('Drupal Block'),
            'size' => 12,
            
            'fields' => array(
               array(
                  'id'        => 'title_admin',
                  'type'      => 'text',
                  'title'     => t('Title display Admin'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'block_drupal',
                  'type'      => 'select',
                  'title'     => t('Block for drupal'),
                  'options'   => gavias_content_builder_get_blocks_options(),
                  'class'     => 'change_value_admin'
               ),
               array(
                  'id'        => 'hidden_title',
                  'type'      => 'select',
                  'title'     => t('Hidden title'),
                  'options'   => array('on' => 'Display', 'off'=>'Hidden'),
                  'desc'      => t('Hidden title default for block')
               ),
               array(
                  'id'        => 'align_title',
                  'type'      => 'select',
                  'title'     => t('Align title'),
                  'options'   => array('title-align-left' => 'Align Left', 'title-align-right'=>'Align Right', 'title-align-center' => 'Align Center'),
                  'std'       => 'title-align-center',
                  'desc'      => t('Align title default for block')
               ),
               array(
                  'id'        => 'remove_margin',
                  'type'      => 'select',
                  'title'     => ('Remove Margin'),
                  'options'   => array('on' => 'Yes', 'off'=>'No'),
                  'std'       => 'off',
                  'desc'      => t('Defaut block margin bottom 30px, You can remove margin for block')
               ),
               array(
                  'id'        => 'style_text',
                  'type'      => 'select',
                  'title'     => t('Skin Text for box'),
                  'options'   => array(
                     'text-dark'   => 'Text dark',
                     'text-light'   => 'Text light',
                  ),
                  'std'       => 'text-dark'
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation'),
                  'options'   => gavias_content_builder_animate_aos(),
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'animate_delay',
                  'type'      => 'select',
                  'title'     => t('Animation Delay'),
                  'options'   => gavias_content_builder_delay_aos(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-2'
               ), 
            ),                                      
         );
         return $fields;
      }

      public function render_content( $attr = array(), $content = '' ){
         extract(gavias_merge_atts(array(
            'title'              => '',
            'block_drupal'       => '',
            'hidden_title'       => 'on',
            'align_title'        => 'title-align-center',
            'el_class'           => '',
            'style_text'         => '',
            'remove_margin'      => 'off',
            'animate'            => '',
            'animate_delay'      => '',
         ), $attr));
         
         $output = '';
         $class = array();
         $class[] = $align_title; 
         $class[] = $el_class;
         $class[] = 'hidden-title-' . $hidden_title;
         $class[] = 'remove-margin-' . $remove_margin;
         $class[] = $style_text;

         if($block_drupal){
            $output .= '<div class="widget gsc-block-drupal '.implode(' ', $class) .'" '. gavias_content_builder_print_animate_aos($animate, $animate_delay) .'>';
              $output .= gavias_content_builder_render_block($block_drupal);
            $output .= '</div>';
         } 
         return $output;  
      }
   }
endif;
   



