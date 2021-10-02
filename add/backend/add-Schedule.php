<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SCHEDULE</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js'></script>
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
          background-repeat: no-repeat;
          background-size: cover;


        }
  </style>
</head>
<body>
<div class="modal-header border-0">
    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
</div>
<div class="container-fluid">
    <div class="row" id="location_modal">
        <div class="col-6 border-left" id="frm-field">
            <div class="formwrap">
                <h3>Schedule Form:</h3>
                <form id="schedule_form">
                    <input type="hidden" name="lid" >
                    <input type="hidden" name="date_sched">
                        <div class="form-group">
                            <label for="name" class="control-label">Fullname</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact" class="control-label">Contact</label>
                            <input type="text" class="form-control" name="contact" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="control-label">Gender</label>
                            <select type="text" class="custom-select" name="gender" required>
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="control-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label">Address</label>
                            <textarea class="form-control" name="address" rows="3" required></textarea>
                        </div>
                         <button  type="submit" name="search" class="btn btn-primary" value="SEARCH">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>