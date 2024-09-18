<!DOCTYPE html>
<html>
<head>
<title>Codeigniter 4 || Using Sweet with Jquery</title>
</head>
<body>
<! — this means show swee after btn clicked →
    <button onclick="Swal.fire('Good job!','You clicked the button!','success')">Show sweetalert</button>
<! — initialitation the selector of button →
    <button id="btn-show-sweetalert2">Show sweetalert with jquery</button>
</body>
<! — to call sweetalert2 library →
    <script src="<?= base_url('/js/sweetalert2.all.min.js'); ?>"></script>
<! — to call jquery library →
    <script src="<?= base_url('/js/jquery-3.6.0.min.js'); ?>"></script>
    <script>
// letting css, html to be loaded first before execute the function
        $( document ).ready(function() {
// condition if btn-show-sweetalert2 cliced
        $( "#btn-show-sweetalert2" ).click(function() {
// show the sweetalert after btn clicked
        Swal.fire({
        itle: 'Custom animation with Animate.css',
        showClass: {
        popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
        }
        })
        });
        });
    </script>
</html>