<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insertdata_model extends CI_Model
{

  public function insert($device_sn, $co2, $tempamb, $ph, $hum){
    $data = array(
      'data_device_sn' => $device_sn,
      'data_c02' => $c02,
      'data_tempamb' => $tempamb,
      'data_hum' => $hum,
      'data_ph' => $ph,
      
      
    );

    if ($this->db->insert('data', $data)){
      return "1";
    }else {
      return "0";
    }

  }
}
