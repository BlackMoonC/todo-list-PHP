<?php

?>


<form action="">
<label>Daftar Pekerjaan Hari Ini</label> </br>
<input type="text" name="todo">
<button type="submit">Simpan</button>
</form>

<ul>
<?php foreach ($variable as $value) {
 ?>
    <li>
        <input type="checkbox" name="todo">
        <label> Todo 1</label>
        <a href="#">hapus</a>
    </li>
<?php  }?>
</ul>