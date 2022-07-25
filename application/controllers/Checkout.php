<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load form library & helper
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        // Load cart library
        $this->load->library('cart');
        
        $this->load->model('Mcrud');
        $this->load->model('Mfrontend');
        
        $this->controller = 'checkout';
    }
    
    function index(){
        if($this->cart->total_items() <= 0){
            redirect('home/memberfe');
        }
        
        
        $submit         = $this->input->post('placeOrder');
        $id_konsumen    = $this->session->userdata('id');
        $custData       = $this->Mfrontend->getUser( $id_konsumen)->row_object();
        if(isset($submit)){
             $order = $this->placeOrder($id_konsumen);
                    
             if($order){
                 $this->session->set_userdata('success_msg', 'Berhasil menambahkan pesanan!');
                 redirect($this->controller.'/orderSuccess/'.$order);
             }else{
                 $data['error_msg'] = 'Gagal  menambahkan pesanan. Coba Lagi!!';
             }
        }
        
        // Customer data
        $data['custData'] = $custData;
        
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();

        // var_dump($custData); die();
        
        $this->template->load('layout_member', 'member/checkout/checkout', $data);
    }
    
    function placeOrder($id_konsumen){
    
        $ordData = array(
            'idKonsumen'    => $id_konsumen,
            'tglOrder'      => date('Y-m-d H:i:s'),
            'statusOrder'   => "Belum Bayar"
        );

        $insertOrder = $this->Mfrontend->insertOrder($ordData);
        
        if($insertOrder){
            $cartItems = $this->cart->contents();

            $ordItemData = array();
            $i=0;
            foreach($cartItems as $item){
                $ordItemData[$i]['idOrder']         = $insertOrder;
                $ordItemData[$i]['idProduk']        = $item['id'];
                $ordItemData[$i]['jumlah']          = $item['qty'];
                $ordItemData[$i]['harga']           = $item["subtotal"];
                $i++;
            }
            
            if(!empty($ordItemData)){
                $insertOrderItems = $this->Mfrontend->insertOrderItems($ordItemData);
                
                if($insertOrderItems){
                    $this->cart->destroy();
                    
                    return $insertOrder;
                }
            }
        }
        return false;
    }
    
    function orderSuccess($id_order){
        $data['order'] = $this->Mfrontend->getOrder($id_order);
    
        $this->template->load('layout_member', 'member/checkout/order-success', $data);
    }
    
}