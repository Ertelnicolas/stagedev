<?php
session_start();
        if(isset($_GET['message'])){
        echo'<span>'.$_GET['message'].'</span>';
        }
        ?>