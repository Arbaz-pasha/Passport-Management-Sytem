<?php 

include('header.php');
?>

<h5 class="text-center" style="color:#1a8306;margin-bottom:50px;"> Plz select the appointment Date and Time
        </h5>


<div class="container">
<table width="100%" border="2" bordercolor="black" cellpadding="10" cellspacing="10" style="margin-bottom:50px"  class="table mytable">
<tbody> 
<tr>
    
     <th>Monday</th>
     <th>Tuesday</th>
     <th>Wednesday</th>
     <th>Thursday</th>
     <th>Friday</th>
     <th>Saturday</th>
 </tr>
 <tr>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 2:30 PM</td>
 </tr>
</tbody>
</table>

        
        

        <form method="post" action="includes/appointment.inc.php" >
            
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
             <div class="form-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" required>
            </div>
           
            <button id="appointmt" type="submit" name="appointmentbtn" class="btn btn-primary">
             
            Save & Next
            </button> 
        </form>

         <?php
            //  if(isset($_GET["error"])){
            //     if($_GET["error"]=="uploaddoc"){
            //         echo "<p class = 'errormsg'>
            //             Plz upload documents!!
            //         </p>";
            //     }
            // }
        ?> 


    </div>
   







    <footer class="footer" style="    position: fixed;
    bottom: 0;
    margin: -1px;
    width: 100%;
    height: 50px" >
        <!-- <div class="container"> -->
        <p>
            © Content Owned by Ministry of External Affairs, Government of India
        </p>
        <!-- </div> -->
    </footer>


