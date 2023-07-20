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
    <!--  TELEGRAM: @isnotdev  -->
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

<body class="vertical-layout alt-menu sidebar-noneoverflow" onload="ccgen();">
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before mb-3">
            </div>
            <div class="content-body">
                <div class="mt-2"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="mb-2 title1"><u><strong>ISNOTDEV</strong></u></h4>
                                <div style="font-size:15px;color:#212121;font-family:VT323;" class="form-group"> CHARGED: <span class="charge">0</span> CVV: <span class="cvvs"> 0</span> CCN: <span class="aprovadas"> 0</span> DECLINED: <span class="reprovadas">0</span> TOTAL: <span class="carregadas">0</span> <br> DATE: <span class="badge badge-dark" id="datetime">01/02/2022</span> TIME: <span class="badge badge-dark" id="timenow">12:00:00 AM</span>
                                </div>
                                <div style="font-size:13px;color:#212121;font-family:Monzane;" class="form-group" for="inputcvv">
                                    <textarea rows="12" id="lista" class="efg form-control text-center form-checker mb-2" placeholder="CARDS HERE"></textarea>
                                    </span>
                                </div>
                                <select name="gate" id="gate" class="form-control" style="display: none; margin-bottom: 5px;">
                                    <option style="color:white" value="api.php">STRIPE CCN 10$</option>
                                </select>
                                <textarea rows="1" class="efg form-control text-center" style="width: 100%; float: center ;" id="tgid" placeholder="HIT FORWARDER (TELEGRAM ID)"></textarea><br><br>
                                <button style="width: 100%; float: center;" class="btn btn-block btn-primary" onclick="generator_clk()">BIN GENERATOR</button><br>
                                <br>
                                <button class="btn1 btn-success btn btn-play" style="width: 50%; float: left;">CHECK CARDS</button>
                                <button class="btn1 btn btn-info btn-tgid" id="tgid" style="width: 50%; float: right;">GRAB TG ID</button>
                                <br>
                                <!-- start of ccgen -->
                                <div class="" id="form_generator" name="form_generator" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-12">
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
                            <h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED</h4>
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
                            <h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CVV</h4>
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
                            <h4 class="card-title mb-1"><i class="fa fa-times text-success"></i> CCN</h4>
                            <div id='lista_aprovadas'></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-13">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-right">
                                <button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-primary btn-sm btn-trash"><i class="fa fa-trash"></i></button>
                            </div>
                            <h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED</h4>
                            <div style='display: none;' id='lista_reprovadas'></div>
                        </div>
                    </div>
                </div>
                <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
                <script src="theme-assets/js/scripts/generator.js" type="text/javascript"></script>
                <script>
                    function generator_clk() {
                        $("#form_generator").slideToggle("slow");
                    }
                    $(document).ready(function() {
                        Swal.fire({
                            imageUrl: 'https://cdn.discordapp.com/attachments/1090075657855324313/1111944321889992745/arterxsk.png',
                            imageHeight: 90,
                            text: "You can only check 100 ccs at a time to avoid too much lagging.",
                            confirmButtonColor: '#08469E',
                        })
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
                                    window.location.href = "https://t.me/isnotdevbot";
                                }
                            });
                        });
                        $('.show-charge').click(function() {
                            var type = $('.show-charge').attr('type');
                            $('#lista_charge').slideToggle();
                            if (type == 'show') {
                                $('.show-charge').html('<i class="fa fa-eye"></i>');
                                $('.show-charge').attr('type', 'hidden');
                            } else {
                                $('.show-charge').html('<i class="fa fa-eye-slash"></i>');
                                $('.show-charge').attr('type', 'show');
                            }
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
                            }
                        });
                        $('.show-lives').click(function() {
                            var type = $('.show-lives').attr('type');
                            $('#lista_aprovadas').slideToggle();
                            if (type == 'show') {
                                $('.show-lives').html('<i class="fa fa-eye"></i>');
                                $('.show-lives').attr('type', 'hidden');
                            } else {
                                $('.show-lives').html('<i class="fa fa-eye-slash"></i>');
                                $('.show-lives').attr('type', 'show');
                            }
                        });
                        $('.show-dies').click(function() {
                            var type = $('.show-dies').attr('type');
                            $('#lista_reprovadas').slideToggle();
                            if (type == 'show') {
                                $('.show-dies').html('<i class="fa fa-eye"></i>');
                                $('.show-dies').attr('type', 'hidden');
                            } else {
                                $('.show-dies').html('<i class="fa fa-eye-slash"></i>');
                                $('.show-dies').attr('type', 'show');
                            }
                        });
                        $('.btn-trash').click(function() {
                            Swal.fire({
                                title: 'REMOVED DEAD',
                                icon: 'success',
                                showConfirmButton: false,
                                toast: true,
                                position: 'top-end',
                                timer: 3000
                            });
                            $('#lista_reprovadas').text('');
                        });
                        $('.btn-copy1').click(function() {
                            Swal.fire({
                                title: 'COPIED CHARGED',
                                icon: 'success',
                                showConfirmButton: false,
                                toast: true,
                                position: 'top-end',
                                timer: 3000
                            });
                            var lista_charge = document.getElementById('lista_charge').innerText;
                            var textarea = document.createElement("textarea");
                            textarea.value = lista_charge;
                            document.body.appendChild(textarea);
                            textarea.select();
                            document.execCommand('copy');
                            document.body.removeChild(textarea);
                        });
                        $('.btn-copy2').click(function() {
                            Swal.fire({
                                title: 'COPIED CVV',
                                icon: 'success',
                                showConfirmButton: false,
                                toast: true,
                                position: 'top-end',
                                timer: 3000
                            });
                            var lista_live = document.getElementById('lista_cvvs').innerText;
                            var textarea = document.createElement("textarea");
                            textarea.value = lista_live;
                            document.body.appendChild(textarea);
                            textarea.select();
                            document.execCommand('copy');
                            document.body.removeChild(textarea);
                        });
                        $('.btn-copy').click(function() {
                            Swal.fire({
                                title: 'COPIED CCN',
                                icon: 'success',
                                showConfirmButton: false,
                                toast: true,
                                position: 'top-end',
                                timer: 3000
                            });
                            var lista_lives = document.getElementById('lista_aprovadas').innerText;
                            var textarea = document.createElement("textarea");
                            textarea.value = lista_lives;
                            document.body.appendChild(textarea);
                            textarea.select();
                            document.execCommand('copy');
                            document.body.removeChild(textarea);
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
                                    title: 'enter your card!',
                                    icon: 'error',
                                    showConfirmButton: false,
                                    toast: true,
                                    timer: 3000
                                });
                                return false;
                            }
                            Swal.fire({
                                title: 'checking!',
                                icon: 'success',
                                showConfirmButton: false,
                                toast: true,
                                timer: 3000
                            });
                            if (!tgid) {
                                Swal.fire({
                                    title: "TG ID REQUIRED !",
                                    text: "Just in case if checker gets stuck, you will not lose your hits.",
                                    icon: "danger",
                                    confirmButtonText: "run the bot",
                                    cancelButtonText: "exit",
                                    showCancelButton: true,
                                    cancelButtonColor: '#d33',
                                    cocancelButtonTextnfirmButtonColor: '#08469E',
                                    preConfirm: () => {
                                        window.location.href = "https://t.me/isnotdevbot";
                                    }
                                });
                                return false;
                            }
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
                            if (total > 200) {
                                Swal.fire({
                                    icon: "danger",
                                    text: "charot, rent ka para lagpas isa",
                                    confirmButtonColor: '#08469E',
                                });
                                return false;
                            }
                            $('.carregadas').text(total);
                            $('.btn-play').attr('disabled', true);
                            $('.btn-stop').attr('disabled', false);
                            line.forEach(function(data) {
                                var callBack = $.ajax({
                                    url: gate + '?lista=' + data + '&tgid=' + tgid,
                                    success: function(retorno) {
                                        if (retorno.indexOf("#CHARGED") >= 0) {
                                            $('#lista_charge').append(retorno);
                                            removelinha();
                                            charge = charge + 1;
                                        } else if (retorno.indexOf("#CVV") >= 0) {
                                            $('#lista_cvvs').append(retorno);
                                            removelinha();
                                            live = live + 1;
                                        } else if (retorno.indexOf("#CCN") >= 0) {
                                            $('#lista_aprovadas').append(retorno);
                                            removelinha();
                                            lives = lives + 1;
                                        } else {
                                            $('#lista_reprovadas').append(retorno);
                                            removelinha();
                                            dies = dies + 1;
                                        }
                                        testadas = charge + live + lives + dies;
                                        $('.charge').text(charge);
                                        $('.cvvs').text(live);
                                        $('.aprovadas').text(lives);
                                        $('.reprovadas').text(dies);
                                        $('.testadas').text(testadas);
                                        if (testadas == total) {
                                            Swal.fire({
                                                title: 'done！',
                                                icon: 'success',
                                                showConfirmButton: false,
                                                toast: true,
                                                timer: 3000
                                            });
                                            $('.btn-play').attr('disabled', false);
                                            $('.btn-stop').attr('disabled', true);
                                        }
                                    }
                                });
                                $('.btn-stop').click(function() {
                                    Swal.fire({
                                        title: 'paused!',
                                        icon: 'warning',
                                        showConfirmButton: false,
                                        toast: true,
                                        timer: 3000
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
                        myTimer()
                    }, 1000);

                    function myTimer() {
                        var dt = new Date();
                        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
                        var d = new Date();
                        document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
                    }
                </script>
</body>

      </html>