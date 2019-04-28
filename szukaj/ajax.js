<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script> 


// function showCar(str) {
//   if (str == "D") {
//       document.getElementByID("txtHint").innerHTML = "";
//       return;
//   } else { 
//       if (window.XMLHttpRequest) {
//           // code for IE7+, Firefox, Chrome, Opera, Safari
//           xmlhttp = new XMLHttpRequest();
//       } else {
//           // code for IE6, IE5
//           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//       }
//       xmlhttp.onreadystatechange = function() {
//           if (this.readyState == 4 && this.status == 200) {
//               document.getElementById("txtHint").innerHTML = this.responseText;
//           }
//       };
//       xmlhttp.open("GET","getCar.php?q="+str,true);
//       xmlhttp.send();
//   }
// }