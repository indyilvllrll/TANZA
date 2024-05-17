<?php

function redirect($url){
    echo"<script>
    window.location.href='$url';
    </script>";
}

function redirects($url){
    echo "<script>window.location.href = '$url';</script>";
}



function alert($type, $msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
        <div class="container mt-3 fixed-bottom"> 
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="alert $bs_class alert-dismissable fade show custom-alert" role="alert">
                        <strong class="me-3">$msg</strong>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Dismiss the alert after 3 seconds
            setTimeout(function(){
                document.querySelector('.alert').remove(); // Remove the alert
            }, 3000);
        </script>
    alert;
}




?>