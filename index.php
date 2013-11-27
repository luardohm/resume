<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create your resume</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Optional theme -->
        <link href="css/narrow.css" rel="stylesheet">

        <!-- Latest compiled and minified JavaScript -->
       <script src="js/jquery-1.7.1.js"></script>
       

    </head>
    
    
   
    <body>
        <?php
        // put your code here
        ?>
        <style>
            .name-box{
                border: dotted 2px #cccccc;
                cursor: pointer;
                padding: 0 5px 0 10px;
                margin: 15px 0;
            }
            
            .experience-box{
                border: dotted 2px #cccccc;
                cursor: pointer;
                padding: 0 5px 0 10px;
                min-height: 100px;
                 margin: 15px 0;
            }
            
            ul.workList {
                
                 padding: 0 5px 0 10px;
                 min-height: 100px;
                 margin: 15px 0;
            }
            
            ul.workList li {
                 border: dotted 2px #cccccc;
                 list-style: none;
                 padding: 0 5px 0 10px;
                 margin: 15px 0;
            }
            
            #cv{display: none}
            
        </style>
        
        
  
        
        <div class="container">
            
            <div class="header">
                <ul class="nav nav-pills pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">My CV</a></li>
                <li><a href="#">Print</a></li>
              </ul>
              <h3 class="text-muted">CV now</h3>
              </div>  
            
        <div class="jumbotron">
        <h1>Create your CV in minutes</h1>
        <p><a class="btn btn-lg btn-success" id="start" href="#" role="button"> </span>Start now!</a></p>
         </div>
        
        <div class="row" id="cv">
             <!-- zour name -->
                <div class="name-box">
                    <h2>Insert your name here</h2>
                    
                </div>
             
              <h2>Where did you work before?</h2>
                    
              
              
                <button type="button" id="add-friend" data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                  </button>
                    
                
            <div class="container" id="resume-list">
               
                
                <!-- EXPERIENCE -->
                
               
                   


                
                
                
                
                
                
                
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content"> 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add work experience</h4>
                  </div>    
               
                <div class="modal-body" id="works">
                   <form id="addWork" action="#">
                        <div>
                            <div class="form-group">
                            
                            </div>
                            <div class="form-group">
                            <label for="title">Title: </label><input class="form-control"  id="title">
                            </div>
                            <div class="form-group">
                            <label for="author">Company: </label><input class="form-control"  id="author">
                            </div>
                            <div class="form-group">
                            <label for="releaseDate">Release: </label><input class="form-control"  id="releaseDate">
                            </div>
                            <div class="form-group">
                            <label for="keywords">Keywords: </label><input class="form-control"  id="keywords">
                            </div>
                            <button  id="add" class="btn btn-primary" data-dismiss="modal" >Add</button>
                        </div>
                    </form>
               </div>
               <div class="modal-footer">
               
              
              </div>
            
                </div>    
                </div>
            </div>
            
<script id="workTemplate" type="text/template">
    <div class="experience-box" >
   
     <h3><%= title%></h3>
        <h4><%= author%></h4>
    <ul>
       
     
        <li><%= releaseDate%></li>
        <li><%= keywords%></li>
    </ul>
    <button class="delete">Delete</button>
    </div>
</script>
            
  <script>
    $("#start").click(function(){
        $("#cv").toggle();
        $('.jumbotron').toggle();
       
        
        
    } );  
    
    
    
    
    
    </script>            
           
        
   
            
            
        </div>
        
     
        </div>
        
 <script src="js/bootstrap.js"></script>
<script src="js/underscore.js"></script>
<script src="js/backbone.js"></script>
<script src="js/app.js"></script>
    </body>
</html>
