<?php
namespace App\Table;


class Img{
	private $login;
	private $id;

	public function getEncodedData() {
		$path = "../database/" . $this->login . "/" . $this->id . ".png";
		if (!file_exists($path))
			return -1;
		$data = file_get_contents($path);
		$encodedData = base64_encode($data);
		return $encodedData;
	}

	public function displayImg() {
		$encodedData = $this->getEncodedData();
		if ($encodedData == -1)
			return ;
		$img = '<div class="img-container flex-item">';
		$img .= '<img id=' . $this->id . ' class="photo" alt="photo" ';
		$img .= 'src=data:image/png;base64,' . $encodedData . '>';
		$img .= '<span class="deletebutton">Delete</span></div>';
		return $img;
	}

	public function displayImg2() {
		$encodedData = $this->getEncodedData();
		if ($encodedData == -1)
			return ;
		$img = '<img id=' . $this->id . ' class="photo" alt="photo" ';
		$img .= 'src=data:image/png;base64,' . $encodedData . '>';
		return $img;
	}

	public function getId() {
		return $this->id;
	}

	public function getLogin() {
		return $this->login;
	}

}
?>