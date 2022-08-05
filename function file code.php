
function selet_option_ACF_code(){
    ?>
    <center>
			<form action="<?php echo site_url(); ?>/study-programs/" method="get" class="searchandfilter">
				<div>
                  <ul>
                    <li>
                        <label>Business, Management, Marketing and Finance Degrees</label>
                       <select name="fields-of-study" id="offields-of-study" class="postform">
                        	<option value="" selected="selected">Fields of Study</option>
                        	<?php
                         
                            
                                $taxonomy = 'fields-of-study';
                                $terms = get_terms([
                                    'taxonomy' => $taxonomy,
                                    'hide_empty' => false,
                                ]);
                                
                                 foreach ($terms as $term){
                                    //echo  $term->term_id;
                                 $select1 = get_field('selector1',$term); 
                                
                                 if($select1 == '1') { ?>
                               <option class="level-0" value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
                               <?php } } ?>
                        </select>
                    </li>
                    
                     
                        <li>
                         <label>Computer Science, IT, and Data Science Degress</label>
                       <select name="fields-of-study" id="of-studys" class="postform">
                        	<option value="" selected="selected"> Fields of Study </option>
                        	<?php
                         
                            
                                $taxonomy = 'fields-of-study';
                                $terms = get_terms([
                                    'taxonomy' => $taxonomy,
                                    'hide_empty' => false,
                                ]);
                                
                                 foreach ($terms as $term){
                                    //echo  $term->term_id;
                                 $select2 = get_field('selector_2',$term); 
                                
                                 if($select2 == '2') { ?>
                               <option class="level-0" value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>

                               <?php }} ?>
                        </select>
                    </li>
                
                    
                            
                    <li><input type="submit" value="search"></li>
               </ul>
             </div>
           </form>
    </center>
    <?php
}

add_shortcode( "selet_option_ACF", "selet_option_ACF_code" );



function selet_option_courses(){
    ?>
    <center>
            <form action="<?php echo site_url(); ?>/study-courses/" method="get" class="searchandfilter">
                <div>
                  <ul>
                    <?php 
                        $taxonomy = 'course-marketing';
                        $terms = get_terms([
                            'taxonomy' => $taxonomy,
                            'hide_empty' => false,
                        ]);
                        echo "<pre>";
                        print_r($terms);
                        echo "</pre>";
                        $template___term_temp = "";
                        foreach ($terms as $key => $term) {
                            $template___term_temp .= "<li>";
                            
                                $template___term_temp .= '<select name="course-marketing___'. ($term->slug)  .'" term-id="'. $term->term_id .'" class="postform">';
                                
                                    $template___term_temp .= '<option value="" selected="selected">Select Option</option>';
                                    $template___term_temp .= '<option class="level-'. $term->term_group .'" value="'. $term->term_id .'">'. $term->name .'</option>';

                                $template___term_temp .= "</select>";
                            $template___term_temp .= "</li>";
                        }
                        echo $template___term_temp;
                    ?>
                    <li><input type="submit" value="search"></li>
               </ul>
             </div>
           </form>
    </center>
    <?php
}

add_shortcode( "selet_option_courses", "selet_option_courses" );
