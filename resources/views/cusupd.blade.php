<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1, user-scalable=0" charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.js"></script>
 	 <!-- <script type='text/javascript' src="js/messagebox.min.js"></script> 
    <script type='text/javascript' src="css/messagebox.min.css"></script> -->
   
    <title>Laravel Project</title>
     <style>
      #head
		{
    text-align: center;
    font-family:'bamini';
    font-size: 18px;
   }
#subhead{
    text-align: center;
    font-size: 18px;
}
form
{
	text-align: center;
}

#brcode
 {
       background: transparent;
       width: 58px;
       font-size: 20px;
	   font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
       height: 45px;
       }
 #fileControl1
  {
       background: transparent;
       width: 300px;
       font-size: 20px;
       text-transform:uppercase;
       font-size: 20px;
	     font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
       height: 45px;
	   margin-left :30px;
       }
#compno,#vehno
  {
       background: transparent;
       width: 200px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
       height: 45px;
	   margin-left:50px;
	   
	}	   
  
#restext
  {
       background: transparent;
       width: 200px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
       height: 45px;
	   }
#actiontake,#MdRemarks
  {
       background: transparent;
       width: 300px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
       height: 45px;
	 	 }	
#feedback
  {
       background: transparent;
       width: 200px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
       height: 45px;
	}
#fileupload
  {
       background: transparent;
       width: 300px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border-radius: 3px;
       height: 34px;
	   
       }		   
#leaveDesc
  {
       background: transparent;
       width: 750px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
       height: 70px;
	   margin-left:230px;
	   
       }
#category
  {
       background: transparent;
       width: 300px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
	   margin-left:50px;
	   height:45px;
	  }	 
#category1
  {
       background: transparent;
       width: 200px;
       font-size: 20px;
       text-transform:uppercase;
       font-weight:bold;
       color:rgb(7, 7, 51);
       border: 2;
       border-radius: 3px;
	   height:45px;
	   margin-left:30px;
	  }	 	  

 input
 {
       background: transparent;
       width: 200px;
	   color:rgb(7, 7, 51);
       font-size: 20px;
       font-weight:bold;
       border: 1;
	   text-align:left;
       border-radius: 3px;
       height: 45px;
	   margin-left:30px;
	}


	textarea:focus 
	{ 
    outline: solid;
	  outline-color: #00FF00;
    background-color:00FFFF;
    box-shadow: 0 0 10px #719ECE;
	  border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
    border-color: #0000A0;
}
 
