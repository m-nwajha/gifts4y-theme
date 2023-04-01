<?php
function mq_new_meta_field() {
	// this will add the custom meta field to the add new term page
	wp_enqueue_style('thickbox');
	wp_enqueue_script('thickbox');
	?>
	<div class="form-field">
		<label for="term_meta[custom_term_meta]">صورة القسم</label>
		<input type="text" name="term_meta[term_meta_thumbnail]" id="custom_term_meta" value="">
		<p class="description">يرجى مراعاة ان تكون أبعاد الصورة متساوية.. مثل: 250×250 بكسل، لأفضل طريقة عرض.</p>
	</div>
	<script type="text/javascript">
        jQuery(document).ready(function() {
                jQuery("#custom_term_meta").click(function() {
                    tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
                    return false;
                });
                window.send_to_editor = function(html) {
                    jQuery("#custom_term_meta").val( jQuery("img",html).attr("src") );
                    tb_remove();
                }
        });
    </script>
<?php
}
add_action( 'category_add_form_fields', 'mq_new_meta_field', 10, 2 );
add_action( 'movies_category_add_form_fields', 'mq_new_meta_field', 10, 2 );

// Edit term page
function mq_edit_meta_field($term) {
 
	// put the term ID into a variable
	$t_id = $term->term_id;
 
	// retrieve the existing value(s) for this meta field. This returns an array
	$term_meta = get_option( "taxonomy_$t_id" );
	wp_enqueue_style('thickbox');
	wp_enqueue_script('thickbox');
	?>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="term_meta[term_meta_thumbnail]">صورة القسم</label></th>
		<td>
			<input type="text" name="term_meta[term_meta_thumbnail]" id="custom_term_meta" value="<?php echo esc_attr( $term_meta['term_meta_thumbnail'] ) ? esc_attr( $term_meta['term_meta_thumbnail'] ) : ''; ?>">
			<p class="description">يرجى مراعاة ان تكون أبعاد الصورة متساوية.. مثل: 250×250 بكسل، لأفضل طريقة عرض.</p>
			<script type="text/javascript">
		        jQuery(document).ready(function() {
		                jQuery("#custom_term_meta").click(function() {
		                    tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
		                    return false;
		                });
		                window.send_to_editor = function(html) {
		                    jQuery("#custom_term_meta").val( jQuery("img",html).attr("src") );
		                    tb_remove();
		                }
		        });
		    </script>
			<?php if(!empty($term_meta))
            echo '<img src="'.esc_attr( $term_meta['term_meta_thumbnail'] ).'" style="max-width:200px;border: 1px solid #ccc;padding: 5px;box-shadow: 5px 5px 10px #ccc;margin-top: 10px;" >'; ?>
		</td>
	</tr>
<?php
}
add_action( 'category_edit_form_fields', 'mq_edit_meta_field', 10, 2 );
add_action( 'movies_category_edit_form_fields', 'mq_edit_meta_field', 10, 2 );

// Save extra taxonomy fields callback function.
function mq_save_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		// Save the option array.
		update_option( "taxonomy_$t_id", $term_meta );
	}
}  
add_action( 'edited_movies_category', 'mq_save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_movies_category', 'mq_save_taxonomy_custom_meta', 10, 2 );