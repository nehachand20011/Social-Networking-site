
<!-- <script src="assest/js/script.js" defer></script> -->
<script src="assest/js/emailvalidation.js" defer></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">




    <div class="login">
        <div class="col-lg-4 col-md-8 col-sm-12 bg-white border rounded p-4 shadow-sm">
            <form method="post" action="assets/php/actions.php?signup"  onsubmit="return ValidateEmail()">
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/HamroChautari.png" alt="" height="45">
                </div>
                <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" name="first_name" value="<?=showFormData('first_name')?>" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">first name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" name="last_name" value="<?=showFormData('last_name')?>" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">last name</label>
                    </div>
                </div>
                
                <?=showError('first_name')?>
                <?=showError('last_name')?>

                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                
                <div class="form-floating mt-1">
                    <input type="email" name="email" id="email" value="<?=showFormData('email')?>" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">Email</label>

                </div>


                
                
                <?=showError('email')?>

                <div class="form-floating mt-1">
                    <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">Username</label>
                </div>
                <?=showError('username')?>

                <div class="form-floating mt-1">
                    
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password"  >

                    <label for="floatingPassword">Password</label>
                    
                </div>

            
                <div class="form-floating mt-1" >
                    <input type="password" name="password" class="form-control rounded-0" id="confloatingPassword" placeholder="Password" >
                    
          
                    <label for="floatingPassword" >Confirm password</label>
                    <span id="conpass" ></span>

                </div>

                <!-- <div 
                let password = "passwordN123";       
let minLength = 8;  
let maxLength = 20;
let containsNumber = true; 
let containsLetter = true; 
let containsSymbol = true; 
if (password.length  minLength || password.length  maxLength) {
  console.log(`Password must be between ${minLength} and ${maxLength} characters long.`);
  return;
}
if (containsNumber && !/\d/.test(password)) {
  console.log("Password must contain at least one number.");
  return;
}
if (containsLetter && !/[a-zA-Z]/.test(password)) {
  console.log("Password must contain at least one letter.");
  return;
}
if (containsSymbol && !/[^a-zA-Z\d]/.test(password)) {
  console.log("Password   must contain at least one symbol.");
  return;
}
console.log("Password is valid.");>               
</div> -->


                <?=showError('password')?>
                
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                    <a href="?login" class="text-decoration-none">Already have an account ?</a>

                </div>

            </form>
        </div>
    </div>


    <script type="text/javascript">
function ValidateEmail()
{



  
// var text=document.getElementById("text1").value;

// // var regx=/^$/;
// var regx=/^[a-zA-Z0-9\.-]+@([a-zA-Z0-9-]+).([a-Z]{2,8})$/;

// if(reg.text(text))
// {
//     document.getElementById("lbltext").innerHTML="Valid";
//     document.getElementById("lbltext").style.visibility="visible";
//     document.getElementById("lbltext").style.color="green";
// }
// else{
//     document.getElementById("lbltext").innerHTML="Invalid";
//     document.getElementById("lbltext").style.visibility="visible";
//     document.getElementById("lbltext").style.color="red";
// }






var password = "";
var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
for (var i = 0; i < 12; i++) {
  password += chars.charAt(Math.floor(Math.random() * chars.length));
}





var pass=document.getElementById('floatingPassword').value;
var conpass=document.getElementById('confloatingPassword').value;
if(conpass!=pass)
{
    alert("password doestnot match");
    return false;
}

 }





 

 </script>

