<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUIZFORM | Examinations</title>
  <!---FAVICON ICON FOR WEBSITE--->
  <link rel="shortcut icon" type="image/png" href="../images/new.jpg">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/ba6fe04144.js" crossorigin="anonymous"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->

</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
<div class="wrapper ">

  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-sm-inline-block">
        <a href="users_view.php" class="nav-link"><span id="title_header">QUIZ FORM</span> : <span id="countdown"></span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto ">
 
    </ul>
  </nav>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">



  <?php 

      if(isset($_GET['user_Id'])) {
        $id = $_GET['user_Id'];
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content p-5">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header d-flex">
                <h5><span id="timer">General instructions</span> <span id="countdown"></span></h5>
                <a onclick="window.history.back()" class="text-dark btn btn-default btn-sm position-absolute" id="back" style="right: 20px;">Back</a>
              </div>
              <div class="card-body">
                  <form class="d-none" action="process_save.php" method="POST" id="Theform" onsubmit="myFuncstion()">
                    <input type="hidden" class="form-control form-control-sm" name="user_Id" value="<?php echo $id; ?>">
                       
                    <?php 
                        include 'category_english.php'; 
                    ?>
                    <div style="overflow:auto;">
                      <div style="float:right;">
                        <button type="submit" class="btn btn-info submit" id="submit" onclick="nextPrev(1)" name="exam">Submit</button>
                      </div>
                    </div>

                    
                </form>
                <div class="p-3" id="instructions">
                   <h5>Instructions:</h5>
                   <p style="text-indent: 30px;">There are one hundred(15) questions in this examination with 3 categories composing twenty(5) questions each. Please read the question and answer it religously.</p>
                   <p>Good luck to your exam!</p>
                   <!-- <p><b>Note: </b>You only have 1 hour to answer all the questions.</p> -->
                </div>
             </div>
             <div class="card-footer" id="hh">
               <button data-widget="fullscreen" role="button" type="button" id="start" class="btn bg-gradient-primary m-auto d-flex" onclick="start()">Start examination</button>
             </div>
            </div>
         </div>
        </div>
      </div>
    </section>

</div>

<?php } else { include '404.php'; } ?>


<?php include 'footer.php'; ?>


<script>
function start() {

  // TO SUBMIT FORM WHEN TIME BECOMES ZERO
  // THIS FUNCTION IS CALLED BELOW WITHIN THIS FUNCTION START()
  function myFuncstion() {
    document.getElementById("submit").click();
  }
  var form = document.getElementById('Theform');
  form.classList.remove("d-none");

  var start = document.getElementById('hh');
  start.classList.add("d-none");

  document.getElementById("back").classList.add("d-none");

  var instructions = document.getElementById('instructions');
  instructions.classList.add("d-none");

  document.getElementById('timer').innerHTML = "Questions";
  document.getElementById('title_header').innerHTML = "QUIZ FORM SURVEY QUESTIONNAIRE";

   // const startingMinutes = 60;
   // let time  = startingMinutes * 60;

   // const countdownEl = document.getElementById('countdown');

   // setInterval(updateCountdown, 1000);

   // function updateCountdown(){
   //  const minutes = Math.floor(time / 60);
   //  let seconds = time % 60;
   //  seconds = seconds < 10 ? '0' + seconds : seconds;
   //  countdownEl.innerHTML = `${minutes}:${seconds}`;
   //  time--;
   //  // if(time < 0) {
   //  //     myFuncstion();
   //  // }
   // }

}


</script>



 