input:focus 
{ 
    outline: solid;
	  outline-color: #00FF00;
    background-color:00FFFF;
    box-shadow: 0 0 10px #719ECE;
	  border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
    border-color: #0000A0;
}
select:focus 
{ 
    outline: solid;
	  outline-color: #00FF00;
    background-color:00FFFF;
    box-shadow: 0 0 10px #719ECE;
	  border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
    border-color: #0000A0;
}
button:focus 
{ 
    outline: solid;
  	outline-color: #00FF00;
    background-color:00FFFF;
    box-shadow: 0 0 10px #719ECE;
	  border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
    border-color: #0000A0;
}
.button
{
	text-align: center;
	width: 150px;
	height: 50px;
	font-size:20px ;
	margin-top: 20px;
	border-radius: 5px;
    color:rgb(5, 1, 34);
    font-weight: bold;
    color:blue;
    margin-right: 10px;
}
#exit
{
	text-align: center;
	width: 150px;
	height: 50px;
	font-size:20px ;
	margin-top: 20px;
	border-radius: 5px;
    color:rgb(5, 1, 34);
    font-weight: bold;
    color:rgb(255, 0, 43);
}
.divborder {
  margin-left :115px;
  margin-right :115px;
  border: 2px outset blue;
  background-color: white;    
  text-align: center;
}
label
   {
    width: 180px;
    display: inline-block;
    color:rgb(0, 0, 128);
    font-weight: bold;
    text-align: left;
    font-size: 20px;
	margin-left :50px;	
   }
   pre1
   {
    width: 300px;
     color:blue;
    font-weight: bold;
    display: inline-block;
    text-align: center;
    font-size: 20px;
	
   }
   pre2
   {
    width: 200px;
	  display: inline-block;
     color:rgb(0, 0, 128);
    font-weight: bold;
    margin-left :-680px;
    text-align: left;
    font-size: 20px;
	
   }
   pre21
   {
    width: 130px;
	display: inline-block;
    color:rgb(62, 34, 7);
    font-weight: bold;
    margin-right :-230px;
    font-size: 20px;
	margin-top:-380px;
	
   }
   pre3
   {
    width: 130px;
    color:rgb(5, 1, 34);
    font-weight: bold;
	display: inline-block;
    font-size: 20px;
	}
   img
   {
     float: left;
     width:100px;
	   margin-left: 10px;
	}
  span
   {
       float: left;
       width:1050px;
	   margin-left: 30px;
	   margin-top:10px;
	   src:url(fonts/BAPC.ttf)
	}
  .logoimage
  {
    width:20px;
	margin-left: 1px;
	margin-top:1px;
  }
  .head2
  {
    TEXT-ALIGN:center; 
    FONT-SIZE:20px;
    COLOR:rgb(178, 36, 166);
   font-weight: bold;
  }
  .head
  {
    TEXT-ALIGN:center; 
    FONT-SIZE:23px;
    COLOR:rgb(178, 36, 166);
    font-family:'bamini';
	   margin-left: 10px;
    margin-top: 0px;
    font-weight: bold;
  }
   .panimage
    {
      float:right;
      width:50px;
	  margin-right:5x;
	  margin-left:1px;
	  margin-top:1px;
	 
	}
  messagebox 
  {
    font-family         : verdana, arial, helvetica, sans-serif;
    font-size           : 15px;
    font-style          : normal;
    font-weight         : normal;
    text-align          : left;
    color               : #072179;
    background-color    : #dddd6f;
    border              : 3px solid #4ac7c7;
    box-shadow          : 0px 2px 4px #7ea2a5;
    max-height          : 100%;  /* This value is useful only when "top" option is set to "auto" */
    min-width           : 450px;
}
.messagebox_title 
{
    background-color    : #c6ce59;
    border-bottom       : 1px solid #b9b060;
    padding             : 5px;
    text-align          : center;
    font-weight         : bold;
    color               :#700707;
    font-size           :20px;

}
.messagebox_content
 {
    padding             : 10px;
    text-align          : center;
    font-weight         : bold;
    color               :#072179;
    font-size           : 20px;
}
.messagebox_buttons 
{
  background-color    : #dbdbb5;
    border-top          : 1px solid #c8c8c8;
    padding             : 10px 20px 0px 20px;
    text-align          : center;
}
.messagebox_buttons_button
 {
        font-family         : inherit;
        font-size           : inherit;
        font-weight         : bold;
        text-align          : center;
        min-width           : 35px;
        margin              : 0px 4px 10px 4px;
        padding             : 5px 10px;
        cursor              : pointer;
        color               : #404040;
        background-color    : #ececf1;
        background-image    : linear-gradient(to bottom, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0.1) 51%, rgba(255,255,255,0.0) 100%);
        border              : 2px solid #24e6a5;
        border-radius       : 2px;
    }
    .messagebox_buttons_button:hover {
            color               : #202020;
            background-color    : #6fc0d4;
        }
        .messagebox_buttons_button:active {
            background-color    : #e6e6e6;
            border              : 1px solid #a0a0a0;
            box-shadow          : inset 0px 0px 6px #d0d0d0;
        }
        .messagebox_buttons_button::-moz-focus-inner {
            padding : 0;
            border  : 0;
        }
  </style>
<script type="text/javascript">
function switchCSS(windowsize) {
	  if (windowsize > 800) {
		$("#switchable").attr("href", "css/web.css");
	  } else {
		 $("#switchable").attr("href", "css/mobile.css"); 
	  }
	}

	
