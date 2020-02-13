<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("http://robin.adovasoft.com/Beginningworks/myportfolio/IMG_20190706_154820-01.jpeg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(1px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
    <h1 style="background-color:aqua;text-align: center;">STUDENT'S FORM</h1>
        <h4 style="background-color:#ffee449f;text-align: center;height:25px;">Please input data for all those field to get desired CGPA </h4>
        
         <div class="search" style="float:right;" >
             
        <form method="POST" action="search.php">
            
            <input type="text" name="id" placeholder="Enter student's id here" style="height: 25px;width: 180px;border-radius: 10px;background-color: white;">
            <input type="submit" name="search" value="Search" style="height: 30px;width: 80px;border-radius: 13px;background-color:aqua;" >
            <h5>To get student's information with CGPA</h5>
        </form>
        </div>
        <div class="main">
        <form method="get" action="cgpa.php">
        
        <h2 style="text-align:center;background-color:#f67280;height: 30px;width: 270px;border-radius: 10px;">Student's Details :</h2>    
        <table> 
            <tbody>
           <tr><td>Name            </td><td> <input type="text" name="naam" placeholder="Your Name" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td></tr>
           <tr><td>ID              </td><td> <input type="text" name="id" placeholder="ID No." style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td></tr>
           <tr><td>Program         </td><td> <input type="text" name="program" placeholder="EX: B.Sc in CSE" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td></tr>
           <tr><td>Ph. No          </td><td> <input type="text" name="Phname" placeholder="Ph.NO ex:01......" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td></tr>
           <tr><td>University Name </td><td> <input type="text" name="Uname" placeholder="University Name" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td></tr>
           <tr><td>Semester        </td><td> <input type="text" name="semname" placeholder="Semester" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td></tr>
            </tbody>
        </table> 
           <h2 style="text-align:center;background-color:#f67280;height: 30px;width:270px;border-radius: 10px;">Course Details :</h2>
           <table>
                <thead>
                    <tr>
                        <td>Serial No</td>
                        <td>Course Name</td>
                        <td>Mark</td>
                        <td>Credit</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><input type="text" name="coname1" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="number" name="mark1" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="text" name="credit1" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" name="coname2" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="number" name="mark2" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="text" name="credit2" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="text" name="coname3" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="number" name="mark3" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="text" name="credit3" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="text" name="coname4" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="number" name="mark4" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="text" name="credit4" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input type="text" name="coname5" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="number" name="mark5" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                        <td><input type="text" name="credit5" style="height: 25px;width: 180px;border-radius: 10px;background-color: #f8b195;"></td>
                    </tr>
                </tbody>
           </table>
           <br><input type="submit" value="Submit" name="save" style="height: 30px;width: 80px;border-radius: 13px;background-color:aqua;">
           
        </form>
        </div>
  
</div>

</body>
</html>
