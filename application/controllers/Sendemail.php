<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

  public function index(){

   $subject = 'Customer Detail | Jasa Design Printing.com - ' . $this->input->post("fname"); //subjek di pesan email

   
    $file_data = $this->upload_file();

    if(is_array($file_data)){

     $message = '

     <h3 align="center">Customer Details</h3>

      <table border="1" width="100%" cellpadding="5">

       <tr>

        <td width="30%">Name</td>

        <td width="70%">'.$this->input->post("fname").'</td>

       </tr>

       <tr>

        <td width="30%">Address</td>

        <td width="70%">'.$this->input->post("address").'</td>

       </tr>

       <tr>

        <td width="30%">Email Address</td>

        <td width="70%">'.$this->input->post("email").'</td>

       </tr>

      

       <tr>

        <td width="30%">Phone Number</td>

        <td width="70%">'.$this->input->post("phone").'</td>

       </tr>

        <tr>

        <td width="30%">Message</td>

        <td width="70%">'.$this->input->post("message").'</td>

       </tr>


      </table>

     ';

    var_dump($message);exit;

      $config = Array(

           'protocol'  => 'smtp',

           'smtp_host' => 'ssl://smtp.googlemail.com', //host gmail

           'smtp_port' => 465, //port gmail

           'smtp_user' => 'admin@jasadigitalprint.com', //masukan alamat gmail kamu

           'smtp_pass' => 'Adminjasa123!', //masukkan password gmail kamu

           'mailtype'  => 'html', //tipe email

           'charset'  => 'iso-8859-1',

           'wordwrap'  => TRUE

      );

      $this->load->library('email', $config);

      $this->email->set_newline("\r\n");

      $this->email->from($this->input->post("email")); //masukkan alamat email pengirim

      $this->email->to('chrryctr1509@gmail.com'); //masukkan alamat gmail kamu / email yang dituju

      $this->email->subject($subject);

         $this->email->message($message);

         $this->email->attach($file_data['full_path']);

         if($this->email->send()){

          if(delete_files($file_data['file_path'])){

           $this->session->set_flashdata('message', 'Lamaran Terkirim');

           redirect('sendemail');

          }

         }else{

          if(delete_files($file_data['file_path'])){

           $this->session->set_flashdata('message', 'Pengiriman Lamaran Error');

           redirect('sendemail');

          }

         }

     }else{

      $this->session->set_flashdata('message', 'Attach File Error ');

         redirect('sendemail');

     }

  }

 

  }

}

  }

 
    