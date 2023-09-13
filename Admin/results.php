<title>Examination results</title>
<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Examinee result</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Examinee result</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-body">

                <form method="POST">
                  <div class="row bg-light">
                    <div class="col-5">
                      <div class="form-group">
                        <div class="form-group">
                          <span><b>Date From</b></span>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                            </div>
                            <input type="date" class="form-control float-right" name="from" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="form-group">
                        <div class="form-group">
                          <span><b>Date To</b></span>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                            </div>
                            <input type="date" class="form-control float-right" name="to" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-2 mt-4">
                      <div class="form-group">
                        <button type="submit" class="btn btn-default" name="search">Search</button>
                      </div>
                    </div>
                  </div>
                </form>

                 <?php  
                    if(isset($_POST['search'])) {
                      $from = $_POST['from'];
                      $to   = $_POST['to'];
                 ?>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Student name</th>
                          <th>Examination result</th>
                          <th>Examination date</th>
                          <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody id="users_data">
                          <tr>
                            <?php 
                              // TOTAL QUESTION
                              $s = mysqli_query($conn, "SELECT quest_Id FROM questions");
                              $ss = mysqli_num_rows($s);

                              $sql = mysqli_query($conn, "SELECT * FROM exam JOIN users ON exam.user_Id=users.user_Id WHERE date_of_exam BETWEEN '$from' AND '$to' ");
                              if(mysqli_num_rows($sql) > 0) {
                              while ($row = mysqli_fetch_array($sql)) {
                                $passfail = $row['total'];
                                $count1 = $passfail / 100;
                                $count2 = $count1 * 100;
                                $count = number_format($count2, 0);
                            ?>
                              <td><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></td>
                              <td>
                                <?php if($row['total'] >= 50): ?>
                                <span class="badge bg-success"><?php echo $row['total'];?> / <?php echo $ss; ?></span>
                              <?php else: ?>
                                <span class="badge bg-danger"><?php echo $row['total'];?> / <?php echo $ss; ?></span> 
                              </td>
                              <?php endif; ?>
                              <td><?php echo date("F d, Y", strtotime($row['date_of_exam'])); ?></td>
                              <td>
                                <?php if($passfail >= 50): ?>
                                    <span class="badge bg-success">Passed!</span> 
                                <?php else: ?>
                                    <span class="badge bg-danger">Failed!</span>
                              </td>
                                <?php endif; ?>
                          </tr>

                          <?php } } else { ?>
                            <td colspan="100%" class="text-center">No record found</td>
                            <tr/>
                          <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr>
                              <th>Student name</th>
                              <th>Examination result</th>
                              <th>Examination date</th>
                              <th>Remarks</th>
                            </tr>
                        </tfoot>
                      </table>

                 <?php
                    } else {
                 ?>

                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Student name</th>
                          <th>Examination result</th>
                          <th>Examination date</th>
                          <th>Print result</th>
                        </tr>
                        </thead>
                        <tbody id="users_data">
                          <tr>
                            <?php 
                              // TOTAL QUESTION
                              $s = mysqli_query($conn, "SELECT quest_Id FROM questions");
                              $ss = mysqli_num_rows($s);

                              $sql = mysqli_query($conn, "SELECT * FROM exam JOIN users ON exam.user_Id=users.user_Id");
                              if(mysqli_num_rows($sql) > 0) {
                              while ($row = mysqli_fetch_array($sql)) {
                            ?>
                              <td><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></td>
                              <td>
                                <?php if($row['total'] >= 50): ?>
                                <span class="badge bg-success"><?php echo $row['total'];?> / <?php echo $ss; ?></span> </td>
                              <?php else: ?>
                                <span class="badge bg-danger"><?php echo $row['total'];?> / <?php echo $ss; ?></span> </td>
                              <?php endif; ?>
                              <td><?php echo date("F d, Y", strtotime($row['date_of_exam'])); ?></td>
                              <td>
                                <a href="exam_result.php?user_Id=<?php echo $row['user_Id']; ?>" class="btn bg-gradient-primary"><i class="fa-solid fa-eye"></i> Result</a>
                              </td>
                          </tr>

                          <?php } } else { ?>
                            <td colspan="100%" class="text-center">No record found</td>
                            <tr/>
                          <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr>
                              <th>Student name</th>
                              <th>Examination result</th>
                              <th>Examination date</th>
                              <th>Print result</th>
                            </tr>
                        </tfoot>
                      </table>

                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php include 'footer.php';  ?>
