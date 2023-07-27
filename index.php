<!DOCTYPE html>
<html class="loading">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
 <title>私のルナ</title>
 <link rel="shorcut icon" href="./icon.png">
 <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <!--  TELEGRAM: @isnotdev  -->
 <!-- STYLE -->
 <link rel="stylesheet" type="text/css" href="theme-assets/css/isnotdev/form.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/isnotdev/ads.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/isnotdev/cardresponse.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/isnotdev/button.css">
 <link rel="stylesheet" type="text/css" href="theme-assets/css/isnotdev/main.css">
 <!-- FONTS -->
 <link href="https://fonts.cdnfonts.com/css/new-super-mario-font-u" rel="stylesheet">
 <link href="https://fonts.cdnfonts.com/css/morioka" rel="stylesheet">
 <link href="https://fonts.cdnfonts.com/css/monzane" rel="stylesheet">
</head>

<body class="vertical-layout alt-menu sidebar-noneoverflow" onload="ccgen();">
 <div class="app-content content">
  <div class="content-wrapper">
   <div class="content-wrapper-before mb-3">
   </div>
   <div class="content-body">
    <div class="mt-2">
     <div style="font-size:16px;color:#212121;font-family:VT323;" class="text-center card-body col-xl-13 form-group">
      CARDS FOR CHARGE GATE, SK FOR SK GATE, AND EMAIL FOR GRAMMARLY INVITE. 1 EMAIL PER INVITE IN GRAMMARLY GATE. IT'S NOT FOR A MASSIVE INVITE.
     </div>
    </div>
    <div class="row">
     <div class="col-md-12">
      <div class="card">
       <div class="card-body text-center">
        <h4 class="mb-2 title1"><u><strong>ISNOTDEV</strong></u></h4>

        <div style="font-size:15px;color:#212121;font-family:Monzane;" class="text-center form-group">
         DATE: <span id="datetime">01/02/2022</span> TIME: <span id="timenow">12:00:00 AM</span>.
        </div>
        <div style="font-size:5px;color:#212121;font-family:Monzane;" class="form-group" for="inputcvv">
         <textarea rows="12" id="lista" class="efg form-control text-center form-checker mb-2" placeholder="INPUT HERE"></textarea>
        </span>
       </div>

       <!-- GATES -->
       <select name="gate" id="gate" class="form-control" style="margin-bottom: 5px; font-size:14px">
        <option style="color:white" value="api/gateway.php">SELECT GATE</option>
        <option style="color:white" value="api/usd-ccn.php">SK CCN CHARGE 1$</option>
        <option style="color:white" value="api/eur-ccn.php">SK CCN CHARGE 1€</option>
        <option style="color:white" value="api/skcheck.php">SK CHECKER</option>
        <option style="color:white" value="api/xomknows.php">GRAMMARLY INVITE</option>
       </select>
       <!-- END OF GATES -->

       <br><input rows="1" class="efg form-control text-center" style="width: 100%; float: center ;" id="sec" placeholder="SK_LIVE_XXXX"></input><br><br>
       <button style="width: 100%; float: center;" class="btn btn-block btn-primary" onclick="generator_clk()">CC GEN</button><br>
       <br>
       <button class="btn1 btn-success btn btn-play" style="width: 100%; float: center;">START CHECKING</button>


       <!-- start of ccgen -->
       <div class="" id="form_generator" name="form_generator" style="font-size:14px; display: none;">
        <div class="row">
         <div class="col-mb-6"></div>
         <div class="col-mb-12">
          <div class="card-body">
           <form name="console" id="console" role="form" method="POST">
            <div>
             <div class="row">
              <div class="col-lg-8">
               <div class="form-group">
                <label style="margin-left: 5px" class="form-control-label" for="inputbin">BIN CARD</label>
                <input id="ccpN" name="ccp" maxlength="19" type="text" id="inputbin" class="form-control" placeholder="424242 xxxx xxxx xxxx">
               </div>
              </div>
              <div class="col-lg-4">
               <div class="form-group">
                <label style="margin-left: 5px" class="form-control-label" for="inputcvv">CVV</label>
                <input type="text" id="eccv" name="eccv" class="form-control" placeholder="rnd" value="rnd">
               </div>
              </div>
             </div>
             <div class="row">
              <div class="col-lg-4">
               <div class="form-group">
                <select name="ccoudatfmt" class="input_text" style="display:none;">
                 <option value="CHECKER" selected="selected">CHK</option>
                 <option value="CSV">CSV</option>
                 <option value="XML">XML</option>
                 <option value="JSON">JSON</option>
                </select>
                <input type="hidden" name="tr" value="1000">
                <input type="hidden" name="L" style="width: 20px" value="1L">
                <div type="hidden" id="bininfo" align="left"></div>
                <label style="margin-left: 5px" class="form-control-label" for="inputmonth">MONTH</label>
                <select class="form-control" name="emeses">
                 <option value="rnd">RANDOM </option>
                 <option value="01">01 - JAN</option>
                 <option value="02">02 - FEB</option>
                 <option value="03">03 - MAR</option>
                 <option value="04">04 - APR</option>
                 <option value="05">05 - MAY</option>
                 <option value="06">06 - JUN</option>
                 <option value="07">07 - JUL</option>
                 <option value="08">08 - AUG</option>
                 <option value="09">09 - SEP</option>
                 <option value="10">10 - OCT</option>
                 <option value="11">11 - NOV</option>
                 <option value="12">12 - DEC</option>
                </select>
               </div>
              </div>
              <div class="col-lg-4">
               <div class="form-group">
                <label style="margin-left: 5px" class="form-control-label" for="inputyear">YEAR</label>
                <select class="form-control" name="eyear">
                 <option value="rnd">RANDOM</option>
                 <option value="2020">2020</option>
                 <option value="2021">2021</option>
                 <option value="2022">2022</option>
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>
                 <option value="2025">2025</option>
                 <option value="2026">2026</option>
                 <option value="2027">2027</option>
                 <option value="2028">2028</option>
                 <option value="2029">2029</option>
                 <option value="2030">2030</option>
                </select>
               </div>
              </div>
              <div class="col-lg-4">
               <div class="form-group">
                <label style="margin-left: 10px" class="form-control-label" for="inputquantity">QUANTITY</label>
                <input type="number" name="ccghm" maxlength="2" class="form-control" value="10">
                <select name="ccnsp" class="input_text" style="display:none;">
                 <option selected="selected">None</option>
                </select>
               </div>
              </div>
             </div>
             <button type="button" style="margin-top: 10px" class="btn btn-success btn-block" name="gerar" id="gerar">GENERATE</button>
            </div>
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
      <!-- end of ccgen -->
     </div>
    </div>
   </div>

   <div class="col-xl-13">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
       <button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>
      </div>
      <h4 class="card-title mb-1"><i class="fa fa-usd text-success"></i> HITS: [<span class="charge">0</span>/<span class="carregadas">0</span>]</h4>
      <div id='lista_charge'></div>
     </div>
    </div>
   </div>
   <div class="col-xl-13">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type="show" class="btn btn-primary btn-sm show-live"><i class="fa fa-eye-slash"></i></button>
       <button class="btn btn-success btn-sm btn-copy2"><i class="fa fa-copy"></i></button>
      </div>
      <h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CVV: [<span class="cvvs">0</span>/<span class="carregadas">0</span>]</h4>
      <div id='lista_cvvs'></div>
     </div>
    </div>
   </div>
   <div class="col-xl-13">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
       <button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>
      </div>
      <h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CCN: [<span class="aprovadas">0</span>/<span class="carregadas">0</span>]</h4>
      <div id='lista_aprovadas'></div>
     </div>
    </div>
   </div>
   <div class="col-xl-13">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
       <button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>
      </div>
      <h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED: [<span class="reprovadas">0</span>/<span class="carregadas">0</span>]</h4>
      <div style='display: none;' id='lista_reprovadas'></div>
     </div>
    </div>
   </div>
   <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
   <script src="theme-assets/js/scripts/generator.js" type="text/javascript"></script>
   <script src="theme-assets/js/scripts/isnotdev.js" type="text/javascript"></script>

  </body>

 </html>