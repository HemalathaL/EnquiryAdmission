<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <title></title>
    </head>
     <style>
        
      
        body{
           background: linear-gradient(to right,rgb(0,122,255),rgb(3,247,255));  
            margin:50px;
        }
        
        .k {
           
             
             padding: 10px;
/*           */
            }
            h1
            {
                font-family: 'Poppins', sans-serif;
                color: white;
            }
            .but
            {
                background: rgb(25, 118, 210);
                  color: white;
                  padding:5px 19px;
                  border-radius: 12px;
            }
          .tab
          {
              width: 100%;
              border-collapse: collapse;
              background:white;
              border-radius: 12px 12px 0 0;
              overflow: hidden;
              box-shadow: 0 5px 10px #888888;
          }
          .tab td,.tab th
          {
              padding: 12px 15px;
              border:1px solid #ddd;
              text-align: center;
              font-size:16px;
          }
          .tab th
          {
              background: rgb(25, 118, 210);
   
                color: white;
              text-transform: uppercase;
               font-family: 'Poppins', sans-serif;
          }
          .tab td
          {
              font-family: 'Open Sans', sans-serif;
          }
          .tab tr:hover
          {
           
            
          }
           .tab th:hover
          {
            
            
          }
          .tab tbody tr:nth-child(even)
          {
              background-color: rgb(238, 238, 238);
          }
         @media(max-width:500px)
         {
             .tab thead
             {
                 display: none;
             }
             .tab,.tab tbody,.tab tr,.tab td
             {
                 display: block;
                 width: 100%;
             }
             .tab tr
             {
                 margin-bottom: 15px;
             }
             .tab td
             {
                 text-align: center;
                 padding-left: 50%;
                 position: relative;
             }
             .tab th::before
             {
                 content: attr(data-label);
                 position: absolute;
                 left: 0;
                 width: 50%;
                 padding-left: 15px;
                 font-size: 15px;
                 font-weight: bold;
                 text-align: left;
             }
         }
  
        </style>
        <body>  
            <div class="container">
                <center> <h1>Load</h1></center>
                <div class="row">
                   
            <div class="col-md-1"></div>
            <div class="col-md-10 k" style="">

              <div class="table-responsive">          
               <table class="table table-hover tab">
                 <thead>
                    <tr>
                       <th data-label="Name">Name</th>
                       <th data-label="Mail id">Mail Id</th>
                       <th data-label="Phone No">Phone Number</th>
                       <th data-label="Course">Course</th>
                       <th data-label="Comments">Comments</th>
                       <th data-label="Actions">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $conn=  mysqli_connect('localhost', 'root', '', 'iucadmin');
                        if($conn)
                        {
                            $query="SELECT * FROM `register`";
                            $result=  mysqli_query($conn,$query);
                            $numrow=  mysqli_num_rows($result);
                            if($numrow>0)
                            {     
                                while($row=  mysqli_fetch_assoc($result))
                                {
                                    echo"<tr>
                                    <td>".$row['Name']."</td>
                                    <td>".$row['Mailid']."</td>
                                    <td>".$row['PhoneNo']."</td>
                                    <td>".$row['Course']."</td>
                                    <td>".$row['Comments']."</td>
                                    <td>".$row['action']."</td>
                                    </tr>";
                                }
                            }
                        }
                        else
                        {
                            echo 'Database Not Connected';
                        }
                     ?>
                    </tbody>
                </table>
              </div>
         </div>
            <div class="col-md-1"></div>
            </div>
            </div>
</body>  
</html>