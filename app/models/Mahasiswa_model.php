<?php

class Mahasiswa_model
{
  //private $mhs = [
  // cara manual pake array
  //   [
  //     "nama" => "Aji Nuansa Sengarie",
  //     "nrp" => "193040046",
  //     "email" => "ansengarie@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Aldi Ageng Tri Seftian",
  //     "nrp" => "193040054",
  //     "email" => "ageng@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Rayhan Abduhuda",
  //     "nrp" => "193040044",
  //     "email" => "eugbgt@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ]
  // ];

  private $dbh; //database handler
  private $stmt; //statement

  //koneksi database PDO
  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //cek koneksi database
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    //query
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
