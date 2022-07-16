namespace Elementor;
class First_widget extends Widget_Base{

	public function get_name(){

		return "first-widget";
	}
	public function get_title(){
		return "first Widget";
	}
	public function get_icon() {

		return "fa fa-twitter";
	}
	public function get_categories() {
		return [ 'general' ];
	}
}
Plugin::instance()->widgets_manager->register_widget_type( new First_widget );
