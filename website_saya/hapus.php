<?php 
	include 'functions.php';
	if(isset($_GET['id'])){
		$delete = mysqli_query($functions, "DELETE FROM tb_user WHERE id_user = '".$_GET['id']."' ");
		if($delete){
		}
        if ($hapus) 
        echo "
            <script>
            alert('Konfirmasi Hapsus Buku Atau Tidak');
	}
?>