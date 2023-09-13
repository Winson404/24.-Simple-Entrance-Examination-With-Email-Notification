<title>QUIZFORM | Examination result</title>
<?php 
    include 'navbar.php'; include '../sweetalert_messages.php';  
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Examination result</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="bookExam.php">Home</a></li>
              <li class="breadcrumb-item active">Examinations result</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-11">
            <div class="card card-secondary">
              <div class="card-header">
                <h5>Examination result</h5>
              </div>
              <div class="offset-11 mt-1">
                <button class="btn btn-secondary" id="printButton"><i class="fa-solid fa-print"></i> Print</button>
              </div>
              <br><br>

              <?php 
                  $fetch = mysqli_query($conn, "SELECT * FROM exam WHERE user_Id='$id' ");
                  $score = mysqli_fetch_array($fetch);
                  $passfail = $score['total'];

                  $count1 = $passfail / 100;
                  $count2 = $count1 * 100;
                  $count = number_format($count2, 0);
              ?>
                    <div class="container"id="printElement">
                      <p class="text-sm ml-3">Exam date: <?php echo date("F d, Y", strtotime($score['date_of_exam'])); ?></p>
                      <div class="row d-flex justify-content-center">

                      <div class="wrapper row p-3">
                         <div class="col-12 invoice-col">
                          <img src="../images-users/<?php echo $row['image']; ?>" alt="" class=" m-2 border" width="100" height="100">
                        </div>
                        <div class="col-sm-12 col-12 p-3" style="line-height: 10px;">
                          <p>
                            Name:&nbsp;&nbsp;
                            <span style="text-decoration: underline;"><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></span>
                          </p>
                          <p>
                            Age:&nbsp;&nbsp;<span style="text-decoration: underline;"><?php echo $row['age']; ?></span>
                          </p>
                          <p>
                            Permanent Address:&nbsp;&nbsp;<span style="text-decoration: underline;"><?php echo $row['address']; ?></span>
                          </p>
                      </div>

                      <div class="col-12 p-3">
                        <p><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?> have <?php if($passfail >= 11) { echo '<b>Passed</b>'; } else { echo '<b>Failed</b>'; } ?> the Entrance Examination with a score of <b><?php echo $count; ?></b> out of 15 items.</p>
                        <hr>
                      </div>
                      

                      <div class="col-lg-12 p-3">
                        <table class="table table-bordered table-striped " style="border: 1px solid lightgrey;">
                          <h5>Examination Breakdown:</h5>
                          <thead>
                          <tr>
                            <th width="50%"  style="border: 1px solid lightgrey;">Examination category</th>
                            <th width="30%" class="text-center"  style="border: 1px solid lightgrey;">Score</th>
                          </tr>
                          </thead>
                          <tbody id="users_data">
                            <tr>
                               <td style="border: 1px solid lightgrey;">English</td>
                               <td style="border: 1px solid lightgrey;"><?php echo $score['english']; ?></td>
                            </tr>
                            <tr>
                               <td style="border: 1px solid lightgrey;">Mathematics</td>
                               <td style="border: 1px solid lightgrey;"><?php echo $score['math']; ?></td>
                            </tr>
                            <tr>
                               <td style="border: 1px solid lightgrey;">Science</td>
                               <td style="border: 1px solid lightgrey;"><?php echo $score['science']; ?></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <thead>
                              <tr>
                                <th>Total</th>
                                <th><?php echo $score['total']; ?></th>
                              </tr>
                            </thead>
                          </tfoot>
                        </table> 
                        <div class="d-flex">
                            <h5>Remarks: <?php if($passfail >= 11) { echo 'Passed!'; } else { echo 'Failed!'; } ?></h5>
                        </div>
                      </div>
                      </div>
                    </div>
                      
            </div>
  
         </div>
        </div>
      </div>
    </section>
    
</div>


 <script src="print.js"> </script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'; ?>
 

