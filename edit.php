<?php include('config.php');?>
<?php 
if (isset($_GET['edit'])) {
    $editId = $_GET['edit'];
    $SelectUserEdit=mysqli_query($con,"SELECT * FROM  students WHERE StdId=$editId");
while ($Row=mysqli_fetch_array($SelectUserEdit)) 
{
 $Name=$Row['StdName'];
$EmailId=$Row['EmailId'];
$MobileNumber=$Row['MobileNumber'];
$Dob=$Row['Dob'];
// $dateObj = DateTime::createFromFormat('d-m-Y', $Dob);
// if ($dateObj) {
//     $formattedDob = $dateObj->format('Y-m-d');
//     // Use the formatted date value in the input field
// } else {
//     echo "Invalid date format";
// }
$convertedDob = date("Y-m-d", strtotime($Dob));
$Gender=$Row['Gender'];
$Qualification=$Row['Qualification'];
$Address=$Row['Address'];
$State=$Row['State'];
$District=$Row['District'];

} 
} else {
    echo "noif";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
 <style>
        label.error {
            color: red;
        }
</style>
<?php include('config.php');?>
<body style="
background: rgb(9,9,121);
background: linear-gradient(323deg, rgba(9,9,121,0.6895133053221288) 35%, rgba(0,212,255,1) 100%); background-repeat: no-repeat; background-size:cover; ">
    <div class="container" style=" padding: 20px 0; display: grid;">
        <div class="d-flex justify-content-center align-items-center" >
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card container py-3">
                    <div class="card-body">
                        <div class="card-title h3"> Register Form</div><hr>
                        <form id="register-form" novalidate>
                            <div class="row"> 
                                <div class="mb-3">
                                    <label for="username" >Name</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo "$Name" ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="mailid" >Email</label>
                                    <input type="email" class="form-control" name="mailid" value="<?php echo "$EmailId" ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="mobileNumber" >MobileNumber</label>
                                    <input type="number" class="form-control" name="mobilenumber" value="<?php echo "$MobileNumber" ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="dob">DOB</label>
                                    <input type="date" name="dob" class="form-control" value="<?= $Dob ?>">
                                </div>
                                <div class="formm-check mb-3">
                                    <div>
                                        <label>Gender :</label>
                                    </div> 
                                    <input type="radio" value="Male" class="formm-check-input" name="gender" <?php if($Gender=='Male'){echo "checked";} ?>>
                                    <label class="form-check-label" for="Male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" class="formm-check-input" name="gender" value="Female" <?php if($Gender=='Female'){echo "checked";} ?>>
                                    <label class="form-check-label" for="Female">Female</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" class="formm-check-input" name="gender" value="Others" <?php if($Gender=='Others'){echo "checked";} ?>>
                                    <label class="form-check-label" for="Male">Others</label>
                                </div>
                                <div class="mb-3">
                                    <div>
                                    <label>Qualification :</label>
                                    </div>
							 <?php 
								$GetQualifications = mysqli_query($con, "SELECT * FROM qualifications");
								while ($Row = mysqli_fetch_array($GetQualifications)) {
								    echo '<div class="form-check form-check-inline">';
								    echo '<input class="form-check-input" type="checkbox" id="inlineCheckbox'.$Row['QualificationId'].'" name="checkbox[]" value="'.$Row['QualificationId'].'"';

								    // Check if the value is in the stored values
								    if (in_array($Row['QualificationId'], explode(',', $Qualification))) {
								        echo ' checked'; // Add the 'checked' attribute
								    }

								    echo '>';
								    echo '<label class="form-check-label" for="inlineCheckbox'.$Row['QualificationId'].'">'.$Row['QualificationName'].'</label>';
								    echo '</div>';
								}
								?>
                                </div>
                                <div class="mb-3">
                                    <label for="Address">Address</label>
                                    <textarea class="form-control" name="Address" value=""><?php echo "$Address" ?> </textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="State"></label>
                                    <select class="form-control form-select" id="state" name="state">
                                        <option selected>Select State</option>
                                        <?php $GetState= mysqli_query($con, "SELECT * FROM  state"); 
                                            while ($StateRow=mysqli_fetch_array($GetState)) {
                                               ?>
                                               <option value="<?php echo $State1= $StateRow['StateId'];?>" 
 											<?php if($State==$StateRow['StateId']){echo "selected"; } ?>>
                                               	<?php echo $StateRow['State']; ?></option> 
                                               <?php
                                            }
                                            ?>
                      
                                    </select>
                                </div>
                                 <div class="mb-3">
                                    <label for="district"></label>
                                    <select class="form-control form-select" id="district" name="district">
                                        <?php
                                          
                                          $District=mysqli_query($con,"SELECT * FROM district");
                                          while($StateIdSelectRow=mysqli_fetch_array($District))
                                          { 
                                             ?>
                                             <option value="<?php echo $District1= $StateIdSelectRow['DistrictId'];?>" 
 											<?php if($District==$StateIdSelectRow['DistrictId']){echo "selected"; } ?>>
                                               	<?php echo $StateIdSelectRow['District']; ?></option> 
                                               <?php
                                            }
                                          ?>
                                        
                                    </select>
                                </div>
                                <button  class="btn btn-primary" type="submit">submit button</button>
                                <!-- <input class="btn btn-primary" type="submit" name="submit"> -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script> 
$(document).ready(function(){
        $('#state').on('change',function(){
            var State=$(this).val();
            $.post("state_ajax.php",{State:State},
                function(data){
                    $("#district").html(data);
            });
        });
    });

        $(document).ready(function() {

            $.validator.addMethod('customEmail', function(value, element) {
                // Custom email validation pattern
                var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                // Test if the value matches the pattern
                return this.optional(element) || pattern.test(value);
            }, 'Please enter a valid email ID (example.com domain)');


           $.validator.addMethod('customMobile', function(value, element) {
                // Custom mobile number validation pattern
                var pattern = /^\d{10}$/; // Regex pattern for 10-digit mobile number

                // Test if the value matches the pattern
                return this.optional(element) || pattern.test(value);
            }, 'Please enter a valid 10-digit mobile number');

            
            $('#register-form').validate({
                rules: {
                    username: {
                        required: true
                    },
                    dob: {
                        required: true,
                        date: true
                    },
                    Address: {
                        required: true
                    },
                    mobilenumber: {
                        required: true,
                        customMobile: true
                    },
                    mailid: {
                        required: true,
                        customEmail: true
                    },
                    gender: {
                        required: true
                    },
                    'checkbox[]': {
                        required: true
                    },
                    state: {
                        required: true
                    }
                },
                messages: {
                    username: {
                        required: 'Please enter your name'
                    },
                    dob: {
                        required: 'Please enter your date of birth',
                        date: 'Please enter a valid date (dd/mm/yyyy)'
                    },
                    Address: {
                        required: 'Please enter your address'
                    },
                    mobilenumber: {
                        required: 'Please enter your mobile number',
                        customMobile: 'Please enter a valid 10-digit mobile number'
                    },
                    mailid: {
                        required: 'Please enter your email ID',
                        customEmail: 'Please enter a valid email ID'
                    },
                    gender: {
                        required: 'Please select your gender'
                    },
                    'checkbox[]': {
                        required: 'Please select at least one qualification'
                    },
                    state: {
                        required: 'Please select a city'
                    }
                },
                submitHandler: function(form) {
                    // Form is valid, proceed with AJAX submission
                    $.ajax({
                        url: 'student_action.php', // Replace with your server-side script URL
                        type: 'POST',
                        data: $(form).serialize(),
                        success: function(response) {
                            // Handle the response from the server
                            alert('Form submitted successfully!');
                            // Reset the form
                            form.reset();
                        },
                        error: function(xhr, status, error) {
                            // Handle the error if submission fails
                            alert('Form submission failed: ' + error);
                        }
                    });
                }
            });
        });
    
    // $("#register-form").validate({
    //     rules: {
    //         username: "required",                    
    //         mailid:   {
    //             required:true,
    //             pattern: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/ // Regex pattern for email

    //         },                 
    //         mobilenumber: {
    //             required:true,
    //             pattern:/^\d{10}$/,

    //         },                    
    //         password: {
    //             required: true,
    //             minlength: 6
    //         },
    //        city: "required",
    //         gender: "required"
         
    //     },
    //     messages: {
    //         username: "Please enter your Name",                   
    //         mailid:{
    //             required: 'Please enter your email',
    //             pattern: 'Please enter a valid email address'
    //         },                   
    //         mobilenumber: {
    //             required: 'Please enter your mobile number',
    //             pattern: 'Please enter a valid 10-digit mobile number'
    //         },                  
    //         password: {
    //             required: "Please provide a password",
    //             minlength: "Your password must be at least 6 characters long"
    //         },
    //       city: "Please enter your city",
    //       gender: "This field is required"
    //     },
    //     errorPlacement: function(error, element) 
    //     {
    //         if ( element.is(":radio") ) 
    //         {
    //             error.appendTo( element.parents('.form-group') );
    //         }
    //         else 
    //         { // This is the default behavior 
    //             error.insertAfter( element );
    //         }
    //      },
    //     submitHandler: function(form) {
    //         form.submit();
    //     }
    // });

    // $(function () {

    //     $('form').on('submit', function (e) {

    //       e.preventDefault();


    //       $.ajax({
    //         type: 'post',
    //         url: 'student_action.php',
    //         data: $('form').serialize(),
    //         success: function (data) {
    //           alert('form was submitted');
    //         }
    //       });

    //     });
    // });

</script>
</body>
</html>