<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home_v/index.php');
	}

    public function iskaydet()
    {
        $this->load->helper("string");
        $benzersiz_id = random_string("numeric",5);

        $tumisler =$_SESSION["isler"];
        $yapilacaklar = $tumisler["yapilacaklar"];
        $is = array(
            "id" => $benzersiz_id,
            "konu" => strip_tags(trim($this->input->post("konu"))),
            "renk" => $this->input->post('renk'),
            "isbaslik" => strip_tags(trim($this->input->post("isbaslik"))),
            "mesaj"    => strip_tags(trim($this->input->post("mesaj"))),
        );
        $yapilacaklar[$benzersiz_id] = $is;
        $_SESSION["isler"]["yapilacaklar"] = $yapilacaklar;

        redirect(base_url());

    }
    public function kaldir($id){
        $tumisler =$_SESSION["isler"];
        $yapilacaklar = $tumisler["yapilacaklar"];
        unset($_SESSION["isler"]['yapilacaklar'][$id]);
        redirect(base_url());
    }


}
