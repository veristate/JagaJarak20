<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//test
		$provinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
		$map = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
		$data = [
			'title' => 'Pusat Data Nasional',
			'provinsi' => $provinsi,
			'map' => $map
		];
		echo view('layout/header.php');
		echo view('index.php', $data);
		echo view('layout/footer.php');
	}

	public function information()
	{
		$provinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
		$map = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
		$data = [
			'title' => 'Pusat Data Nasional',
			'provinsi' => $provinsi,
			'map' => $map
		];
		echo view('layout/header.php');
		echo view('coviddata.php', $data);
		echo view('layout/footer.php');
	}
}
