<?php
    session_start();
    include "koneksi.php";
?>

<html>
    <head>
        <title>masuk</title>
    </head>
    <body>
        <form method="POST" align="center">

        <label> Nama Pengguna </lable><input type="text" name="user" placeholder=" masukan username"><br><br>
        <label> Kata Sandi </label><input type="text" name="pass" placeholder="masukan password"><br><br>
        <label>Jabatan : </label>
            <select name="level">
                <option value="admin">Administrator</option>
                <option value="user">Pengguna</option>
        </select>
            <br><br>
        <input type="submit" name="login" value="login"/><br>
        <!-- <button type="submit">login</button> -->
</form>
<?php
if  (isset($_POST['login'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
    
        // var_dump($user);
        // die;
            $data_user = mysqli_query ($koneksi, "SELECT * FROM log_in WHERE username='$user' AND password=md5('$pass')");
            $r = mysqli_fetch_array($data_user);
        // var_dump($r);
        // die;
            $username=isset($r['username']) ? $r['username'] : '';
            $password=isset($r['password']) ? $r['password'] : '';
            $level=isset($r['level']) ? $r['level'] : '';
        
            if ($user==$username && $pass=$password){
                $_SESSION['level']=$level;
                header ("location:awal.php");
                exit;
            }
            else{
            echo "datanya salah";
            }
        }
?>


    </body>
    </html>
    