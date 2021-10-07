<?php 
    include('header.php');
?>


<!-- nameValue for Username/Email  -->

<!-- <div class="jumbotron jumbo-img">
    <div class="container">
        <form method="post" action="includes/login.inc.php" class="loginform" style="display: flex;
            flex-direction: column; align-items: center;">
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: all-petite-caps;
                    font-size:medium ;" for="LoginInputUsername">Username/Email</label>
                
                <input type="text" class="form-control" name="uid" id="LoginInputUsername">
            </div>
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: all-petite-caps;
                    font-size: medium;" for="LoginInputPassword">Password</label>
                <input type="password" class="form-control" name="pwd" id="LoginInputPassword">
            </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                
            
        </form>
        
    </div>
</div> -->



<div class="jumbotron jumbo-img">
<section class="signup-form">
    <h2 class="text-center">Log In</h2>
    <div class="signup-form-form">
      <form action="includes/login.inc.php" method="post" style="display: flex;
    flex-direction: column; align-items: center;">
                <div class="form-group col-md-6">
                <label for="loginuid" class="labelcolor" style="color: white;
                    font-variant: normal;
                    font-size: medium;">Username/Email</label>
                <input type="text" class="form-control" name="uid" id="loginuid" placeholder="">
                </div>
                <div class="form-group col-md-6">
                <label for="loginpass" class="labelcolor" style="color: white;
                    font-variant: normal;
                    font-size: medium;">Password</label>
                <input type="password" class="form-control" name="pwd" id="loginpass" placeholder="">
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Log In</button>
      </form>
    </div>
     

     </section>     
</div>
<?php  
        
            
            if(isset($_GET["error"])){
                    if($_GET["error"]=="emptyinput"){
                        echo "<p class = 'errormsg'>
                            Fill in all Fields!
                        </p>";
                    }
                    else if($_GET["error"]=="wronglogin"){
                        echo "<p class = 'errormsg'>
                            Incorrect Login information!
                        </p>";
                    }
                    else if($_GET["error"]=="uidexistswronglogin"){
                        echo "<p class = 'errormsg'>
                            Incorrect Login information!
                        </p>";
                    }
                    else if($_GET["error"]=="wrongpwdwronglogin"){
                        echo "<p class = 'errormsg'>
                            Wrong password!
                        </p>";
                    }
                    // else if($_GET["error"]=="none"){
                    //     echo "<p id = 'successsignup'>
                    //         Successfully signed!! 
                    //     </p>";
                    // }
                }
        ?>
    
</section>

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