</script>
</head>
<body onload = "document.cusupd.brcode.focus()" >
<div class ="inner-div">
    <div class="container" style="margin-top:1px">
        <div class="row">
              <div class ="logoimage">
                <img src= "{{ asset('/img/logo4.png')}}" class="img-fluid"/>
              </div>
                <div class ="head">
                <span>Tamilnadu State Transposrt Corporation</span>
              </div>
			   <div class = "panimage" >
            <img src="{{ asset('/img/acbus.jpg')}}" class="img-fluid"/>
			  </div>
          </div>
          <br>
         
          <div class="head2">
              <span>COMPLAINTS DATA CORRECTION SCREEN</span>
          </div>
       <div>
        <!--{{route('frm_submit')}}-->
        <form name = "cusupd" method="post"  style="text-align:center;">
        @csrf
        @if(!(isset($customer[0])))
                  <div>
	        <pre1>SELECT BRANCH / SECTION </pre1>
        
			        <input type="text" name="brcode" id ="brcode"  maxlength="2" style="text-transform:uppercase" 
                  required = "required" >
               <button style = "margin-left:10px;"  name="action" formaction="{{route('frm_submit')}}" class = button  type="submit" id ="Submit" style ="color:green" >Get</button>
              <!--  <input type="text" name="brname" id = "brname" style="text-transform:uppercase"> -->
           </div>     
         <br>
      @else
         <div>
	        <pre1>SELECT BRANCH / SECTION </pre1>
        
			        <input type="text" name="brcode" id ="brcode"  maxlength="2" style="text-transform:uppercase" 
                  required = "required" value ="{{$customer[0]->brcode}}">
               <button style = "margin-left:10px;"  name="action" value="getDet" class = button  type="submit" id ="Submit" style ="color:green" >Get</button>
              <!--  <input type="text" name="brname" id = "brname" style="text-transform:uppercase"> -->
           </div>     
     <br>
     <div align="left" color ="pink" ><a href= "{{route('home')}}" class="address_text" style="margin-left:100px;font-weight: bold;color:rgb(8, 131, 69)">DataEntry Screen</a> 
       <label>COMPLAINT DATE</label>
            <input type="date" id ="compdate" name = "compdate"  value="{{$customer[0]->compdate}}"> 
			<label>COMPLAINT NO</label>
            <input type="text" id ="compno" name = "compno" value="{{$customer[0]->compno}}"> 
			 </div>
       <br>
  		<label  style ="margin-left:100px;">MOBILE NO</label>
            <input type="text" id ="mobileno" name = "mobileno" maxlength="10"  onkeypress="return ForNumbers(event)"  value ="{{$customer[0]->mobileno}}" required>
             <label>COMPLAINT TYPE</label>
			<select id="category" name ="comptype" style ="font-family:times;font-size:16px;font-weight:bold;" text ="{{$customer[0]->comptype}}">
				<option value="cat1">01 - Bus Operation Related Enquiry</option>
				<option value="cat2">02 - Special Bus Operation Enquiry</option>
				<option value="cat3">03 - General Enquiry</option>
				<option value="cat4">04 - Late Run,Break Down & Accident Related</option>
				<option value="cat5">05 - No Bus Available At Bus Stands</option>
				<option value="cat6">06 - Skipping Of Bus Stands</option>
				<option value="cat7">07 - Luggage Last Complaints</option>
				<option value="cat8">08 - Non Return Of Balance Amount To Passengers</option>
				<option value="cat9">09 - Complaints Of Crew Behavior During Travel</option>
				<option value="cat10">10 - Rash Driving by Driver</option>
				<option value="cat11">11 - Complaints From STU Employee (Terminal Benefits)</option>
				<option value="cat12">12 - Complaints on Poor Maintenance of Buses</option>
				<option value="cat13">13 - All Complaints From Employee On Roll</option>
				<option value="cat14">14 - Physically Challenged </option>
				<option value="cat15">15 - Others(Pls Specify)(Low Ac)</option>
				
			</select>
			</div>
       <br>     <!--<input type="text"  id = "comptype"> -->
			<div style ="margin-left:250px;">
			<label>REGION</label>
            <select id="category1" name = "region" style ="font-family:times;font-size:16px;font-weight:bold;" text ="{{$customer[0]->region}}">
				<option value="reg1">SALEM</option>
				<option value="Reg2">DHARMAPURI</option>
			</select>	
			<label>VEHICLE NO</label>
            <input type="text"  name = "vehtype" id ="vehno" length="9" style="text-transform:uppercase" value="{{$customer[0]->vehtype}}">
			</div>
      <br>
      <div style ="margin-left:250px;">
			<label>COMPLAINTS:</label>
			</div>
      <div style ="margin-top:-1px;margin-left:90px;">
			<textarea class="form-control" name="complaints" id="leaveDesc" rows="5" cols="50" maxlength="1000" placeholder="" >{{$customer[0]->complaints}}</textarea>
      </div>
      <br>
			<div  style ="margin-left:250px;">	
			<label>RESPONSIBILITY</label>
            <input type="text"  name = "respon" id ="respon" value="{{$customer[0]->respon}}"> 
			<label>ACTION TAKEN</label>
            <input type="text" name = "actiontaken" id = "actiontaken" value="{{$customer[0]->actiontaken}}">
			</div>
       <br>
        <div style ="margin-left:570px;float:centre;">    
			  <button class = button  type="submit" id ="submit" name="_method" value="put" formaction="{{route('upd_submit')}} " style ="color:green" >Update</button>
        <button class = button  type="submit" id ="submit" name="_method" value="put" formaction="{{route('del_submit')}} " style ="color:green" >Delete</button>
        <button class = button type="submit" id ="Exit" style ="color:red" onclick="callProcedureForWindowsclose() ">EXIT</button>
        </div>
        <!--blade syntax -->
       @endif   
         </form>
			</div> 
		</div>
	</div>
</body>
</html>