<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web_dasar_a1_2109010002_ronggohernanda";
  return mysqli_connect(
    $server,
    $username,
    $password,
    $database
  );
}

function q($data)
{
  return mysqli_query(koneksi(), $data);
}

function buku()
{
  return q("SELECT * FROM `buku`");
}

function buku_satu($id_buku, $isi_tabel)
{
  $x = mysqli_fetch_assoc(q("SELECT * FROM buku WHERE
  id = '$id_buku'"));
  return $x[$isi_tabel];
}

function buku_satu_jumlah($id_buku)
{
  return mysqli_num_rows(
    q("SELECT * FROM buku WHERE id = '$id_buku'")
  );
}