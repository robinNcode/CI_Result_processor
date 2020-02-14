<!DOCTYPE html>

<html>
    <head>
    <meta charset=\"UTF-8\">
        <title>
            Display
        </title>
        <style>
        body{
           
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
         .img{
              opacity:0.5;
              filter: alpha(opacity=50);
        }
        </style>
    </head>
    <body>





<div class = "bio">
           <h3>Name : <?= $naam ?></h3>
           <h3>ID :</h3> 
           <h4>Univesity Name :  </h4>
           <h4>Program :  </h4>
           <h4>Semester :  </h4>
           <h4>Phone No :  </h4>
               
        </div>   
           <table>
                <thead>
                    <tr>
                        <td>Serial No</td>
                        <td>Course Name</td>
                        <td>Marks</td>
                        <td>Credit</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>CGPA: </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </tfoot>
           </table><br><br><br>
           <form action="http://localhost/CI_Result_processor/crud/sajib">
        <div class="row">
          <div class="col-12">
            <button type="submit" name="create" value="yes" class="btn btn-outline-warning float-right">Submit
            </button>
          </div>
        </div>
            </form> 
        </body>
</html>



