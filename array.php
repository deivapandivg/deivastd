<?php 
$associate=array("dell","Lenovo","HP");
$color=array("dina"=>"red","Amit"=>"blue","kumar"=>"yellow","kumar"=>"yellow");
// $colorss=array("dina"=>"red","Amit"=>"blue","kumar"=>"yellow");
$colors=array("raj"=>"gery","lol"=>"rose");
$courses=array(array("php",50),array("hello",10),array("php",50));

$asssss=array("dell","Lenovo","HP","mi","dell");
// $result=array_diff($color, $colors);
// print_r($result);
//array_map:
// function my($v)
// {
// 	return($v*$v);
// }

// $aa=array(1,2,3,4,5,6);
// print_r(array_map("my",$aa));


// $implode_arry=implode(glue, $associate);
// echo "$implode_arry";
// print_r(array_chunk($associate, 2));

//array_merge:
// $result=array_merge($color,$colors);
// $re=["mugund"=>"pink"];
// array_push($associate,"pink");
// $implode=implode(',', $courses);
// $result=array_unique($color);
// print_r($result);$a=array("fruit"=>"Apple","Car"=>"BMW");
// $a=array("fruit"=>"Apple","Car"=>"BMW");
// if (array_key_exists("fruit",$a))
//   {
//   echo "Array Key exists!";
//   }
// else
//   {
//   echo "Array Key does not exist!";
//   }


// $array=array(10,9,2,3,4,5,6,7,3,8,1);
// $length=count($array);
// for($i=0; $i< $length; $i++){

//   for($j=0; $j< $length -1; $j++){

//    if( $array[$j] > $array[$j + 1]){
//     $temp=$array[$j];
//     $array[$j]= $array[$j +1];
//     $array[$j + 1]= $temp;

//    }

//   }

// }
// foreach ($array as $aray ) {
//   print_r($aray);
// }

$string = "Hello world";
$reversedString = '';

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
}


echo $reversedString;

// $(document).ready(function() {
//   $('#myForm').validate({
//     rules: {
//       fileInput: {
//         required: true,
//         fileSize: 2 * 1024 * 1024 // 2MB in bytes
//       }
//     },
//     messages: {
//       fileInput: {
//         required: "Please select a file",
//         fileSize: "File size must not exceed 2MB"
//       }
//     },
//     submitHandler: function(form) {
//       // Handle form submission
//       form.submit();
//     }
//   });

//   // Custom validation method for file size
//   $.validator.addMethod("fileSize", function(value, element, param) {
//     if (element.files.length > 0) {
//       return element.files[0].size <= param;
//     }
//     return true;
//   });
// });

// $(document).ready(function() {
//   $('#myForm').validate({
//     rules: {
//       dob: {
//         required: true,
//         validDOB: true
//       }
//     },
//     messages: {
//       dob: {
//         required: "Please enter your Date of Birth",
//         validDOB: "You must be at least 18 years old"
//       }
//     },
//     submitHandler: function(form) {
//       // Handle form submission
//       form.submit();
//     }
//   });

//   // Custom validation method for Date of Birth
//   $.validator.addMethod("validDOB", function(value, element) {
//     var today = new Date();
//     var dob = new Date(value);
//     var eighteenYearsAgo = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());

//     return dob <= eighteenYearsAgo;
//   });
// });



?>
