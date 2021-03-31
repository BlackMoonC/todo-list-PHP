<?php
$todoIsi = [];
if(file_exists('todo.txt')){
    $file = file_get_contents('todo.txt');
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
}
?>

<form action="" method="post">
<label>Daftar Pekerjaan Hari Ini</label> </br>
<input type="text" name="todo">
<button type="submit">Simpan</button>
</form>
<ul>
<?php foreach ($todoIsi as $key => $value) {
 ?>
    <li>
        <input type="checkbox" name="todo">
        <label> <?php echo $value[todo] ?></label>
        <a href="#">hapus</a>
    </li>
<?php  }?>
</ul>
