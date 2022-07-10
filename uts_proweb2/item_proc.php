<?php
include 'con_db.php';
//menambah data
if (isset($_POST['proses']) && $_POST['proses'] == 'SIMPAN') {
    $id = $_POST['id'];
	$item_grp_id=$_POST['item_grp_id'];
	$barcode=$_POST['barcode'];
    $nama = $_POST['nama'];
    $satuan_id = $_POST['satuan_id'];
    $harga = $_POST['harga'];
    $hpp =$_POST['hpp'];
    $aktif = $_POST['aktif'];
    $crt_date = $_POST['crt_date'];
    $supplier = $_POST['supplier'];
    $crt = null;
    $upd = null;
    $upd_date = $_POST['upd_date'];
    $sql = "INSERT INTO item
			(id,item_grp_id,barcode,nama,satuan_id,harga,hpp,aktif,crt,crt_date,upd,upd_date,supplier)
			VALUES 
			('$id','$item_grp_id','$barcode','$nama','$satuan_id','$harga','$hpp','$aktif','$crt','$crt_date','$upd','$upd_date','$supplier')";
    $crud = mysqli_query($conn,$sql);
    
    if ($crud){
        header("Location: item.php?action=berhasil");
    }else{
        header("Location: item.php?action=gagal");
    }
}

//delete

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM item
			WHERE id='$id'";
    $crud = mysqli_query($conn,$sql);

    if ($crud){
        header("Location: item.php?action=berhasil");
    }else{
        header("Location: item.php?action=gagal");
    }
}

//edit
if (isset($_POST['proses']) && $_POST['proses'] == 'perbarui') {
    var_dump($_POST);
    $id = $_POST['id'];
	$item_grp_id=$_POST['item_grp_id'];
	$barcode=$_POST['barcode'];
    $nama = $_POST['nama'];
    $satuan_id = $_POST['satuan_id'];
    $harga = $_POST['harga'];
	$hpp =$_POST['hpp'];
    $aktif = $_POST['aktif'];
    $crt_date = $_POST['crt_date'];
    $crt = null;
    $upd = null;
    $upd_date = $_POST['upd_date'];
    $supplier = $_POST['supplier'];
    $sql = mysqli_query($conn,"UPDATE item
    SET nama='$nama',barcode='$barcode',item_grp_id='$item_grp_id',harga='$harga',
    aktif='$aktif',upd_date='$upd_date',supplier='$supplier'
    WHERE id='$id'"); 
    if ($sql){
        header("Location: item.php?action=berhasil");
    }else{
        header("Location: item.php?action=gagal");
    }
}

?>