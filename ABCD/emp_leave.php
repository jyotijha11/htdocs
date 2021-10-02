<?php
include('header.php');
?>
           <section class="row justify-content-center">

              <div class="col-sm-12">
                <div class="table-responsive bg-white p-4">
            <div class="container">
			<div class="row justify-content-center mt-5">
			<div class="col-sm-7">
			<div class="login-box">
			<div class="mb-4 text-center"> <h1>Apply for leave</h1> </div>
			<form action="" method="POST" enctype="multipart/form-data">
			    <div class="row">
			       <div class="col-sm-12 mb-4">
			         <h3>request date</h3><input type="date" class="form-control" placeholder="" name="request_date">   
			      </div>
			    </div>
			      <div class="row">
			      <div class="col-sm-12 mb-4">
			         <h3>leave days</h3><input type="text" class="form-control" placeholder="" name="leave_days">   
			      </div>
			     
			    <button type="submit"  name="submit" value="submit" class="btn btn-primary btn-block"><a href="dashboard.php"></a> Apply <i class="fa fa-send"></i> </button>
			  </form>
			  <div class="login-footer">
			     
			  </div>
			</div>
			</div>
			</div>
			</div>
			</body>
			</html>
			<?php
			      require('conn.php');
			       if(isset($_POST['submit']) && $_POST['submit'] = "submit")
			       {  
			        $request_date=$_POST['request_date'];
			        $leave_days =$_POST['leave_days'];
			        $sql = "INSErT INTO  emp_leaves (emp_name,leave_type,request_date,leave_days,status,start_date,end_date,emp_id) VAlUES(' $request_date','leave_days')";
			        if (mysqli_query($conn, $sql)) 
			          {
			          
			            echo "New record created successfully";
			          }
			       else 
			          {
			            echo "Eror: " . mysqli_eror($conn);
			          }
			    }
			  ?>