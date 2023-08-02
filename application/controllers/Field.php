<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Field extends CI_Controller
{

  function water()
  {
    $data = [
      'title' => 'Depth to Water Table'
    ];

    $this->load->view('field-data/depth-to-water-table', $data);
  }

  function recharge()
  {
    $data = [
      'title' => 'Recharge'
    ];

    $this->load->view('field-data/recharge', $data);
  }

  function aquifer()
  {
    $data = [
      'title' => 'Aquifer Media'
    ];

    $this->load->view('field-data/aquifer-media', $data);
  }

  function soil()
  {
    $data = [
      'title' => 'Soil Media'
    ];

    $this->load->view('field-data/soil-media', $data);
  }

  function topography()
  {
    $data = [
      'title' => 'Topography'
    ];

    $this->load->view('field-data/topography', $data);
  }

  function impact()
  {
    $data = [
      'title' => 'Impact of Vadose'
    ];

    $this->load->view('field-data/impact-of-vadose-zone-media', $data);
  }

  function hydraulic()
  {
    $data = [
      'title' => 'Conductivity Hydraulic'
    ];

    $this->load->view('field-data/conductivity-hydraulic', $data);
  }
}
