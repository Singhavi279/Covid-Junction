<!DOCTYPE html>
<html>
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>COVID JUNCTION</title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
       -->
      <!-- bootstrap css -->
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  -->
     <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css"> 

</head>
 
<body>

   
  <div class="topnav" id="myTopnav">
    <a href="#updates" class="active">Covid 19 UPDATES</a>
    <?php
    echo "<a href='test.php'>BRAINFLOW DISCUSSION FORUM</a>";
    ?>
    <!-- <a href="#forum">FORUM</a> -->
    <a href="#contact">CONTACT US</a>
    <div class="dropdown">
      <button class="dropbtn">CONTENTS
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
      <a href="amenities.html">AMENITIES  AVAILABLE</a>
      <a href="fitness.html">FITNESS ADVISORY</a>
      <a href="remedies.html">HOME REMEDIES</a>
      <a href="entertainment.html">ENTERTAINMENT SECTION</a>
      <a href="learning.html">LEARNING RESOURCES</a>
      </div>
    </div>
    <div class="logo">
    <a><img src="logo.png"></a> </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>  
  </div>

  <!-- content and bg image -->
     
         <div id="bg-image">
         <center>
         <div id="contentbg">
        <h1><strong>COVID &nbsp; JUNCTION</strong></h1>
        <span><center><i>"Your one stop platform to cater all your needs"</i></center></span>
      </div> </center>
      <br>
 
     </div>

  
     <!-- covid cases update section -->
    
     <div class="updatesbg" id=updates>
       <center>
       <div class="heading1">
      <h1> COVID 19 DAILY UPDATES</h1>
      </div></center>
      
       


       <!-- total number of cases INDIA -->
       <div id=worldo>

        <div style="font-size:1.2rem; color:rgb(112, 58, 58); font-weight: bold; text-align:center">Last updated: June 18, 2020, 07:00 IST</div>
       <div style="text-align:center;width:100%">
        <h1 style="color:black;">
        <div style="display:inline"> <img src="flag.gif" border="1 px solid black"></div>&nbsp;India </h1>
        </div>
        <div id="details">
          <h1>COVID-19 CASES:</h1>
          <div class="number">
          <span style="color:#ff5b1b">367,963 </span>
          </div>
          </div>
          <div id="details">
            <h1>DEATHS:</h1>
            <div class="number">
            <span style="color:#02336b">12,272</span>
            </div>
            </div>
            <div id="details">
              <h1>RECOVERED:</h1>
              <div class="number" style="color:#016612e0 ">
              <span>194,565</span>
              </div>
              </div>
      </div>
    

    <!-- table for daily state updates -->
    
  <div id="tableouter"> 
    <div class="caption">  <h1> STATE-WISE DAILY UPDATES </h1></div>   
<div id="data">
 
    <table>
       <tr>
         <thead>
        <th> <b>STATE / UTs</b></th>
        <th><b>CONFIRMED CASES</b></th>
        <th><b>ACTIVE CASES</b></th>
            </tr>
          </thead>
            <tr>
              <td>Maharashtra</td>
              <td>116752</td>
              <td>51935</td>
            </tr>
            <tr>
              <td>Tamil Nadu</td>
              <td>50193</td>
              <td>21993</td>
            </tr>
            <tr>
              <td>Delhi</td>
              <td>47102</td>
              <td>27741</td>
            </tr>

            <tr>
                <td> Gujarat </td>
                 <td>  25093 </td>
                 <td> 6103  </td>
            </tr>
            <tr>
              <td> Uttar Pradesh </td>
               <td>  14598 </td>
               <td>  5229 </td>
          </tr>
          <tr>
            <td> Rajasthan </td>
             <td> 13542  </td>
             <td>  2762 </td>
        </tr>
        <tr>
          <td> West Bengal </td>
           <td> 12300  </td>
           <td> 5261  </td>
      </tr>
      <tr>
        <td> Madhya Pradesh  </td>
         <td> 11244  </td>
         <td> 2374  </td>
    </tr>
    <tr>
      <td> Haryana </td>
       <td>  8832 </td>
       <td> 4750  </td>
  </tr>
  <tr>
    <td> Karnataka </td>
     <td> 7734  </td>
     <td>  2828 </td>
</tr>
<tr>
  <td> Andhra Pradesh </td>
   <td> 7071  </td>
   <td>3340   </td>
