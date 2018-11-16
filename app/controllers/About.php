<?php 
class About {
	public function index($nama = 'dian', $pekerjaan = 'pengusaha')
	{
		echo "saya, adalah $nama, saya seorang $pekerjaan";
	}
	public function page()
	{
		echo 'About/page';
	}
}