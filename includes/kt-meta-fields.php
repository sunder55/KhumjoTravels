<?php
class Kt_meta_fields
{
    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'kt_meta_fields'));
        add_action('save_post', array($this, 'kt_save_meta_fields'));
    }

    public function kt_meta_fields()
    {
        add_meta_box(
            'kt_meta_fields',
            'Other Details',
            array($this, 'kt_meta_fields_callback'),
            'product',
            'normal',
            'default'
        );
    }

    public function kt_meta_fields_callback()
    {
?>
        <!-- Inclusion section-->
        <div class="">
            <h4>
                <label for="kt_trip_inclusions">Inclusions</label>
            </h4>
            <!-- repeater field for inclusion -->
            <div class="kt-trip-inclusions widefat">
                <textarea name="kt_inclusion_fields" id="kt_trip_inclusions" class="widefat" placeholder="example1, example2"><?php echo get_post_meta(get_the_ID(), 'kt_inclusion_fields', true) ?: ''; ?></textarea>
            </div>
        </div>
        <div class="">
            <h4>
                <label for="kt_trip_inclusions">Exclusions</label>
            </h4>
            <!-- repeater field for inclusion -->
            <div class="widefat">
                <textarea name="kt_exclusion_fields" id="kt_exclusion_fields" class="widefat" placeholder="example1, example2"><?php echo get_post_meta(get_the_ID(), 'kt_exclusion_fields', true) ?: ''; ?></textarea>
            </div>
        </div>

        <div class="">
            <h4>
                <label for="">No of days</label>
            </h4>
            <!-- repeater field for inclusion -->
            <div class="widefat">
                <input type="number" name="kt_no_of_days" id="kt_no_of_days" class="widefat" min="1" max="100" value="<?php echo get_post_meta(get_the_ID(), 'kt_no_of_days', true) ?: ''; ?>">
            </div>
        </div>
<?php
    }


    /**
     * Saves the meta fields associated with the product
     *
     * @param int $post_id The post ID to save the meta fields for
     */
    public function kt_save_meta_fields($post_id)
    {
        if (isset($_POST['kt_inclusion_fields'])) {
            update_post_meta($post_id, 'kt_inclusion_fields', $_POST['kt_inclusion_fields']);
        }
        if (isset($_POST['kt_exclusion_fields'])) {
            update_post_meta($post_id, 'kt_exclusion_fields', $_POST['kt_exclusion_fields']);
        }
        if (isset($_POST['kt_no_of_days'])) {
            update_post_meta($post_id, 'kt_no_of_days', $_POST['kt_no_of_days']);
        }
    }
}

new Kt_meta_fields();
