<!DOCTYPE html>
<html class="loading">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
 <title>arterxsk</title>
 <link rel="shorcut icon" href="./p1ack_icon.png">
 <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

 <!--	TELEGRAM: @isnotdev	-->
 <!-- STYLE -->
 <link rel="stylesheet" type="text/css" href="theme-assets/css/_art/form.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/_art/ads.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/_art/cardresponse.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/_art/button.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/_art/main.css">
 <!-- FONTS -->
 <link href="https://fonts.cdnfonts.com/css/new-super-mario-font-u" rel="stylesheet">
 <link href="https://fonts.cdnfonts.com/css/morioka" rel="stylesheet">
 <link href="https://fonts.cdnfonts.com/css/monzane" rel="stylesheet">

</head>
<body class="vertical-layout">
 <div class="app-content content">
  <div class="content-wrapper">
   <div class="content-wrapper-before mb-3">
   </div>
   <div class="content-body">
    <div class="mt-2"></div>
    <div class="row">
     <div class="col-md-8">
      <div class="card">
       <div class="card-body text-center">
        <h4 class="mb-2 title1"><u><strong>ISNOTDEV</strong></u></h4>
        <div style="font-size:15px;color:#212121;font-family:VT323;" class="form-group">
         <span class="badge" style="width: 100%">
          DATE: <span id="datetime">01/02/2022</span> TIME: <span id="timenow">12:00:00 AM</span>
         </span>
        </div>
        <div style="font-size:13px;color:#212121;font-family:Monzane;" class="form-group">
         <textarea rows="12" class="efg form-control text-center form-checker mb-2" placeholder="CARDS HERE"></textarea>
         <span class="badge" style="width: 100%">
          CHARGED: <span class="charge">0</span> CVV: <span class="cvvs"> 0</span> CCN: <span class="aprovadas"> 0</span> DECLINED: <span class="reprovadas">0</span> TOTAL: <span class="carregadas">0</span>
         </span>
        </div>
        <select name="gate" id="gate" class="form-control" style="margin-bottom: 5px;">
         <option style="color:white" value="api.php">STRIPE CCN 10$</option>
        </select>

        <br>
        <button class="btn1 btn btn-play" style="width: 100%; float: center;">START</button>
       
</div>
      </div>
     </div>
     <div class="col-xl-12">
      <div class="card">
       <div class="card-body">
        <div class="float-right">
         <button type="show" class="btn btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
         <button class="btn btn-sm btn-copy1"><i class="fa fa-clipboard"></i></button>
        </div>
        <h4 class="card-title mb-1"><i class="fa fa-credit-card" style="color: #060606"></i></i> CHARGED</h4>
       <div id='lista_charge'></div>
      </div>
     </div>
    </div>
    <div class="col-xl-12">
     <div class="card">
      <div class="card-body">
       <div class="float-right">
        <button type="show" class="btn btn-sm show-aprovadas"><i class="fa fa-eye-slash"></i></button>
        <button class="btn btn-sm btn-copy1"><i class="fa fa-clipboard"></i></button>
       </div>
       <h4 class="card-title mb-1"><i class="fa fa-check" style="color: #060606"></i></i> LIVE CARD</h4>
      <div id='lista_aprovadas'></div>
     </div>
    </div>
   </div>
   <div class="col-xl-12">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type='hidden' class="btn btn-sm show-dies"><i class="fa fa-eye"></i></button>
       <button class="btn btn-sm btn-trash"><i class="fa fa-trash" style="color: #C2352D"></i></button>
      </div>
      <h4 class="card-title mb-1"><i class="fa fa-times" style="color: #060606"></i> DECLINED</h4>
      <div style='display: none;' id='lista_reprovadas'></div>
     </div>
    </div>
   </div>

  </div>
 </div>
</div>

<script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<footer style="font-family: VT323;">
 <a href="http://t.me/arterxsk/">FULLY CUSTOMIZED BY: <p style="font-family: Morioka;">
  @isnotdev</a>
 </p>
</footer>

