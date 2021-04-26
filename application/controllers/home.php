<?php


class Home extends CI_Controller{

	public function users(){


		$data['results'] = $this->view_all();

		/**THIS IS THE HEAD PART OF THE HTML**/
		$this->load->view("layouts/head_inc");
		/**THIS IS THE NAVIGATION PART OF THE HTML**/
		$this->load->view("layouts/nav_inc");
		/**THIS IS THE MAIN CONTENT PART OF THE HTML**/
		$this->load->view('home/index',$data);
		/**THIS IS THE JAVASCRIPT PART OF THE HTML**/
		$this->load->view('js/main_inc.php');
		/**THIS IS THE FOOTER PART OF THE HTML**/
		$this->load->view("layouts/footer_inc");
	}

	public function view_all(){
		$data = array(
			'gender'=>$this->input->get('gender'),
			'country'=>$this->input->get('country')
		);
		return $this->home_model->view_all($data);

	}
}
