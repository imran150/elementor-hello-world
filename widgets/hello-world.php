<?php
namespace ElementorHelloWorld\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Hello_World extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'hello-world';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Hello World', 'elementor-hello-world' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'elementor-hello-world','js1','js2' ];
	}
	public function get_style_depends() {
		return [ 'core','core1','core2','core3'];
	}
	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'elementor-hello-world' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor-hello-world' ),
				'type' => Controls_Manager::TEXT,
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'elementor-hello-world' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_transform',
			[
				'label' => __( 'Text Transform', 'elementor-hello-world' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'None', 'elementor-hello-world' ),
					'uppercase' => __( 'UPPERCASE', 'elementor-hello-world' ),
					'lowercase' => __( 'lowercase', 'elementor-hello-world' ),
					'capitalize' => __( 'Capitalize', 'elementor-hello-world' ),
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		echo '<a class="" href="#" style=" background-color: #4CFF69;">';
		echo $settings['title'];
		echo '</a>';







		?>


		<div class="wrap">  
    <div class="slider">
      
      <div class="rigs-item">
        <div class="rigs-wrapper">
          <div class="wrapper-text">
            <img src="assets/img/inverted-commas.png" alt="">
             <p>
               "I am active USAF being recently stationed at Hurlburt Field. My wife and I started looking for local properties a month before we even got here, and experience has taught us that half of the success of buying your dream house is to find an amazing realtor agent. Long behold, we just happened to find that perfect agent, Mr. Christopher Prem. Even though he may not have as many reviews as some other agents on Zillow, but Rome isn't built in a single day and every great agent has to build the legacy, one house at a time. Mr. Prem knows exactly what I need as an active military, because it turned out that he is actually a USAF officer/gunship pilot in Reserve. That background in itself means a lot to another service member, because I know he has the integrity and excellence in what he does, no matter in the air razing Taliban hideouts or on the ground helping other airmen buying their dream houses ;) Over the past few months, Chris has shown the utmost professionalism one could demand from an excellent agent. Not only he has the knowledge in the local areas but also has the skill to negotiate the best offer and counter-offer on behalf of his clients. We have saved so much money in securing our dream house without overpaying due to buyer's emotion and lack of understanding of the process. Mr. Prem is always ready to return our message within 5 minutes, makes me wonder, does this man ever sleep or rest? He is like that eager hunter ready to secure the best prize for the love of this trade, and I can feel the zeal and passion from him in helping us finding and securing our dream house. Had he not put in over 15 years of his time fighting for this country as a USAF officer pilot, he would have garnered over hundreds of A+ reviews on Zillow. Therefore, if you are reading this message, do NOT hesitate in giving Mr. Prem a call. I guarantee you with my honor that phone call will be the first step and most important decision in finding yourself the perfect house, as finding that perfect agent is half of the success. Overall, I give Mr. Chris Prem A+ rating, and that is why, Mr. Prem is also our agent for the second property here. Action speaks louder than words." 
             </p>


             <h3 class="clients-name">
              Marcus Zuo
             </h3>
             <span>
              Clien
             </span>
          
      </div>
      </div>

      
      
    </div>











    <div class="rigs-item">
      <div class="rigs-wrapper">
        <div class="wrapper-text">
          <img src="assets/img/inverted-commas.png" alt="">

           <p>
             "I am active USAF being recently stationed at Hurlburt Field. My wife and I started looking for local properties a month before we even got here, and experience has taught us that half of the success of buying your dream house is to find an amazing realtor agent. Long behold, we just happened to find that perfect agent, Mr. Christopher Prem. Even though he may not have as many reviews as some other agents on Zillow, but Rome isn't built in a single day and every great agent has to build the legacy, one house at a time. Mr. Prem knows exactly what I need as an active military, because it turned out that he is actually a USAF officer/gunship pilot in Reserve. That background in itself means a lot to another service member, because I know he has the integrity and excellence in what he does, no matter in the air razing Taliban hideouts or on the ground helping other airmen buying their dream houses ;) Over the past few months, Chris has shown the utmost professionalism one could demand from an excellent agent. Not only he has the knowledge in the local areas but also has the skill to negotiate the best offer and counter-offer on behalf of his clients. We have saved so much money in securing our dream house without overpaying due to buyer's emotion and lack of understanding of the process. Mr. Prem is always ready to return our message within 5 minutes, makes me wonder, does this man ever sleep or rest? He is like that eager hunter ready to secure the best prize for the love of this trade, and I can feel the zeal and passion from him in helping us finding and securing our dream house. Had he not put in over 15 years of his time fighting for this country as a USAF officer pilot, he would have garnered over hundreds of A+ reviews on Zillow. Therefore, if you are reading this message, do NOT hesitate in giving Mr. Prem a call. I guarantee you with my honor that phone call will be the first step and most important decision in finding yourself the perfect house, as finding that perfect agent is half of the success. Overall, I give Mr. Chris Prem A+ rating, and that is why, Mr. Prem is also our agent for the second property here. Action speaks louder than words." 
           </p>
        

           <h3 class="clients-name">
            Marcus Zuo
           </h3>
           <span>
            Clien
           </span>

    </div>
    </div>

    
    
  </div>




















  <div class="rigs-item">
    <div class="rigs-wrapper">
      <div class="wrapper-text">
        <img src="assets/img/inverted-commas.png" alt="">

         <p>
           "I am active USAF being recently stationed at Hurlburt Field. My wife and I started looking for local properties a month before we even got here, and experience has taught us that half of the success of buying your dream house is to find an amazing realtor agent. Long behold, we just happened to find that perfect agent, Mr. Christopher Prem. Even though he may not have as many reviews as some other agents on Zillow, but Rome isn't built in a single day and every great agent has to build the legacy, one house at a time. Mr. Prem knows exactly what I need as an active military, because it turned out that he is actually a USAF officer/gunship pilot in Reserve. That background in itself means a lot to another service member, because I know he has the integrity and excellence in what he does, no matter in the air razing Taliban hideouts or on the ground helping other airmen buying their dream houses ;) Over the past few months, Chris has shown the utmost professionalism one could demand from an excellent agent. Not only he has the knowledge in the local areas but also has the skill to negotiate the best offer and counter-offer on behalf of his clients. We have saved so much money in securing our dream house without overpaying due to buyer's emotion and lack of understanding of the process. Mr. Prem is always ready to return our message within 5 minutes, makes me wonder, does this man ever sleep or rest? He is like that eager hunter ready to secure the best prize for the love of this trade, and I can feel the zeal and passion from him in helping us finding and securing our dream house. Had he not put in over 15 years of his time fighting for this country as a USAF officer pilot, he would have garnered over hundreds of A+ reviews on Zillow. Therefore, if you are reading this message, do NOT hesitate in giving Mr. Prem a call. I guarantee you with my honor that phone call will be the first step and most important decision in finding yourself the perfect house, as finding that perfect agent is half of the success. Overall, I give Mr. Chris Prem A+ rating, and that is why, Mr. Prem is also our agent for the second property here. Action speaks louder than words." 
         </p>

         <h3 class="clients-name">
          Marcus Zuo
         </h3>
         <span>
          Clien
         </span>
      
  </div>
  </div>

  
  
</div>











<div class="rigs-item">
  <div class="rigs-wrapper">
    <div class="wrapper-text">
      <img src="assets/img/inverted-commas.png" alt="">

       <p>
         "I am active USAF being recently stationed at Hurlburt Field. My wife and I started looking for local properties a month before we even got here, and experience has taught us that half of the success of buying your dream house is to find an amazing realtor agent. Long behold, we just happened to find that perfect agent, Mr. Christopher Prem. Even though he may not have as many reviews as some other agents on Zillow, but Rome isn't built in a single day and every great agent has to build the legacy, one house at a time. Mr. Prem knows exactly what I need as an active military, because it turned out that he is actually a USAF officer/gunship pilot in Reserve. That background in itself means a lot to another service member, because I know he has the integrity and excellence in what he does, no matter in the air razing Taliban hideouts or on the ground helping other airmen buying their dream houses ;) Over the past few months, Chris has shown the utmost professionalism one could demand from an excellent agent. Not only he has the knowledge in the local areas but also has the skill to negotiate the best offer and counter-offer on behalf of his clients. We have saved so much money in securing our dream house without overpaying due to buyer's emotion and lack of understanding of the process. Mr. Prem is always ready to return our message within 5 minutes, makes me wonder, does this man ever sleep or rest? He is like that eager hunter ready to secure the best prize for the love of this trade, and I can feel the zeal and passion from him in helping us finding and securing our dream house. Had he not put in over 15 years of his time fighting for this country as a USAF officer pilot, he would have garnered over hundreds of A+ reviews on Zillow. Therefore, if you are reading this message, do NOT hesitate in giving Mr. Prem a call. I guarantee you with my honor that phone call will be the first step and most important decision in finding yourself the perfect house, as finding that perfect agent is half of the success. Overall, I give Mr. Chris Prem A+ rating, and that is why, Mr. Prem is also our agent for the second property here. Action speaks louder than words." 
       </p>
       <h3 class="clients-name">
        Marcus Zuo
       </h3>
       <span>
        Clien
       </span>
    
</div>
</div>



</div>
  </div>


		<?php






















	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		
	}
}