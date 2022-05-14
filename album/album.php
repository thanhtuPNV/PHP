<?php
class album
{
    private $idAlbum;
    private $nameAlbum;
    private $imgAlbum;
    private $descriptionAlbum;
    private $priceAlbum;
    private $listSong;
    public function __construct($nameAlbum, $imgAlbum, $descriptionAlbum, $priceAlbum, $listSong)
    {
        $this -> idAlbum = date("Y-m-d-h-i-s-a");
        // 
        $this -> nameAlbum = $nameAlbum;
        $this -> imgAlbum = $imgAlbum;
        $this -> descriptionAlbum = $descriptionAlbum;
        $this -> priceAlbum = $priceAlbum;
        $this -> listSong = $listSong;
    }
    public function getidAlbum()
    {
        return $this -> idAlbum;
    }
    // 
    public function getnameAlbum()
    {
        return $this -> nameAlbum;
    }
    public function setnameAlbum($nameAlbum)
    {
        $this -> nameAlbum = $nameAlbum;
    }
    // 
    public function getimgAlbum()
    {
        return $this -> imgAlbum;
    }
    public function setimgAlbum($imgAlbum)
    {
        $this -> imgAlbum = $imgAlbum;
    }
    // 
    public function getdescriptionAlbum()
    {
        return $this -> descriptionAlbum;
    }
    public function setdescriptionAlbum($descriptionAlbum)
    {
        $this -> descriptionAlbum = $descriptionAlbum;
    }
    // 
    public function getpriceAlbum()
    {
        return $this -> priceAlbum;
    }
    public function setpriceAlbum($priceAlbum)
    {
        $this -> priceAlbum = $priceAlbum;
    }
    // 
    public function getlistSong()
    {
        return $this -> listSong;
    }
    public function setlistSong($listSong)
    {
        $this -> listSong = $listSong;
    }
}
?>