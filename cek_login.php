<?php
require_once( 'lib/main.php' );
session_start();
if ( $_POST['form']=="guru") {
    $arr = array(  $_POST['nip'], $_POST['password']);
    $f = $db->f(  'guru' , 'nip_guru, password, nama_guru', 'WHERE nip_guru=?', $_POST['nip'] );
    $res = ( $f ) ? true : false;

    if($res==true && ($_POST['password']==$f->password)){
      $_SESSION['nip']=$f->nip_guru;
      $_SESSION['nama']=$f->nama_guru;
      header('Location: http://localhost/Apsi/Guru.php');

    } 
    else header('Location: login?status=wrongGuru');
  }
else if ( $_POST['form']=="waliMurid") {
    $arr = array(  $_POST['hape'], $_POST['password']);
    $f = $db->f(  'walimurid' , 'nip_guru, password, nama_guru', 'WHERE nip_guru=?', $_POST['nip'] );
    $res = ( $f ) ? true : false;

    if($res==true && ($_POST['password']==$f->password)){
      $_SESSION['logged_userRA']=$f->email_usr;
      $_SESSION['status_akunRA']=$f->status;
      $_SESSION['id_timRA']=$f->id_tim;
      header('Location: http://localhost/Apsi/Guru.php');

    } 
    else header('Location: login?status=wrongGuru');
  }

?>