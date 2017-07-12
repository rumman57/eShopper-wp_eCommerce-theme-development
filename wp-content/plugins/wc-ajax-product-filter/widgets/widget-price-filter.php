<?php
/**
 * WC Ajax Product Filter by Price
 */
if (!class_exists('WCAPF_Price_Filter_Widget')) {
	class WCAPF_Price_Filter_Widget extends WP_Widget {
		/**
		 * Register widget with WordPress.
		 */
		function __construct() {
			parent::__construct(
				'wcapf-price-filter', // Base ID
				__('WC Ajax Product Filter by Price', 'wcapf'), // Name
				array('description' => __('Filter woocommerce products by price.', 'wcapf')) // Args
			);
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget($args, $instance) {
			if (!is_post_type_archive('product') && !is_tax(get_object_taxonomies('product'))) {
				return;
			}
			
			global $wcapf;

			// price range for filtered products
			$filtered_price_range = $wcapf->getPriceRange(true);

			// price range for all published products
			$unfiltered_price_range = $wcapf->getPriceRange(false);

			$html = '';

			// to be sure that these values are number
			$min_val = $max_val = 0;

			if (sizeof($unfiltered_price_range) === 2) {
				$min_val = $unfiltered_price_range[0];
				$max_val = $unfiltered_price_range[1];
			}

			// required scripts
			// enqueue necessary scripts
			wp_enqueue_style('wcapf-style');
			wp_enqueue_style('font-awesome');
			wp_enqueue_script('wcapf-script');
			wp_enqueue_script('wcapf-nouislider-script');
			wp_enqueue_script('wcapf-price-filter-script');
			wp_enqueue_style('wcapf-nouislider-style');

			// get values from url
			$set_min_val = null;
			if (isset($_GET['min-price']) && !empty($_GET['min-price'])) {
				$set_min_val = (int)$_GET['min-price'];
			}

			$set_max_val = null;
			if (isset($_GET['max-price']) && !empty($_GET['max-price'])) {
				$set_max_val = (int)$_GET['max-price'];
			}

			// HTML markup for price slider
			$html .= '<div class="wcapf-price-filter-wrapper">';
				$html .= '<div id="wcapf-noui-slider" class="noUi-extended" data-min="' . $min_val . '" data-max="' . $max_val . '" data-set-min="' . $set_min_val . '" data-set-max="' . $set_max_val . '"></div>';
				$html .= '<br />';
				$html .= '<div class="slider-values">';
					$html .= '<p>' . __('Min Price', 'wcapf') . ': <span class="wcapf-slider-value" id="wcapf-noui-slider-value-min"></span></p>';
					$html .= '<p>' . __('Max Price', 'wcapf') . ': <span class="wcapf-slider-value" id="wcapf-noui-slider-value-max"></span></p>';
				$html .= '</div>';
			$html .= '</div>';

			extract($args);

			// Add class to before_widget from within a custom widget
			// http://wordpress.stackexchange.com/questions/18942/add-class-to-before-widget-from-within-a-custom-widget

			$widget_class = 'woocommerce wcapf-price-filter-widget';

			// no class found, so add it
			if (strpos($before_widget, 'class') === false) {
				$before_widget = str_replace('>', 'class="' . $widget_class . '"', $before_widget);
			}
			// class found but not the one that we need, so add it
			else {
				$before_widget = str_replace('class="', 'class="' . $widget_class . ' ', $before_widget);
			}

			echo $before_widget;

			if (!empty($instance['title'])) {
				echo $args['before_title'] . apply_filters('widget_title', $instance['title']). $args['after_title'];
			}

			echo $html;

			echo $args['after_widget'];
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form($instance) {
			?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php printf(__('Title:', 'wcapf')); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo (!empty($instance['title']) ? esc_attr($instance['title']) : ''); ?>">
			</p>
			<p>
			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update($new_instance, $old_instance) {
			$instance = array();
			$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
			return $instance;
		}
	}
}

// register widget
if (!function_exists('wcapf_register_price_filter_widget')) {
	function wcapf_register_price_filter_widget() {
		register_widget('WCAPF_Price_Filter_Widget');
	}
	add_action('widgets_init', 'wcapf_register_price_filter_widget');
}