<?php
    session_start();
if (isset($_SESSION["username"])) {
?>
<<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e34dae2732.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="dashboard.css">


<style>
        body {
          overflow-x: hidden;
          position: relative; 
    		  top: 0;
    		  left: 0;
    		  transform: none;
    		  padding: 80px;
    		  z-index: 2;
    		  width: auto;
    		  max-width: 120em;
    		  margin: 0 auto;
			    background-image: url(http://localhost/club/img/backG12.jpg) ;
  			  height: auto;
  			  background-position: center;
  			  background-repeat: no-repeat;
  			  background-size: cover;
        }
        h2 {
          color: white;
			    margin-top:100px;
			    margin-bottom :50px;
		    }
        .container-fluid {
          margin-top: 0.5em;
        }
        .table-transparent {
          background-color: #F8F9FA; 
          border: none; 
        }
    </style>

</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../lucia.php"><span class='span1'>LU<span class="span2">CIA. </span></span></a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="addArtist.php"><i class="fas fa-user"></i><span class="text-white">Add Artist</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="editEvent.php"><i class="fas fa-edit"></i><span class="text-white">Edit Event</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="addEvent.php"><i class="far fa-calendar-alt"></i><span class="text-white">Add Events</span></a>
					</li>		
          <li class="nav-item">
						<a class="nav-link" href="register.php"><i class="far fa-calendar-alt"></i><span class="text-white">Add Admin</span></a>
					</li>			
          <?php
                        if (isset($_SESSION["username"])) {
                        $name = $_SESSION["username"];
                        echo <<<icon
                            <a href="http://localhost/club/admin/admindashboard.php" class="btn btn-warning me-2 nav-item login" ><i class="fas fa-sign-in-alt"></i> $name</a>
                            icon;
                        } else {
                            echo <<<login
                            <a href="loginform.php" class="btn btn-warning me-2 nav-item login" ><i class="fas fa-sign-in-alt"></i> Admin Login</a>
                            <a href="loginform.php" class="btn btn-warning me-2 nav-item sign__up"><i class="fa-solid fa-user-plus"></i> Sign up</a>
                            login;
                        }
                    ?>
				</ul>
			</div>
		</div>
	</nav>
<div class="container-fluid">
        <div class="row">
          <h2 class="text-center mt-4">Edit Events</h2>
              <div class='col-12'>
                  <div class="table-responsive ">
                    <table class = 'table table-striped table-light table-transparent' id= 'editTable'>
                      
                    </table>
                  </div>
              </div>
        </div>
</div>
<div class=" d-flex justify-content-center">
					<a href="admindashboard.php" class="see_more btn btn-primary">< Back to Dashboard</a>
					<article id="results"></article>
				</div>
<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="editModalLabel">Edit Event Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="info_update">

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" id="update">Update</button>
      </div>
    </div>
  </div>
</div>
<script>
        $(document).ready(function(){
            $.ajax({
                method: "GET",
                url: "upcomingAPI.php",
                              
            })
            .done(function( msg ) {
               let retObj=JSON.parse(msg);
               var table_str = '<thead><tr><th>Event</th><th>Artist</th><th>Date</th><th>Start Time</th><th>End Time</th><th>Category</th><th>Fee</th><th>Capacity</th><th>Description</th></thead>';
                table_str += '<tbody>';
	              if(retObj.length) {
                $.each(retObj, function(key,value) {
                    table_str +='<tr><td>'+value.event_name+'</td><td>'+value.artist_name+'</td><td>'+value.date+'</td><td>'+value.start_time+'</td><td>'+value.end_time+'</td><td>'+value.category+'</td><td>'+value.fee+'</td><td>'+value.max_capacity+'</td><td>'+value.performance_detail+'</td>';
                    table_str += '<td><button class = "btn btn-dark edit_btn" id="'+value.event_id+'">EDIT</button></td>';
                    table_str += '<td><button class = "btn btn-dark delete_btn" id="'+value.event_id+'">DELETE</button></td></tr>';
                });
            }
			          table_str +='</tbody>';
                 $('#editTable').html(table_str);
            });
          });
           $(document).on('click','.edit_btn', function(){
                var edit_id= $(this). attr('id');
                $.ajax({
                      url: 'editAPI.php',
                      method: 'PUT',
                      data: {edit_id: edit_id}
                })
                .done(function(data){
                  var retObj = JSON.parse(data);
                  console.log(retObj);
                 
                  var formData = '<form class="p-5 bg-light row g-3" id="update_form"><div class=""><label for="eventname" class="form-label">Event Name</label><input type="text" class="form-control" name="eventname" value="'+retObj[0].event_name+'"></div>';
                  formData+='<div><label for="eventid" class="form-label">Event ID</label><input type="number" class="form-control" name="eventID" value="'+retObj[0].event_id+'"></div>';   
                  formData+='<div><label for="artistname" class="form-label">Artist</label><input type="text" class="form-control" name="artistname" value="'+retObj[0].artist_name+'"></div>';     
                  formData+='<div ><label for="date" class="form-label">Event Date (yy-mm-dd)</label><input type="text" class="form-control" name="date" value="'+retObj[0].date+'"></div>';
                  formData+='<div><label for="start_time" class="form-label">Start Time</label><input type="time" class="form-control" name="start_time" value="'+retObj[0].start_time+'"></div>';
                  formData+='<div><label for="end_time" class="form-label">End Time</label><input type="time" class="form-control" name="end_time" value="'+retObj[0].end_time+'"></div>';
                  formData+='<div><label for="eventcat" class="form-label">Event Category (Music, Poetry or Comedy)</label><input type="text" class="form-control" name="eventcat" value="'+retObj[0].category+'"></div>'; 
                  formData+='<div><label for="fee" class="form-label">Fee</label><input type="number" class="form-control" name="fee" value="'+retObj[0].fee+'"></div>';
                  formData+='<div><label for="capacity" class="form-label">Capacity</label><input type="number" class="form-control" name="capacity" value="'+retObj[0].max_capacity+'"></div>';
                  formData+='<div><label for="detail" class="form-label">Detail</label><input type="text" class="form-control" name="detail" value="'+retObj[0].performance_detail+'"></div>';                  $("#info_update").html(formData);
                        $("#editData").modal('show');
                 
                })
               
          });
          $('#update').click(function(){
                var form=$("#update_form");
                  $.ajax({
                  method: "PUT",
                  url: "updateAPI.php",
                  data:form.serialize(),          
                  success : function(data){
                    var msg=data.trim();
                      if(msg == 'success')
                      window.location.href="http://localhost/club/admin/editEvent.php";
                      else
                      window.alert("Error Updating Event");
                  }
                });
            });
            $(document).on('click','.delete_btn', function(){
                var delete_id= $(this). attr('id');
                $.ajax({
                      url: 'deleteAPI.php',
                      method: 'DELETE',
                      data: {delete_id: delete_id}
                })
                .done(function(data){
                    var msg=data.trim();
                      if(msg == 'success')
                      window.location.href="http://localhost/club/admin/editEvent.php";
                      else
                      window.alert("Error Deleting Event");
                  })
                });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
 <?php  
} else {
    header('location:http://localhost/club/loginform.php');
}
?>



