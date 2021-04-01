<?php
$todoIsi = [];
// melakukan pengecekkan apakah file todo.txt ditemukan
if(file_exists('todo.txt')){
    // membaca file todo.txt
    $file = file_get_contents('todo.txt');
    //mengubah format serialize menjadi array
    $todoIsi = unserialize($file);
}

if(isset($_POST['todo'])){
    $data = $_POST['todo'];
    $todoIsi[] = [
        'todo'=> $data,
        'status'=>0
    ];
    $daftar_belanja=serialize($todoIsi);
    file_put_contents('todo.txt', $daftar_belanja);
    // redirect halaman
    header('location: index.php');
}

if(isset($_GET['status'])){
    $todoIsi[$_GET['key']]['status']=$_GET['status'];
    $daftar_belanja=serialize($todoIsi);
    file_put_contents('todo.txt', $daftar_belanja);
    header('location:index.php');
}
print_r($todoIsi);
?>

<form action="" method="POST">
<label>Daftar Pekerjaan Hari Ini</label> </br>
<input type="text" name="todo" >
<button type="submit">Simpan</button>
</form>
<ul>
<?php foreach ($todoIsi as $key => $value) {
 ?>
    <li>
        <input type="checkbox" name="todo" onclick="window.location.href='index.php?status=1&key=<?php echo $key;?>'" <?php if($value['status'] == 1) echo 'checked' ?>>
        <label> <?php echo $value[todo] ?></label>
        <a href="#">hapus</a>
    </li>
<?php  }?>
</ul>
