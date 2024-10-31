<div class="wrap">
<h2>Pictage Link Options</h2></br>
<form name="feedback" method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">Studio ID: </th>
<td><input type="text" name="admin_studio_id" size ="5" value="<?php echo get_option('admin_studio_id'); ?>" /> <i>i.e. AB123 (Upper Case Only)</i></td>
</tr>

<th scope="row">Link Color: </th>
<td>#<input type="text" name="admin_link_color" size ="6" value="<?php echo get_option('admin_link_color'); ?>" /> <i>HTML Color Code</i></td>
</tr>

<th scope="row">Hover Color: </th>
<td>#<input type="text" name="admin_hover_color" size ="6" value="<?php echo get_option('admin_hover_color'); ?>" /> <i>HTML Color Code</i></td>
</tr>

<th scope="row">Visited Color: </th>
<td>#<input type="text" name="admin_visited_color" size ="6" value="<?php echo get_option('admin_visited_color'); ?>" /> <i>HTML Color Code</i></td>
</tr>

<tr>
<th scope="row">Font Style: </th>
<td><select name="admin_font_style" value="<?php echo get_option('admin_font_style'); ?>">

<option><?php echo get_option('admin_font_style'); ?></option>
<option value="Times New Roman">Times New Roman</option>
<option value="Georgia">Georgia</option>
<option value="Arial">Arial</option>
<option value="Verdana">Verdana</option>
<option value="Courier New">Courier New</option>
<option value="Lucida Console">Lucida Console</option>
</select></td>
</tr>

<th scope="row">Font Weight: </th>
<td><select name="admin_font_weight">


<?php
If (get_option('admin_font_weight') == "Bold") {
echo "<option value='Normal'>Normal</option>";
echo "<option selected='selected' value='Bold'>Bold</option>";
} else {
echo "<option selected='selected' value='Normal'>Normal</option>";
echo "<option value='Bold'>Bold</option>";
}
?>


</select></td>
</tr>

<th scope="row">Font Size: </th>
<td><input type="text" name="admin_font_size" size="3" value="<?php echo get_option('admin_font_size'); ?>" />pt</td>
</tr>

<th scope="row">Line Height: </th>
<td><input type="text" name="admin_line_height"size="4" value="<?php echo get_option('admin_line_height'); ?>" /> <i>Spacing between lines i.e. 1.75</i></td>
</tr>

<tr>
<th scope="row">Hover Effect: </th>
<td><select name="admin_hover_effect">
<option value="Slider">Slider</option>
</select></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="admin_studio_id,admin_link_color,admin_hover_color,admin_visited_color,admin_font_style,admin_font_weight,admin_font_size,admin_line_height" />
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
</form>

</div>
 

