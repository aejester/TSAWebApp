<?php session_start() ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.css" />
    <title>Hello, world!</title>
    <style>
        table{width:100%;}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="/">TSA Web App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php if($_SESSION["first"] == ""){?>
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            <?php }else{ ?>
                <li id="logout" class="nav-item active">
                   <button class="btn btn-danger">Logout</button>
                </li>
            <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="./events.php">Events</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <br/>
    
      
      <div class="row">
        <div class="col-md-2"><img src="https://via.placeholder.com/150

C/O https://placeholder.com/"/></div>
        <div class="col-md-6">
        
          <h1>User</h1>
          <p>Various user information</p>
          
        
        </div>
      </div>
      
      <hr/>
      
      <h1>User's Teams</h1>
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Event Name</th>
            <th scope="col">Team Members</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>Some Event Here</td>
          <td>Jack, Jill, Humpty Dumpty, Big Bird</td>
            
          </tr>
      </tbody>
      </table>
 
  
    </div>
   
   <?php require("backend/includes/footer.php") ?> 
   <script>
        
        $(document).ready(() => {
            $("#logout").click(() => {
                $.ajax({
                    url:"backend/scripts/logout.php",
                    method:"post",
                    data:{},
                    success: (response) => {
                        location.reload(true);
                    }
                }); //end ajax
            }); //end logout click
            
        }); //end document ready
   </script>

   </body>
</html>
