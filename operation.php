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
           .but
            {
                background: rgb(25, 118, 210);
                  color: white;
                  padding:5px 19px;
                  border-radius: 12px;
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
                   
           
            <div class="col-md-12 k" style="">

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
                                    if($row['action']=='Called')
                                    {
                                    echo"<tr>
                                    <td>".$row['Name']."</td>
                                    <td>".$row['Mailid']."</td>
                                    <td>".$row['PhoneNo']."</td>
                                    <td>".$row['Course']."</td>
                                    <td>".$row['Comments']."</td>
                                     <td>
                                       <button type='button' class='acc' value='accepted'>Accepted</button>
                                       <button type='button' class='rej' value='rejected'>Rejected</button>
                                       <button type='button' class='non' value='not-answered'>NotAnswered</button>
                                     </td>   
                                    </tr>";       
                                    }
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
           
            </div>
            </div>
            <script type="text/javascript">
                
                $(document).ready(function(){
                    var ans;
                   $('.acc').on('click',function(){
                        ans=$('.acc').val();  //storing the accepting value in ans variable
                       
                       //$(this).css("background-color", "green");
//                         $('.rej').prop('disabled', true);
//                          $('.non').prop('disabled', true);
                           $(this).closest('tr').remove();   //to remove that row
                           //$(this).closest('td').valu
                           var id1 = $(this).closest("tr").find('td:eq(2)').text();  //fetching phone number from register form and storing the value in id1 variable
                           $.ajax({
			    type: "POST",      //sending the variable values to next file so using POST method
			    url: "store.php",  //updation file name
			   data: {
				status:ans,  //accepted
				ids: id1,    //phone number
				
				},
			    
					success: function(data) {
						//alert(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
				
                           console.log(id1);
                           
                        });
                   $('.rej').on('click',function(){
                       ans=$('.rej').val();
                       var id1 = $(this).closest("tr").find('td:eq(2)').text();
                       $(this).css("background-color", "green");
                       $.ajax({
			    type: "POST",
			    url: "store.php",
			   data: {
				status:ans,
				ids: id1,
				
				},
			    
					success: function(data) {
						//alert(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
				
                       $(this).closest('tr').remove();
                   });
                   $('.non').on('click',function(){
                       ans=$('.non').val();
                       var id1 = $(this).closest("tr").find('td:eq(2)').text();
                       $.ajax({
			    type: "POST",
			    url: "store.php",
			   data: {
				status:ans,
				ids: id1,
				
				},
			    
					success: function(data) {
						//alert(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
				
                      $(this).closest('tr').remove();
                       $(this).css("background-color", "green");
                       
                      
                   });
                   
                });
//            function change()
//                {
//                    //document.getElementById("button").value="Rejected";
//                      
//                      var element1 = document.getElementById("but2");
//                      var element2 = document.getElementById("but3");
//                      element1.disabled=true;
//                      element2.disabled=true;
//                      
//                       element1.style.backgroundColor = 'Red';
//                       element2.style.backgroundColor = 'Red';
//                      
//                }
//                 //window.location.reload();
//             function change1()
//                {
////                    document.getElementById("but1").value="Rejected";
//                      var element3 = document.getElementById("but1");
//                      var element4 = document.getElementById("but3");
//                      element3.disabled=true;
//                      element4.disabled=true;
//                      element3.style.backgroundColor = 'Red';
//                      element4.style.backgroundColor = 'Red';
//                      
//                }
//              function change2()
//                {
////                    document.getElementById("but1").value="Rejected";
//                      const element5 = document.getElementById("but1");
//                       const element6 = document.getElementById("but2");
//                      element5.disabled=true;
//                      element6.disabled=true;
//                      element5.style.backgroundColor = 'Red';
//                      element6.style.backgroundColor = 'Red';
//                }
           </script>
</body>  
</html>
