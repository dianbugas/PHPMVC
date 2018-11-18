<?php 
class Mahasiswa_model{
	private $mhs = [
		[
			"nama" => "ahmad",
			"nrp" => "0320223",
			"email" => "edasdas",
			"jurusan" => "dasdsd",
		],
		[
			"nama" => "aasdashmad",
			"nrp" => "0320asdasd223",
			"email" => "edasdasdasdas",
			"jurusan" => "daasdassdsd",
		],
		[
			"nama" => "ahmaasdsad",
			"nrp" => "03202sad23",
			"email" => "edasasdsadas",
			"jurusan" => "daasdsdsd",
		],
	];
	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}