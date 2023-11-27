<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
        <title></title>
    </head>
    <style>
        a:hover
        {
            text-decoration: none;
        }
    
       
        .k
        {
           text-align: center;    
        }
        container
        {
            
            background-color: white;
            margin: 0px auto;
        }
        body{
               
           background: linear-gradient(to right,rgb(0,122,255),rgb(3,247,255));  
            background-size:cover;
           
        }
        button
        {
            border-radius: 5px;
            font-family:'Poppins', sans-serif;
            font-size:20px;
            padding: 8px 19px;
            font-weight: bold;
            border:none;
             background-image: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);
        }
        button:hover
        {
          background: linear-gradient(to right,rgb(0,122,255),rgb(3,247,255));  
        }
       label
        {
          
          font-size:19px;
          padding: 9px;
          text-align: center;
          color: rgb(0,122,255);
          margin-right: 54px;
          font-family: 'Poppins', sans-serif;
        }
        .inpbx
        {
           font-family: 'Poppins', sans-serif;
            padding:35px 24px;
           
        }
        .inpbx input
        {
            
            height:55px;
            width:100%;
            outline: none;
            border-radius: 5px;
            border:1px solid #ccc;
           
            text-align: left;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .inpbx input:focus 
            {
             box-shadow:0 0 5px rgba(81,203,238,1);
             border:2px solid black;
            }
         .inpbx #subject:focus
         {
             box-shadow:0 0 5px rgba(81,203,238,1);
         }
        .com
        {
          border:2px solid white;
          border-radius: 20px;
          background-image: linear-gradient(white,white);
          padding-bottom: 34px;
          margin-top: -39px;
          margin-left: 94px;
          width:50%;
        
        }
      
         textarea {max-width:95%;}
    </style>
    <body>  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php"><p style="text-align: center;font-family: 'Poppins', sans-serif;font-size:39px;color:white;">Registration Form</p><br><br><br></a>
                </div>   
            </div>
            <div class="row">
              <div class="col-md-2"></div>
             
              <div class="col-md-8 com" >
               <form action="regdb.php" method="POST" enctype="multipart/form-data">
                <div class="inpbx">
                  <div class="col-md-6 k">
                      <label>Name <span style="color:red;">*</span></label>  
                  </div> 
                 <div class="col-md-6 k">
                     <input type="text" placeholder="Name" name="Name" required>
                 </div>
                </div>
                <div class="inpbx">
                  <div class="col-md-6 k">
                      <label>Mail id <span style="color:red;">*</span></label>  
                  </div> 
                 <div class="col-md-6 k">
                     <input type="email" placeholder="Email" name="Email">
                 </div>
                </div>
                   <div class="inpbx">
                  <div class="col-md-6 k">
                      <label>PhoneNo <span style="color:red;">*</span></label>  
                  </div> 
                 <div class="col-md-6 k">
                     <input type="text" placeholder="Phone Number" name="Number" required>
                 </div>
                </div>
                   <div class="inpbx">
                  <div class="col-md-6 k">
                      <label>Course <span style="color:red;">*</span></label>  
                  </div> 
                 <div class="col-md-6 k">
                     <input type="text" placeholder="Course" name="Course" required>
                 </div>
                </div>
                   <div class="inpbx">
                  <div class="col-md-6 k">
                      <label>Comments <span style="color:red;">*</span></label>  
                  </div> 
                 <div class="col-md-6 k">
                     <textarea id="subject" name="subject" rows="3" cols="30" placeholder="Write something.." required style="text-align: left;border-radius: 5px; border:1px solid #ccc;border-bottom-width: 2px;"></textarea>

                 </div>
                </div>
                  <div class="inpbx">
                      <div class="col-md-12 text-center" style="">
                          <br> <br><b><button >Submit</button></b>
                            </div>
                     
<!--                      <div class="col-md-6 text-center" style="border:2px solid ;">
                          <br> <br><b><button>Back</button></b>
                            </div>-->
                        </div>
                     </form>
                 </div>
     
            </div>
        
              
            <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>