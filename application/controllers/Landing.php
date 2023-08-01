<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function index()
    {
        $data = [
            'title' => 'Landing Page | WebGIS'
        ];

        $this->load->view('landing/index', $data);
    }

	function drastic()
    {
        $data = [
            'title' => 'DRASTIC | WebGIS'
        ];

        $this->load->view('landing/drastic', $data);
    }

	function data()
    {
        $data = [
            'title' => 'Data | WebGIS'
        ];

        $this->load->view('landing/data', $data);
    }

	function map()
    {
        $data = [
            'title' => 'WebGIS'
        ];

        $this->load->view('landing/map', $data);
    }
}
