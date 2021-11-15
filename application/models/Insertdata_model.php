<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insertdata_model extends CI_Model
{

  public function insert($device_sn, $temp, $hum, $ph, $tempamb){
    $data = array(
      'data_device_sn' => $device_sn,
      'data_temp' => $temp,
      'data_hum' => $hum,
      'data_ph' => $ph,
      'data_tempamb' => $tempamb,
      
    );

    if ($this->db->insert('data', $data)){
      return "1";
    }else {
      return "0";
    }

  }
}
