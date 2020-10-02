<?php
if ($_GET['page'] == "add_mahasiswa") {
	include "addmahasiswa.php";
} else if ($_GET['page'] == "save_mahasiswa") {
	include "save_mahasiswa.php";
} else if ($_GET['page'] == "edit_mahasiswa") {
	include "edit_mahasiswa.php";
} else if ($_GET['page'] == "update_mahasiswa") {
	include "update_mahasiswa.php";
} else if ($_GET['page'] == "delete_mahasiswa") {
	include "delete_mahasiswa.php";
} else if ($_GET['page'] == "add_buku") {
	include "addbuku.php";
} else if ($_GET['page'] == "save_buku") {
	include "save_buku.php";
} else if ($_GET['page'] == "edit_buku") {
	include "edit_buku.php";
} else if ($_GET['page'] == "update_buku") {
	include "update_buku.php";
} else if ($_GET['page'] == "delete_buku") {
	include "delete_buku.php";
} else if ($_GET['page'] == "buku") {
	include "listbuku.php";
} else if ($_GET['page'] == "mahasiswa") {
	include "listmahasiswa.php";
} else
	include "blank-pages.php";
