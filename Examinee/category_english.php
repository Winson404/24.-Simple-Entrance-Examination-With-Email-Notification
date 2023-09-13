<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">English category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='English'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q1" class="form-control form-control-sm" name="ans_q1" value="NA">
                      <h5><b>1.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q1" value="<?php echo $row['choice_one']; ?>" id="q1" onclick="first();"> 
                      <label style="font-weight: normal;" for="q1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q1" value="<?php echo $row['choice_two']; ?>" id="q2" onclick="first();"> 
                      <label style="font-weight: normal;" for="q2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q1" value="<?php echo $row['choice_three']; ?>" id="q3" onclick="first();"> 
                      <label style="font-weight: normal;" for="q3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q1" value="<?php echo $row['choice_four']; ?>" id="q4" onclick="first();"> 
                      <label style="font-weight: normal;" for="q4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function first() {
                            var a = document.getElementById("q1").value;
                            var b = document.getElementById("q2").value;
                            var c = document.getElementById("q3").value;
                            var d = document.getElementById("q4").value;
                            var x = document.getElementById("ans_q1");

                                 if(document.getElementById('q1').checked) { x.value = a; }
                            else if(document.getElementById('q2').checked) { x.value = b; } 
                            else if(document.getElementById('q3').checked) { x.value = c; } 
                            else if(document.getElementById('q4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='English' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q2" class="form-control form-control-sm" name="ans_q2" value="NA">
                      <h5><b>2.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q2" value="<?php echo $row['choice_one']; ?>" id="q5" onclick="second();"> 
                      <label style="font-weight: normal;" for="q5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q2" value="<?php echo $row['choice_two']; ?>" id="q6" onclick="second();"> 
                      <label style="font-weight: normal;" for="q6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q2" value="<?php echo $row['choice_three']; ?>" id="q7" onclick="second();"> 
                      <label style="font-weight: normal;" for="q7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q2" value="<?php echo $row['choice_four']; ?>" id="q8" onclick="second();"> 
                      <label style="font-weight: normal;" for="q8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function second() {
                            var a = document.getElementById("q5").value;
                            var b = document.getElementById("q6").value;
                            var c = document.getElementById("q7").value;
                            var d = document.getElementById("q8").value;
                            var x = document.getElementById("ans_q2");

                                 if(document.getElementById('q5').checked) { x.value = a; }
                            else if(document.getElementById('q6').checked) { x.value = b; } 
                            else if(document.getElementById('q7').checked) { x.value = c; } 
                            else if(document.getElementById('q8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='English' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q3" class="form-control form-control-sm" name="ans_q3" value="NA">
                      <h5><b>3.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q3" value="<?php echo $row['choice_one']; ?>" id="q9" onclick="third();"> 
                      <label style="font-weight: normal;" for="q9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q3" value="<?php echo $row['choice_two']; ?>" id="q10" onclick="third();"> 
                      <label style="font-weight: normal;" for="q10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q3" value="<?php echo $row['choice_three']; ?>" id="q11" onclick="third();"> 
                      <label style="font-weight: normal;" for="q11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q3" value="<?php echo $row['choice_four']; ?>" id="q12" onclick="third();"> 
                      <label style="font-weight: normal;" for="q12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function third() {
                            var a = document.getElementById("q9").value;
                            var b = document.getElementById("q10").value;
                            var c = document.getElementById("q11").value;
                            var d = document.getElementById("q12").value;
                            var x = document.getElementById("ans_q3");

                                 if(document.getElementById('q9').checked) { x.value = a; }
                            else if(document.getElementById('q10').checked) { x.value = b; } 
                            else if(document.getElementById('q11').checked) { x.value = c; } 
                            else if(document.getElementById('q12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='English' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q4" class="form-control form-control-sm" name="ans_q4" value="NA">
                      <h5><b>4.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q4" value="<?php echo $row['choice_one']; ?>" id="q13" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q4" value="<?php echo $row['choice_two']; ?>" id="q14" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q4" value="<?php echo $row['choice_three']; ?>" id="q15" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q4" value="<?php echo $row['choice_four']; ?>" id="q16" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourth() {
                            var a = document.getElementById("q13").value;
                            var b = document.getElementById("q14").value;
                            var c = document.getElementById("q15").value;
                            var d = document.getElementById("q16").value;
                            var x = document.getElementById("ans_q4");

                                 if(document.getElementById('q13').checked) { x.value = a; }
                            else if(document.getElementById('q14').checked) { x.value = b; } 
                            else if(document.getElementById('q15').checked) { x.value = c; } 
                            else if(document.getElementById('q16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='English' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q5" class="form-control form-control-sm" name="ans_q5" value="NA">
                      <h5><b>5.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q5" value="<?php echo $row['choice_one']; ?>" id="q17" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q5" value="<?php echo $row['choice_two']; ?>" id="q18" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q5" value="<?php echo $row['choice_three']; ?>" id="q19" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q5" value="<?php echo $row['choice_four']; ?>" id="q20" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fifth() {
                            var a = document.getElementById("q17").value;
                            var b = document.getElementById("q18").value;
                            var c = document.getElementById("q19").value;
                            var d = document.getElementById("q20").value;
                            var x = document.getElementById("ans_q5");

                                 if(document.getElementById('q17').checked) { x.value = a; }
                            else if(document.getElementById('q18').checked) { x.value = b; } 
                            else if(document.getElementById('q19').checked) { x.value = c; } 
                            else if(document.getElementById('q20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <div class="col-12 mt-3">
                        <h4 class="bg-light text-center">Mathematics category</h4>
                        <hr>
                      </div>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q6" class="form-control form-control-sm" name="ans_q6" value="NA">
                      <h5><b>6.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q6" value="<?php echo $row['choice_one']; ?>" id="q21" onclick="sixth();"> 
                      <label style="font-weight: normal;" for="q21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q6" value="<?php echo $row['choice_two']; ?>" id="q22" onclick="sixth();"> 
                      <label style="font-weight: normal;" for="q22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q6" value="<?php echo $row['choice_three']; ?>" id="q23" onclick="sixth();"> 
                      <label style="font-weight: normal;" for="q23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q6" value="<?php echo $row['choice_four']; ?>" id="q24" onclick="sixth();"> 
                      <label style="font-weight: normal;" for="q24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function sixth() {
                            var a = document.getElementById("q21").value;
                            var b = document.getElementById("q22").value;
                            var c = document.getElementById("q23").value;
                            var d = document.getElementById("q24").value;
                            var x = document.getElementById("ans_q6");

                                 if(document.getElementById('q21').checked) { x.value = a; }
                            else if(document.getElementById('q22').checked) { x.value = b; } 
                            else if(document.getElementById('q23').checked) { x.value = c; } 
                            else if(document.getElementById('q24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q7" class="form-control form-control-sm" name="ans_q7" value="NA">
                      <h5><b>7.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q7" value="<?php echo $row['choice_one']; ?>" id="q25" onclick="seventh();"> 
                      <label style="font-weight: normal;" for="q25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q7" value="<?php echo $row['choice_two']; ?>" id="q26" onclick="seventh();"> 
                      <label style="font-weight: normal;" for="q26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q7" value="<?php echo $row['choice_three']; ?>" id="q27" onclick="seventh();"> 
                      <label style="font-weight: normal;" for="q27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q7" value="<?php echo $row['choice_four']; ?>" id="q28" onclick="seventh();"> 
                      <label style="font-weight: normal;" for="q28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function seventh() {
                            var a = document.getElementById("q25").value;
                            var b = document.getElementById("q26").value;
                            var c = document.getElementById("q27").value;
                            var d = document.getElementById("q28").value;
                            var x = document.getElementById("ans_q7");

                                 if(document.getElementById('q25').checked) { x.value = a; }
                            else if(document.getElementById('q26').checked) { x.value = b; } 
                            else if(document.getElementById('q27').checked) { x.value = c; } 
                            else if(document.getElementById('q28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q8" class="form-control form-control-sm" name="ans_q8" value="NA">
                      <h5><b>8.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q8" value="<?php echo $row['choice_one']; ?>" id="q29" onclick="eighth();"> 
                      <label style="font-weight: normal;" for="q29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q8" value="<?php echo $row['choice_two']; ?>" id="q30" onclick="eighth();"> 
                      <label style="font-weight: normal;" for="q30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q8" value="<?php echo $row['choice_three']; ?>" id="q31" onclick="eighth();"> 
                      <label style="font-weight: normal;" for="q31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q8" value="<?php echo $row['choice_four']; ?>" id="q32" onclick="eighth();"> 
                      <label style="font-weight: normal;" for="q32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eighth() {
                            var a = document.getElementById("q29").value;
                            var b = document.getElementById("q30").value;
                            var c = document.getElementById("q31").value;
                            var d = document.getElementById("q32").value;
                            var x = document.getElementById("ans_q8");

                                 if(document.getElementById('q29').checked) { x.value = a; }
                            else if(document.getElementById('q30').checked) { x.value = b; } 
                            else if(document.getElementById('q31').checked) { x.value = c; } 
                            else if(document.getElementById('q32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q9" class="form-control form-control-sm" name="ans_q9" value="NA">
                      <h5><b>9.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q9" value="<?php echo $row['choice_one']; ?>" id="q33" onclick="nineth();"> 
                      <label style="font-weight: normal;" for="q33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q9" value="<?php echo $row['choice_two']; ?>" id="q34" onclick="nineth();"> 
                      <label style="font-weight: normal;" for="q34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q9" value="<?php echo $row['choice_three']; ?>" id="q35" onclick="nineth();"> 
                      <label style="font-weight: normal;" for="q35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q9" value="<?php echo $row['choice_four']; ?>" id="q36" onclick="nineth();"> 
                      <label style="font-weight: normal;" for="q36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function nineth() {
                            var a = document.getElementById("q33").value;
                            var b = document.getElementById("q34").value;
                            var c = document.getElementById("q35").value;
                            var d = document.getElementById("q36").value;
                            var x = document.getElementById("ans_q9");

                                 if(document.getElementById('q33').checked) { x.value = a; }
                            else if(document.getElementById('q34').checked) { x.value = b; } 
                            else if(document.getElementById('q35').checked) { x.value = c; } 
                            else if(document.getElementById('q36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="ten" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_ten" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q10" class="form-control form-control-sm" name="ans_q10" value="NA">
                      <h5><b>10.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q10" value="<?php echo $row['choice_one']; ?>" id="q37" onclick="tenth();"> 
                      <label style="font-weight: normal;" for="q37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q10" value="<?php echo $row['choice_two']; ?>" id="q38" onclick="tenth();"> 
                      <label style="font-weight: normal;" for="q38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q10" value="<?php echo $row['choice_three']; ?>" id="q39" onclick="tenth();"> 
                      <label style="font-weight: normal;" for="q39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q10" value="<?php echo $row['choice_four']; ?>" id="q40" onclick="tenth();"> 
                      <label style="font-weight: normal;" for="q40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function tenth() {
                            var a = document.getElementById("q37").value;
                            var b = document.getElementById("q38").value;
                            var c = document.getElementById("q39").value;
                            var d = document.getElementById("q40").value;
                            var x = document.getElementById("ans_q10");

                                 if(document.getElementById('q37').checked) { x.value = a; }
                            else if(document.getElementById('q38').checked) { x.value = b; } 
                            else if(document.getElementById('q39').checked) { x.value = c; } 
                            else if(document.getElementById('q40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <div class="col-12 mt-3">
                        <h4 class="bg-light text-center">Science category</h4>
                        <hr>
                      </div>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="eleven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_eleven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q11" class="form-control form-control-sm" name="ans_q11" value="NA">
                      <h5><b>11.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q11" value="<?php echo $row['choice_one']; ?>" id="q41" onclick="eleventh();"> 
                      <label style="font-weight: normal;" for="q41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q11" value="<?php echo $row['choice_two']; ?>" id="q42" onclick="eleventh();"> 
                      <label style="font-weight: normal;" for="q42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q11" value="<?php echo $row['choice_three']; ?>" id="q43" onclick="eleventh();"> 
                      <label style="font-weight: normal;" for="q43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q11" value="<?php echo $row['choice_four']; ?>" id="q44" onclick="eleventh();"> 
                      <label style="font-weight: normal;" for="q44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function eleventh() {
                            var a = document.getElementById("q41").value;
                            var b = document.getElementById("q42").value;
                            var c = document.getElementById("q43").value;
                            var d = document.getElementById("q44").value;
                            var x = document.getElementById("ans_q11");

                                 if(document.getElementById('q41').checked) { x.value = a; }
                            else if(document.getElementById('q42').checked) { x.value = b; } 
                            else if(document.getElementById('q43').checked) { x.value = c; } 
                            else if(document.getElementById('q44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="twelve" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_twelve" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q12" class="form-control form-control-sm" name="ans_q12" value="NA">
                      <h5><b>12.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q12" value="<?php echo $row['choice_one']; ?>" id="q45" onclick="twelveth();"> 
                      <label style="font-weight: normal;" for="q45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q12" value="<?php echo $row['choice_two']; ?>" id="q46" onclick="twelveth();"> 
                      <label style="font-weight: normal;" for="q46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q12" value="<?php echo $row['choice_three']; ?>" id="q47" onclick="twelveth();"> 
                      <label style="font-weight: normal;" for="q47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q12" value="<?php echo $row['choice_four']; ?>" id="q48" onclick="twelveth();"> 
                      <label style="font-weight: normal;" for="q48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function twelveth() {
                            var a = document.getElementById("q45").value;
                            var b = document.getElementById("q46").value;
                            var c = document.getElementById("q47").value;
                            var d = document.getElementById("q48").value;
                            var x = document.getElementById("ans_q12");

                                 if(document.getElementById('q45').checked) { x.value = a; }
                            else if(document.getElementById('q46').checked) { x.value = b; } 
                            else if(document.getElementById('q47').checked) { x.value = c; } 
                            else if(document.getElementById('q48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="thirteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_thirteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q13" class="form-control form-control-sm" name="ans_q13" value="NA">
                      <h5><b>13.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q13" value="<?php echo $row['choice_one']; ?>" id="q49" onclick="thirteenth();"> 
                      <label style="font-weight: normal;" for="q49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q13" value="<?php echo $row['choice_two']; ?>" id="q50" onclick="thirteenth();"> 
                      <label style="font-weight: normal;" for="q50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q13" value="<?php echo $row['choice_three']; ?>" id="q51" onclick="thirteenth();"> 
                      <label style="font-weight: normal;" for="q51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q13" value="<?php echo $row['choice_four']; ?>" id="q52" onclick="thirteenth();"> 
                      <label style="font-weight: normal;" for="q52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function thirteenth() {
                            var a = document.getElementById("q49").value;
                            var b = document.getElementById("q50").value;
                            var c = document.getElementById("q51").value;
                            var d = document.getElementById("q52").value;
                            var x = document.getElementById("ans_q13");

                                 if(document.getElementById('q49').checked) { x.value = a; }
                            else if(document.getElementById('q50').checked) { x.value = b; } 
                            else if(document.getElementById('q51').checked) { x.value = c; } 
                            else if(document.getElementById('q52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="fourteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_fourteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q14" class="form-control form-control-sm" name="ans_q14" value="NA">
                      <h5><b>14.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q14" value="<?php echo $row['choice_one']; ?>" id="q53" onclick="fourteenth();"> 
                      <label style="font-weight: normal;" for="q53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q14" value="<?php echo $row['choice_two']; ?>" id="q54" onclick="fourteenth();"> 
                      <label style="font-weight: normal;" for="q54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q14" value="<?php echo $row['choice_three']; ?>" id="q55" onclick="fourteenth();"> 
                      <label style="font-weight: normal;" for="q55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q14" value="<?php echo $row['choice_four']; ?>" id="q56" onclick="fourteenth();"> 
                      <label style="font-weight: normal;" for="q56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fourteenth() {
                            var a = document.getElementById("q53").value;
                            var b = document.getElementById("q54").value;
                            var c = document.getElementById("q55").value;
                            var d = document.getElementById("q56").value;
                            var x = document.getElementById("ans_q14");

                                 if(document.getElementById('q53').checked) { x.value = a; }
                            else if(document.getElementById('q54').checked) { x.value = b; } 
                            else if(document.getElementById('q55').checked) { x.value = c; } 
                            else if(document.getElementById('q56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="fifteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_fifteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q15" class="form-control form-control-sm" name="ans_q15" value="NA">
                      <h5><b>15.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q15" value="<?php echo $row['choice_one']; ?>" id="q57" onclick="fifteenth();"> 
                      <label style="font-weight: normal;" for="q57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q15" value="<?php echo $row['choice_two']; ?>" id="q58" onclick="fifteenth();"> 
                      <label style="font-weight: normal;" for="q58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q15" value="<?php echo $row['choice_three']; ?>" id="q59" onclick="fifteenth();"> 
                      <label style="font-weight: normal;" for="q59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q15" value="<?php echo $row['choice_four']; ?>" id="q60" onclick="fifteenth();"> 
                      <label style="font-weight: normal;" for="q60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function fifteenth() {
                            var a = document.getElementById("q57").value;
                            var b = document.getElementById("q58").value;
                            var c = document.getElementById("q59").value;
                            var d = document.getElementById("q60").value;
                            var x = document.getElementById("ans_q15");

                                 if(document.getElementById('q57').checked) { x.value = a; }
                            else if(document.getElementById('q58').checked) { x.value = b; } 
                            else if(document.getElementById('q59').checked) { x.value = c; } 
                            else if(document.getElementById('q60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                     

                    </div>

                  