</tr>
<tr>
  <td>Bihar</td>
  <td>1972</td>
  <td>6942</td>
</tr>
<tr>
  <td>Telengana</td>
  <td >5675</td>
  <td>2412</td>
</tr>
<tr>
  <td>Jammu and Kashmir</td>
  <td >5406</td>
  <td>2427</td>
</tr>
<tr >
  <td>Assam</td>
  <td >4605</td>
  <td>1955</td>
</tr>
<tr>
  <td>Odisha</td>
  <td >4338</td>
  <td>1280</td>
</tr>
<tr>
  <td>Punjab</td>
  <td>3497</td>
  <td>881</td>
</tr>
<tr >
  <td>Kerala</td>
  <td >2697</td>
  <td>1351</td>
</tr>
<tr>
  <td>Uttarakhand</td>
  <td>2023</td>
  <td>743</td>
</tr>
<tr>
  <td>Jharkhand</td>
  <td >1895</td>
  <td>734</td>
</tr>
<tr>
  <td>Chhattisgarh</td>
  <td >1864</td>
  <td>674</td>
</tr>
<tr>
  <td>Tripura</td>
  <td>1135</td>
  <td>578</td>
</tr>
<tr>
  <td>Ladakh</td>
  <td >687</td>
  <td>594</td>
</tr>
<tr>
  <td>Goa</td>
  <td>656</td>
  <td>560</td>
</tr>
<tr>
  <td>Himachal Pradesh</td>
  <td >569</td>
  <td>189</td>
</tr>
<tr>
  <td>Manipur</td>
  <td>552</td>
  <td>360</td>
</tr>
<tr>
  <td>Chandigarh</td>
  <td>368</td>
  <td>59</td>
</tr>
<tr>
  <td>Puducherry</td>
  <td>245</td>
  <td>129</td>
</tr>
<tr>
  <td>Nagaland</td>
  <td>193</td>
  <td>90</td>
</tr>
<tr>
  <td>Mizoram</td>
  <td>121</td>
  <td>120</td>
</tr>
<tr>
  <td>Arunachal Pradesh</td>
  <td >99</td>
  <td>92</td>
</tr>
<tr>
  <td>Sikkim</td>
  <td>70</td>
  <td>66</td>
</tr>
<tr>
  <td>Dadra and Nagar Haveli</td>
  <td>57</td>
  <td>45</td>
</tr>
<tr>
  <td>Andaman and Nicobar</td>
  <td>44</td>
  <td>11</td>
</tr>
<tr>
  <td>Meghalaya</td>
  <td>44</td>
  <td>13</td>
</tr>
<tr>
  <td>Daman and Diu</td>
  <td>0</td>
  <td>0</td>
</tr>
<tr>
  <td>Lakshadweep</td>
  <td>0</td>
  <td>0</td>
</tr>
          </table>
        </div>
<br>

<div class="last1">
  <h3>For more information , click the link below : </h3> 
  <a href="https://www.mygov.in/covid-19" target="_blank">COVID-19 DETAILS</a>
</div>
  </div>
</div>
              
      



<!-- contact us part  -->

<footer>
  <br>
    <div id="contact">
    <div class="ques">
      <h1>WE'D LOVE TO<br> HEAR FROM YOU</h1>
      <p>Whether you have a question about features, code or anything else, 
        our team is ready to answer all your questions.</p>
        </div>
   <div class="emails">
    <h1><u>CONTACT US ON:</u></h1>
    <ul>
      <li>
        <p>
          <i class="fa fa-envelope"></i>   siddhartharora250@gmail.com</p>
      </li>
      <li>
  
        <p>
          <i class="fa fa-envelope"></i>   sanjeevanibhandari3@gmail.com</p>
      </li>
      <li>
        <p>
          <i class="fa fa-envelope"></i>   t20avniesh@gmail.com</p>
      </li>
       
      <li>
        <p>
          <i class="fa fa-envelope"></i>   pritvirajtiwari28@gmail.com</p>
      </li>
    </ul>
   </div>
    </div>
  <br>
  <center>
   <div class="cr">
     <h4>
      © 2020 Copyright:
       THE SCRIPT SQUAD</h4>
    </div>
  </center>
  
   
  
  
  </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="javascript.js"></script>
  </body>
</html>