<script>

 $(document).ready(function() {

  Swal.fire({
   imageUrl: 'https://cdn.discordapp.com/attachments/1090075657855324313/1111944321889992745/arterxsk.png',
   imageHeight: 90,
   text: "<3!",
   confirmButtonText: 'join group',
   cancelButtonText: "continue",
   showCancelButton: true,
   cancelButtonColor: '#007b4a',
   confirmButtonColor: '#08469E',
   preConfirm: () => {
    window.location.href = "https://t.me/arterxskwtf";
   }
  })

  $('.show-charge').click(function() {
   var type = $('.show-charge').attr('type');
   $('#lista_charge').slideToggle();
   if (type == 'show') {
    $('.show-charge').html('<i class="fa fa-eye"></i>');
    $('.show-charge').attr('type', 'hidden');
   } else {
    $('.show-charge').html('<i class="fa fa-eye-slash"></i>');
    $('.show-charge').attr('type', 'show');
   }});

  $('.btn-tgid').click(function() {
   Swal.fire({
    title: "HIT SENDER !",
    text: "grab your telegram id and paste it into the box. the bot will forward every hit you have.",
    icon: "info",
    confirmButtonText: "run the bot",
    cancelButtonText: "exit",
    showCancelButton: true,
    cancelButtonColor: '#d33',
    confirmButtonColor: '#08469E',
    preConfirm: () => {
     window.location.href = "https://t.me/arterxskbot";
    }
   });
  });


  $('.show-live').click(function() {
   var type = $('.show-live').attr('type');
   $('#lista_cvvs').slideToggle();
   if (type == 'show') {
    $('.show-live').html('<i class="fa fa-eye"></i>');
    $('.show-live').attr('type', 'hidden');
   } else {
    $('.show-live').html('<i class="fa fa-eye-slash"></i>');
    $('.show-live').attr('type', 'show');
   }});

  $('.show-lives').click(function() {
   var type = $('.show-lives').attr('type');
   $('#lista_aprovadas').slideToggle();
   if (type == 'show') {
    $('.show-lives').html('<i class="fa fa-eye"></i>');
    $('.show-lives').attr('type', 'hidden');
   } else {
    $('.show-lives').html('<i class="fa fa-eye-slash"></i>');
    $('.show-lives').attr('type', 'show');
   }});

  $('.show-dies').click(function() {
   var type = $('.show-dies').attr('type');
   $('#lista_reprovadas').slideToggle();
   if (type == 'show') {
    $('.show-dies').html('<i class="fa fa-eye"></i>');
    $('.show-dies').attr('type', 'hidden');
   } else {
    $('.show-dies').html('<i class="fa fa-eye-slash"></i>');
    $('.show-dies').attr('type', 'show');
   }});

  $('.btn-trash').click(function() {
   Swal.fire({
    title: 'REMOVED DEAD', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
   });
   $('#lista_reprovadas').text('');
  });

  $('.btn-copy1').click(function() {
   Swal.fire({
    title: 'COPIED CHARGED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
   });
   var lista_charge = document.getElementById('lista_charge').innerText;
   var textarea = document.createElement("textarea");
   textarea.value = lista_charge;
   document.body.appendChild(textarea);
   textarea.select();
   document.execCommand('copy'); document.body.removeChild(textarea);
  });

  $('.btn-copy2').click(function() {
   Swal.fire({
    title: 'COPIED CVV', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
   });
   var lista_live = document.getElementById('lista_cvvs').innerText;
   var textarea = document.createElement("textarea");
   textarea.value = lista_live;
   document.body.appendChild(textarea);
   textarea.select();
   document.execCommand('copy'); document.body.removeChild(textarea);
  });

  $('.btn-copy').click(function() {
   Swal.fire({
    title: 'COPIED CCN', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
   });
   var lista_lives = document.getElementById('lista_aprovadas').innerText;
   var textarea = document.createElement("textarea");
   textarea.value = lista_lives;
   document.body.appendChild(textarea);
   textarea.select();
   document.execCommand('copy'); document.body.removeChild(textarea);
  });


  $('.btn-play').click(function() {
   var tgid = $("#tgid").val();
   var delay = $("#delay").val();
   var sec = $("#sec").val();
   var e = document.getElementById("gate");
   var gate = e.options[e.selectedIndex].value;
   var lista = $('.form-checker').val().trim();
   var array = lista.split('\n');
   var charge = 0,
   live = 0,
   lives = 0,
   dies = 0,
   testadas = 0,
   txt = '';

   if (!lista) {
    Swal.fire({
     title: 'enter your card!', icon: 'error', showConfirmButton: false, toast: true, timer: 3000
    });
    return false;
   }

   Swal.fire({
    title: 'checking!', icon: 'success', showConfirmButton: false, toast: true, timer: 3000
   });

   var line = array.filter(function(value) {
    if (value.trim() !== "") {
     txt += value.trim() + '\n';
     return value.trim();
    }
   });

   /*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

   var total = line.length;


   /*
line.forEach(function(value){
txt += value + '\n';
});
*/

   $('.form-checker').val(txt.trim());
   // ảo ma hả, đừng lấy code chứ !!
   if (total > 100) {
    Swal.fire({
     title: '100 CC’S ONLY!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
    });
    return false;
   }

   $('.carregadas').text(total);
   $('.btn-play').attr('disabled', true);
   $('.btn-stop').attr('disabled', false);

   line.forEach(function(data) {
    var callBack = $.ajax({
     url: gate + '?lista=' + data,
     success: function(retorno) {
      if (retorno.indexOf("CHARGED") >= 0) {
       $('#lista_charge').append(retorno);
       removelinha();
       charge = charge +1;
      } else if (retorno.indexOf("CVV") >= 0) {
       $('#lista_aprovadas').append(retorno);
       removelinha();
       live = live +1;
      } else if (retorno.indexOf("CCN") >= 0) {
       $('#lista_aprovadas').append(retorno);
       removelinha();
       lives = lives +1;
      } else {
       $('#lista_reprovadas').append(retorno);
       removelinha();
       dies = dies +1;
      }
      testadas = charge + live + lives + dies;
      $('.charge').text(charge);
      $('.cvvs').text(live);
      $('.aprovadas').text(lives);
      $('.reprovadas').text(dies);
      $('.testadas').text(testadas);

      if (testadas == total) {
       Swal.fire({
        title: 'done！', icon: 'success', showConfirmButton: false, toast: true, timer: 3000
       });
       $('.btn-play').attr('disabled', false);
       $('.btn-stop').attr('disabled', true);
      }
     }
    });
    $('.btn-stop').click(function() {
     Swal.fire({
      title: 'paused!', icon: 'warning', showConfirmButton: false, toast: true, timer: 3000
     });
     $('.btn-play').attr('disabled', false);
     $('.btn-stop').attr('disabled', true);
     callBack.abort();
     return false;
    });
   });
  });
 });

 function removelinha() {
  var lines = $('.form-checker').val().split('\n');
  lines.splice(0, 1);
  $('.form-checker').val(lines.join("\n"));
 }
 var myVar = setInterval(function() {
  myTimer()}, 1000);
 function myTimer() {
  var dt = new Date();
  document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
  var d = new Date();
  document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
 }
</script>

</body>
</html>