<?php
  session_start();
  require('conn.php');

    $sql = "SELECT schedule.*, location.location as locationname FROM schedule LEFT JOIN location ON `schedule`.`locatin_id` = `location`.`id` WHERE schedule.id=".$_SESSION['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>User Profile</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
    .formwrap{
      width: 70%;
      margin: 0 auto;
      margin-top: 85px;
      padding: 25px;
      background: #eee;
      border: 1px solid #00000047;
    }
     body
        {
          background-image: url('https://cloudfront-us-east-2.images.arcpublishing.com/reuters/VEKSCTM4ERJNFDZX7ZKNEJZP2A.jpg');
          background-size: cover;


        }
        .tooltp {
    position: absolute;
    background: pink;
    border-bottom: 
    float: right;
    width: 0px;
    right: 60px;
   padding: 10px 0px;
margin: -5px;
    -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    transition: width 2s;
    overflow: hidden;
  }
.lnk_usr:hover .tooltp{
  overflow: hidden;
display: block;
right: 60px;
width: 100px;
text-shadow: 2px 2px;
}
  </style>
</head>
<body>
<div class="formwrap" style="background-color: lightgreen;" style="text-decoration-color: black;olor">

<div class="container emp-profile">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h6>
                                        User Profile
                                    </h6>
                                    <div class="col-md-4">
                                    <img src="upload/<?=$row['image'];?>" style="height: 200px;">
                                    </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="background-color: lightblue;">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <a href="update.php" >Reschedule</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                        </div>
                    </div>
                    <div class="formwrap">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                               <?php echo $row['id'];?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                 <?php echo $row['name'];?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo $row['phone'];?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo $row['locationname'];?>
                                            </div>
                                        </div>
                                      </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                 <?php echo $row['gender'];?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                 <?php echo $row['dob'];?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo $row['address'];?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adhar</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo $row['adhar'];?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Time</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo $row['stime'];?>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php echo date('d-m-Y', strtotime($row['sdate']));?>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
      </div>
</body>
</html>