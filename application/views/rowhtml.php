<!DOCTYPE html>

<html>
    <head>
        <title>
            Form
        </title>
        <style>
        body{
            background-image:url("IMG_20190314_175413.jpg");
            background-size:cover;
        }
            tr:nth-of-type(even){
			background-color:#f7f2f2;
		}
		tr:nth-of-type(odd){
			background-color:#e0d7d7;
		}
		table{
			width:100%;
			padding:0px 0px 10px; 0px;
		}
		
        </style>
    </head>
    <body>
        <h1 style="background-color:aqua;text-align: center;">STUDENT'S FORM</h1>
        <h6 style="background-color:blue;text-align: center;">Please input data for all those field to get desired CGPA </h6>
        <form method="get" action="http://localhost/CI_Result_processor/index.php/rowPhpcgpa/">
        
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
           <br><input type="submit" value="Submit" name="save">
           
        </form>
        
        
        <form method="POST" action="search.php">
            <input type="text" name="id">
             <input type="submit" name="search" value="Search">
            
        </form>
        
    </body>
</html>
