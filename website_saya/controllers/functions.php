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