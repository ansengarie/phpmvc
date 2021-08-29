<?php

class About
{
  public function page()
  {
    echo 'About/page';
  }

  public function index($nama = 'Aji', $pekerjaan = 'mahasiswa')
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
  }
}
