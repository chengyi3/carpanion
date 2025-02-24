<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class My_bookings extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
    }
   
    public function index(){
        $data = array();
        $customer_id=$this->session->userdata('id');
        $data['data'] = $this->db->query("SELECT (SELECT `name` from customer where customer.id=rides.customer_id) as driver, (SELECT `name` from customer where customer.id=bookings.customer_id) as rider, bookings.id, rides.leaving_from, rides.destination, rides.leaving_date, rides.leaving_time,bookings.seats, bookings.created_at FROM bookings left join rides on bookings.ride_id=rides.id where bookings.customer_id='$customer_id'")->result();
        $data['main_content'] = $this->load->view('my_bookings',$data,true);
        $this->load->view('index',$data);
    }
}