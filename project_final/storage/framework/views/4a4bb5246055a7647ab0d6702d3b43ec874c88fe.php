<?php $__env->startSection('content'); ?>
<div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>
<!-- About Information -->
    <section class="text-center bg-light">
      <div class="container" style="width:60%;">
        <h2 class="mb-5">Register</h2>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form class= "form" method="post" action="<?php echo e(route('store')); ?>">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="controle" value="register">
      <h5><label for="name" ><b>Name</b></label></h5>
      <input type="text" style ="width:80%;" placeholder="Enter Name" name="name" required><br><br>

      <h5><label for="lname" ><b>Last Name</b></label></h5>
      <input type="text" style ="width:80%;" placeholder="Enter Last Name" name="last_name" required><br><br>

       <h5> <label for="male"><b>Male</b></label>
      <input type="radio" name="gender" id="male" value="M">
      <label for="female">&ensp;&ensp;<b>Female</b></label>
      <input type="radio" name="gender" id="female" value="F">
      <label for="other"><b>&ensp;&ensp;Other</b></label>
      <input type="radio" name="gender" id="other" value="O"><p></p></h5><br>

      <h5><label for="country"><b>Country&ensp;&ensp;<br></b></label><select style ="width:80%;" name="country" id="country"></h5>

      <option value="0" label="Select a country" selected="selected">Select a country</option>
      <optgroup id="country-optgroup-Africa" label="Africa">
      <option value="DZ" label="Algeria">Algeria</option>
      <option value="AO" label="Angola">Angola</option>
      </optgroup>
      </select>
      <br><br>

      <h5><label for="email" ><b>Email</b></label></h5>
      <input type="text" style ="width:80%;" placeholder="Enter Email" name="email" required><br><br>

      <h5><label for="uname" ><b>Username</b></label></h5>
      <input type="text" style ="width:80%;" placeholder="Enter Username" name="username" required><br><br>

      <h5><label for="psw"><b>Password</b></label></h5>
      <input type="password" style ="width:80%;" placeholder="Enter Password" name="password" required><br><br>

      <h5><label for="cpsw"><b>Confirm password</b></label></h5>
      <input type="password" style ="width:80%;" placeholder="Confirm Password" name="cpsw" required><br><br>

      <h5><button class="btn btn-lg btn-primary" type="submit" style ="width:30%;">Register</button></h5>
      <h7><label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label></h7><br><br>
          </form>
          </div>
      </div>
    </section>


        <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.static_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>