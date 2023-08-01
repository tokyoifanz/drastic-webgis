<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function water()
    {
        $data = [
            'title' => 'Depth to Water Table'
        ];

        $this->load->view('data/depth-to-water-table', $data);
    }

	function recharge()
    {
        $data = [
            'title' => 'Recharge'
        ];

        $this->load->view('data/recharge', $data);
    }

	function aquifer()
    {
        $data = [
            'title' => 'Aquifer Media'
        ];

        $this->load->view('data/aquifer-media', $data);
    }

	function soil()
    {
        $data = [
            'title' => 'Soil Media'
        ];

        $this->load->view('data/soil-media', $data);
    }

	function topography()
    {
        $data = [
            'title' => 'Topography'
        ];

        $this->load->view('data/topography', $data);
    }
    
	function impact()
    {
        $data = [
            'title' => 'Impact of Vadose'
        ];

        $this->load->view('data/impact-of-vadose-zone-media', $data);
    }

	function hydraulic()
    {
        $data = [
            'title' => 'Conductivity Hydraulic'
        ];

        $this->load->view('data/conductivity-hydraulic', $data);
    }
    
}
