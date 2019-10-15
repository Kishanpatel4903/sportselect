<!DOCTYPE HTML>
<html lang="zxx">
   <head>
      <title>signup</title>
      <!-- Meta tag Keywords -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8" />
      <meta name="keywords" content="" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
      <style>
         /*custom font*/
         @import url(https://fonts.googleapis.com/css?family=Montserrat);
         /*basic reset*/
         * {margin: 0; padding: 0;}
         html {
         height: 100%;
         /*Image only BG fallback*/
         /*background = gradient + image pattern combo*/
         background: 
         linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
         }
         body {
         font-family: montserrat, arial, verdana;
         }
         /*form styles*/
         #msform {
         width: 1000px;
         margin: 50px auto;
         text-align: center;
         position: relative;
         }
         #msform fieldset {
         background: white;
         border: 0 none;
         border-radius: 3px;
         box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
         padding: 20px 30px;
         box-sizing: border-box;
         width: 80%;
         margin: 0 10%;
         /*stacking fieldsets above each other*/
         position: relative;
         }
         /*Hide all except first fieldset*/
         #msform fieldset:not(:first-of-type) {
         display: none;
         }
         /*inputs*/
         #msform input, #msform textarea, select
         {
         padding: 15px;
         border: 1px solid #ccc;
         border-radius: 3px;
         margin-bottom: 10px;
         width: 100%;
         box-sizing: border-box;
         font-family: montserrat;
         color: #2C3E50;
         font-size: 13px;
         }
         /*buttons*/
         #msform .action-button {
         width: 100px;
         background: #27AE60;
         font-weight: bold;
         color: white;
         border: 0 none;
         border-radius: 1px;
         cursor: pointer;
         padding: 10px 5px;
         margin: 10px 5px;
         }
         #msform .action-button:hover, #msform .action-button:focus {
         box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
         }
         /*headings*/
         .fs-title {
         font-size: 15px;
         text-transform: uppercase;
         color: #2C3E50;
         margin-bottom: 10px;
         }
         .fs-subtitle {
         font-weight: normal;
         font-size: 13px;
         color: #666;
         margin-bottom: 20px;
         }
         /*progressbar*/
         #progressbar {
         margin-bottom: 30px;
         overflow: hidden;
         /*CSS counters to number the steps*/
         counter-reset: step;
         }
         #progressbar li {
         list-style-type: none;
         color: white;
         text-transform: uppercase;
         font-size: 9px;
         width: 33.33%;
         float: left;
         position: relative;
         }
         #progressbar li:before {
         content: counter(step);
         counter-increment: step;
         width: 20px;
         line-height: 20px;
         display: block;
         font-size: 10px;
         color: #333;
         background: white;
         border-radius: 3px;
         margin: 0 auto 5px auto;
         }
         /*progressbar connectors*/
         #progressbar li:after {
         content: '';
         width: 100%;
         height: 2px;
         background: white;
         position: absolute;
         left: -50%;
         top: 9px;
         z-index: -1; /*put it behind the numbers*/
         }
         #progressbar li:first-child:after {
         /*connector not needed before the first step*/
         content: none; 
         }
         /*marking active/completed steps green*/
         /*The number of the step and the connector before it = green*/
         #progressbar li.active:before,  #progressbar li.active:after{
         background: #27AE60;
         color: white;
         }
         fieldset.two input {
         width: 46% !important;
         margin: 7px;
         }
         span.select2.select2-container.select2-container--default {
         width: 46% !important;
         text-align: left;
         }
         fieldset.two select {
         width: 46% !important;
         margin: 7px;
         }
         fieldset.two {
         width: 500px !important;
         margin: 0 auto !important;
         }
         .select2-container .select2-selection--single {
         height: 50px;
         }
         .select2-container--default .select2-selection--single .select2-selection__rendered {
         font-size: 13px;
         position: relative;
         top: 9px;
         }
         .select2-container--default .select2-selection--single .select2-selection__arrow {
         top: 9px;
         left: 7px
         }
         /*new css*/
         .third-fieldset input, .third-fieldset select
         {
         width: 48% !important;
         display: inline-block;
         }
         .inthreeoption input, .inthreeoption select
         {
         width: 32% !important;
         display: inline-block;
         }
         /*.inthreeoption select:first-child
         {
         float: left;
         }*/
         .textwithlable
         {
         display: inline-block;
         width: 48%;
         }
         .textwithlable input, .textwithlable label
         {
         width: 100% !important;
         }
         .textwithlable input
         {
          margin-bottom: 0px !important;
         }
         .textwithlable label
         {
         font-size: 12px;
         }
         .onlyonerow
         {
         display: inline-block;
         width: 100%;
         margin-bottom: 10px;
         }
         .onlyonerow input, .onlyonerow select
         {
          margin-bottom: 0 !important;
         }
         .onlyonerow > :first-child
         {
            margin-right: 15px;
         }
         .selectfirstoption select
         {
          float: left;
          margin-left: 5px;
         }
         .error {
           border: 1px solid #f00 !important;
        }

        .valid {
           border: 2px solid #0ff;
        }

        form, input {
           margin: 10px;
        }
        #docs {
           display: block;
           position: fixed;
           bottom: 0;
           right: 0;
        }
      </style>
   </head>
   <body>
      <form id="msform" name="msform" method="post" action="<?php echo base_url().'signup/insertfunction/'; ?>"> <!-- signup/constants remove ite -->
         <!-- progressbar -->
         <ul id="progressbar">
            <li class="active">Account Setup</li>
            <li>Personal Details Profiles</li>
            <li>Career Info</li>
         </ul>
         <!-- fieldsets -->
         <fieldset style="width: 400px;margin: 0 auto">
            <h2 class="fs-title">Create your account</h2>
            <?php  $message = $this->session->flashdata('mess'); ?>
<div style="color:green;"> <?php echo $message["message"]; ?> </div>
            <h3 class="fs-subtitle">This is step 1</h3>
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="pass" class="pass" id="pass" placeholder="Password" />
            <input type="password" name="cpass" placeholder="Confirm Password" />
            <?php if(isset($_GET['passkey']) && !empty($_GET['passkey'])){ ?>
           <div class="form-group">
            <input type="hidden" name="oldpasskey" value="<?php echo $_GET['passkey']; ?>">
              <input type="text" class="form-control" id="passkey" placeholder="Enter Passkey" name="passkey">
            </div>
          <?php } ?>
            <input type="button" name="next" class="next action-button" value="Next" />
         </fieldset>
         <fieldset class="two">
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">We will never sell it</h3>
            <input type="text" name="fname" placeholder="First Name" />
            <input type="text" name="lname" placeholder="Last Name" />
            <input type="text" name="height" placeholder="Height" />
            <input type="text" name="weight" placeholder="Weight" />
            <select name="country"></select>
            <input type="date" name="age" placeholder="Age" />
            <select name="service_location" id="service_location">
               <option value="living">Living</option>
               <option value="separate">Separate</option>
               <option value="share">Share</option>
               <option value="none">None</option>
            </select>
            <select name="user_language" data-placeholder="Choose a Language...">
               <option value="AF">Spoken Languages</option>
               <option value="AF">Afrikanns</option>
               <option value="SQ">Albanian</option>
               <option value="AR">Arabic</option>
               <option value="HY">Armenian</option>
               <option value="EU">Basque</option>
               <option value="BN">Bengali</option>
               <option value="BG">Bulgarian</option>
               <option value="CA">Catalan</option>
               <option value="KM">Cambodian</option>
               <option value="ZH">Chinese (Mandarin)</option>
               <option value="HR">Croation</option>
               <option value="CS">Czech</option>
               <option value="DA">Danish</option>
               <option value="NL">Dutch</option>
               <option value="EN">English</option>
               <option value="ET">Estonian</option>
               <option value="FJ">Fiji</option>
               <option value="FI">Finnish</option>
               <option value="FR">French</option>
               <option value="KA">Georgian</option>
               <option value="DE">German</option>
               <option value="EL">Greek</option>
               <option value="GU">Gujarati</option>
               <option value="HE">Hebrew</option>
               <option value="HI">Hindi</option>
               <option value="HU">Hungarian</option>
               <option value="IS">Icelandic</option>
               <option value="ID">Indonesian</option>
               <option value="GA">Irish</option>
               <option value="IT">Italian</option>
               <option value="JA">Japanese</option>
               <option value="JW">Javanese</option>
               <option value="KO">Korean</option>
               <option value="LA">Latin</option>
               <option value="LV">Latvian</option>
               <option value="LT">Lithuanian</option>
               <option value="MK">Macedonian</option>
               <option value="MS">Malay</option>
               <option value="ML">Malayalam</option>
               <option value="MT">Maltese</option>
               <option value="MI">Maori</option>
               <option value="MR">Marathi</option>
               <option value="MN">Mongolian</option>
               <option value="NE">Nepali</option>
               <option value="NO">Norwegian</option>
               <option value="FA">Persian</option>
               <option value="PL">Polish</option>
               <option value="PT">Portuguese</option>
               <option value="PA">Punjabi</option>
               <option value="QU">Quechua</option>
               <option value="RO">Romanian</option>
               <option value="RU">Russian</option>
               <option value="SM">Samoan</option>
               <option value="SR">Serbian</option>
               <option value="SK">Slovak</option>
               <option value="SL">Slovenian</option>
               <option value="ES">Spanish</option>
               <option value="SW">Swahili</option>
               <option value="SV">Swedish </option>
               <option value="TA">Tamil</option>
               <option value="TT">Tatar</option>
               <option value="TE">Telugu</option>
               <option value="TH">Thai</option>
               <option value="BO">Tibetan</option>
               <option value="TO">Tonga</option>
               <option value="TR">Turkish</option>
               <option value="UK">Ukranian</option>
               <option value="UR">Urdu</option>
               <option value="UZ">Uzbek</option>
               <option value="VI">Vietnamese</option>
               <option value="CY">Welsh</option>
               <option value="XH">Xhosa</option>
            </select>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
         </fieldset>
         <fieldset class="third-fieldset">
            <h2 class="fs-title">Career Info</h2>
            <h3 class="fs-subtitle">Your presence in the league</h3>
            <!-- <input type="text" name="repo" placeholder="Reputation" />
               <input type="text" name="cteam" placeholder="Current Team" /> 
               <input type="text" name="preteam" placeholder="Previous Team" /> -->
            <div class="onlyonerow">
               <select name="career_type" id="career_type">
                  <option value="">Type</option>
                  <option value="home_defender">home defender</option>
                  <option value="attacker">attacker</option>
                  <option value="sniper">sniper</option>
                  <option value="grinder">grinder</option>
                  <option value="playmaker">playmaker</option>
                  <option value="power_forward">power forward </option>
               </select>
               <input type="text" name="salary" placeholder="desired salary">
            </div>
            <div class="onlyonerow">
               <select name="prefer_side" id="prefer_side">
                  <option value="">Preferred side</option>
                  <option value="right">right </option>
                  <option value="left">left</option>
                  <option value="both">both</option>
               </select>
               <select name="career_grab" id="career_grab">
                  <option value="grab">Grab </option>
                  <option value="right">right </option>
                  <option value="left">left</option>
               </select>
            </div>
            <div class="onlyonerow selectfirstoption">
               <select name="family_status" id="family_status">
                  <option value="">Family status </option>
                  <option value="single">single </option>
                  <option value="married">married</option>
                  <option value="travelwithpartner">travel with partner</option>
               </select>
               <div class="textwithlable">
                  <input type="text" name="jersey_number" placeholder="jersey number">
                  <label>(like 555,666,777)</label>
               </div>
            </div>
            <div class="onlyonerow">
               <div class="inthreeoption">
                  <select name="first_availability" id="first_availability">
                     <option value="">Availability</option>
                     <option value="available">Available </option>
                     <option value="hapwithcon">happy with contract </option>
                     <option value="unhwithcon">unhappy with contract</option>
                  </select>
                  <select name="second_availability" id="second_availability" style="display: none;">
                     <option value="">Availability</option>
                     <option value="unhwithcoach">unhappy with coach</option>
                     <option value="unhwithteam">unhappy with team mates</option>
                     <option value="unhwithclub">unhappy with club</option>
                     <option value="unhwithliv">unhappy with living</option>
                     <option value="other">other</option>
                  </select>
                  <input type="text" name="other" id="other" placeholder="other" style="display: none;">
               </div>
            </div>
            <div class="onlyonerow">
               <select name="first_position" id="first_position">
                  <option value="">Position </option>
                  <option value="primary">Primary</option>
                  <option value="secondary">secondary</option>
                  <option value="alternative">alternative </option>
               </select>
               <select name="second_position" id="second_position" style="display: none;">
                  <option value="">Position </option>
                  <option value="center">center</option>
                  <option value="winger">winger</option>
                  <option value="defender">defender</option>
                  <option value="goalie">goalie</option>
               </select>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="action-button" value="Submit" />
         </fieldset>
      </form>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
      <script>
         (function($) {
             $(function() {
                 var isoCountries = [
                     { id: 'AF', text: 'Afghanistan'},
                     { id: 'AX', text: 'Aland Islands'},
                     { id: 'AL', text: 'Albania'},
                     { id: 'DZ', text: 'Algeria'},
                     { id: 'AS', text: 'American Samoa'},
                     { id: 'AD', text: 'Andorra'},
                     { id: 'AO', text: 'Angola'},
                     { id: 'AI', text: 'Anguilla'},
                     { id: 'AQ', text: 'Antarctica'},
                     { id: 'AG', text: 'Antigua And Barbuda'},
                     { id: 'AR', text: 'Argentina'},
                     { id: 'AM', text: 'Armenia'},
                     { id: 'AW', text: 'Aruba'},
                     { id: 'AU', text: 'Australia'},
                     { id: 'AT', text: 'Austria'},
                     { id: 'AZ', text: 'Azerbaijan'},
                     { id: 'BS', text: 'Bahamas'},
                     { id: 'BH', text: 'Bahrain'},
                     { id: 'BD', text: 'Bangladesh'},
                     { id: 'BB', text: 'Barbados'},
                     { id: 'BY', text: 'Belarus'},
                     { id: 'BE', text: 'Belgium'},
                     { id: 'BZ', text: 'Belize'},
                     { id: 'BJ', text: 'Benin'},
                     { id: 'BM', text: 'Bermuda'},
                     { id: 'BT', text: 'Bhutan'},
                     { id: 'BO', text: 'Bolivia'},
                     { id: 'BA', text: 'Bosnia And Herzegovina'},
                     { id: 'BW', text: 'Botswana'},
                     { id: 'BV', text: 'Bouvet Island'},
                     { id: 'BR', text: 'Brazil'},
                     { id: 'IO', text: 'British Indian Ocean Territory'},
                     { id: 'BN', text: 'Brunei Darussalam'},
                     { id: 'BG', text: 'Bulgaria'},
                     { id: 'BF', text: 'Burkina Faso'},
                     { id: 'BI', text: 'Burundi'},
                     { id: 'KH', text: 'Cambodia'},
                     { id: 'CM', text: 'Cameroon'},
                     { id: 'CA', text: 'Canada'},
                     { id: 'CV', text: 'Cape Verde'},
                     { id: 'KY', text: 'Cayman Islands'},
                     { id: 'CF', text: 'Central African Republic'},
                     { id: 'TD', text: 'Chad'},
                     { id: 'CL', text: 'Chile'},
                     { id: 'CN', text: 'China'},
                     { id: 'CX', text: 'Christmas Island'},
                     { id: 'CC', text: 'Cocos (Keeling) Islands'},
                     { id: 'CO', text: 'Colombia'},
                     { id: 'KM', text: 'Comoros'},
                     { id: 'CG', text: 'Congo'},
                     { id: 'CD', text: 'Congo}, Democratic Republic'},
                     { id: 'CK', text: 'Cook Islands'},
                     { id: 'CR', text: 'Costa Rica'},
                     { id: 'CI', text: 'Cote D\'Ivoire'},
                     { id: 'HR', text: 'Croatia'},
                     { id: 'CU', text: 'Cuba'},
                     { id: 'CY', text: 'Cyprus'},
                     { id: 'CZ', text: 'Czech Republic'},
                     { id: 'DK', text: 'Denmark'},
                     { id: 'DJ', text: 'Djibouti'},
                     { id: 'DM', text: 'Dominica'},
                     { id: 'DO', text: 'Dominican Republic'},
                     { id: 'EC', text: 'Ecuador'},
                     { id: 'EG', text: 'Egypt'},
                     { id: 'SV', text: 'El Salvador'},
                     { id: 'GQ', text: 'Equatorial Guinea'},
                     { id: 'ER', text: 'Eritrea'},
                     { id: 'EE', text: 'Estonia'},
                     { id: 'ET', text: 'Ethiopia'},
                     { id: 'FK', text: 'Falkland Islands (Malvinas)'},
                     { id: 'FO', text: 'Faroe Islands'},
                     { id: 'FJ', text: 'Fiji'},
                     { id: 'FI', text: 'Finland'},
                     { id: 'FR', text: 'France'},
                     { id: 'GF', text: 'French Guiana'},
                     { id: 'PF', text: 'French Polynesia'},
                     { id: 'TF', text: 'French Southern Territories'},
                     { id: 'GA', text: 'Gabon'},
                     { id: 'GM', text: 'Gambia'},
                     { id: 'GE', text: 'Georgia'},
                     { id: 'DE', text: 'Germany'},
                     { id: 'GH', text: 'Ghana'},
                     { id: 'GI', text: 'Gibraltar'},
                     { id: 'GR', text: 'Greece'},
                     { id: 'GL', text: 'Greenland'},
                     { id: 'GD', text: 'Grenada'},
                     { id: 'GP', text: 'Guadeloupe'},
                     { id: 'GU', text: 'Guam'},
                     { id: 'GT', text: 'Guatemala'},
                     { id: 'GG', text: 'Guernsey'},
                     { id: 'GN', text: 'Guinea'},
                     { id: 'GW', text: 'Guinea-Bissau'},
                     { id: 'GY', text: 'Guyana'},
                     { id: 'HT', text: 'Haiti'},
                     { id: 'HM', text: 'Heard Island & Mcdonald Islands'},
                     { id: 'VA', text: 'Holy See (Vatican City State)'},
                     { id: 'HN', text: 'Honduras'},
                     { id: 'HK', text: 'Hong Kong'},
                     { id: 'HU', text: 'Hungary'},
                     { id: 'IS', text: 'Iceland'},
                     { id: 'IN', text: 'India'},
                     { id: 'ID', text: 'Indonesia'},
                     { id: 'IR', text: 'Iran}, Islamic Republic Of'},
                     { id: 'IQ', text: 'Iraq'},
                     { id: 'IE', text: 'Ireland'},
                     { id: 'IM', text: 'Isle Of Man'},
                     { id: 'IL', text: 'Israel'},
                     { id: 'IT', text: 'Italy'},
                     { id: 'JM', text: 'Jamaica'},
                     { id: 'JP', text: 'Japan'},
                     { id: 'JE', text: 'Jersey'},
                     { id: 'JO', text: 'Jordan'},
                     { id: 'KZ', text: 'Kazakhstan'},
                     { id: 'KE', text: 'Kenya'},
                     { id: 'KI', text: 'Kiribati'},
                     { id: 'KR', text: 'Korea'},
                     { id: 'KW', text: 'Kuwait'},
                     { id: 'KG', text: 'Kyrgyzstan'},
                     { id: 'LA', text: 'Lao People\'s Democratic Republic'},
                     { id: 'LV', text: 'Latvia'},
                     { id: 'LB', text: 'Lebanon'},
                     { id: 'LS', text: 'Lesotho'},
                     { id: 'LR', text: 'Liberia'},
                     { id: 'LY', text: 'Libyan Arab Jamahiriya'},
                     { id: 'LI', text: 'Liechtenstein'},
                     { id: 'LT', text: 'Lithuania'},
                     { id: 'LU', text: 'Luxembourg'},
                     { id: 'MO', text: 'Macao'},
                     { id: 'MK', text: 'Macedonia'},
                     { id: 'MG', text: 'Madagascar'},
                     { id: 'MW', text: 'Malawi'},
                     { id: 'MY', text: 'Malaysia'},
                     { id: 'MV', text: 'Maldives'},
                     { id: 'ML', text: 'Mali'},
                     { id: 'MT', text: 'Malta'},
                     { id: 'MH', text: 'Marshall Islands'},
                     { id: 'MQ', text: 'Martinique'},
                     { id: 'MR', text: 'Mauritania'},
                     { id: 'MU', text: 'Mauritius'},
                     { id: 'YT', text: 'Mayotte'},
                     { id: 'MX', text: 'Mexico'},
                     { id: 'FM', text: 'Micronesia}, Federated States Of'},
                     { id: 'MD', text: 'Moldova'},
                     { id: 'MC', text: 'Monaco'},
                     { id: 'MN', text: 'Mongolia'},
                     { id: 'ME', text: 'Montenegro'},
                     { id: 'MS', text: 'Montserrat'},
                     { id: 'MA', text: 'Morocco'},
                     { id: 'MZ', text: 'Mozambique'},
                     { id: 'MM', text: 'Myanmar'},
                     { id: 'NA', text: 'Namibia'},
                     { id: 'NR', text: 'Nauru'},
                     { id: 'NP', text: 'Nepal'},
                     { id: 'NL', text: 'Netherlands'},
                     { id: 'AN', text: 'Netherlands Antilles'},
                     { id: 'NC', text: 'New Caledonia'},
                     { id: 'NZ', text: 'New Zealand'},
                     { id: 'NI', text: 'Nicaragua'},
                     { id: 'NE', text: 'Niger'},
                     { id: 'NG', text: 'Nigeria'},
                     { id: 'NU', text: 'Niue'},
                     { id: 'NF', text: 'Norfolk Island'},
                     { id: 'MP', text: 'Northern Mariana Islands'},
                     { id: 'NO', text: 'Norway'},
                     { id: 'OM', text: 'Oman'},
                     { id: 'PK', text: 'Pakistan'},
                     { id: 'PW', text: 'Palau'},
                     { id: 'PS', text: 'Palestinian Territory}, Occupied'},
                     { id: 'PA', text: 'Panama'},
                     { id: 'PG', text: 'Papua New Guinea'},
                     { id: 'PY', text: 'Paraguay'},
                     { id: 'PE', text: 'Peru'},
                     { id: 'PH', text: 'Philippines'},
                     { id: 'PN', text: 'Pitcairn'},
                     { id: 'PL', text: 'Poland'},
                     { id: 'PT', text: 'Portugal'},
                     { id: 'PR', text: 'Puerto Rico'},
                     { id: 'QA', text: 'Qatar'},
                     { id: 'RE', text: 'Reunion'},
                     { id: 'RO', text: 'Romania'},
                     { id: 'RU', text: 'Russian Federation'},
                     { id: 'RW', text: 'Rwanda'},
                     { id: 'BL', text: 'Saint Barthelemy'},
                     { id: 'SH', text: 'Saint Helena'},
                     { id: 'KN', text: 'Saint Kitts And Nevis'},
                     { id: 'LC', text: 'Saint Lucia'},
                     { id: 'MF', text: 'Saint Martin'},
                     { id: 'PM', text: 'Saint Pierre And Miquelon'},
                     { id: 'VC', text: 'Saint Vincent And Grenadines'},
                     { id: 'WS', text: 'Samoa'},
                     { id: 'SM', text: 'San Marino'},
                     { id: 'ST', text: 'Sao Tome And Principe'},
                     { id: 'SA', text: 'Saudi Arabia'},
                     { id: 'SN', text: 'Senegal'},
                     { id: 'RS', text: 'Serbia'},
                     { id: 'SC', text: 'Seychelles'},
                     { id: 'SL', text: 'Sierra Leone'},
                     { id: 'SG', text: 'Singapore'},
                     { id: 'SK', text: 'Slovakia'},
                     { id: 'SI', text: 'Slovenia'},
                     { id: 'SB', text: 'Solomon Islands'},
                     { id: 'SO', text: 'Somalia'},
                     { id: 'ZA', text: 'South Africa'},
                     { id: 'GS', text: 'South Georgia And Sandwich Isl.'},
                     { id: 'ES', text: 'Spain'},
                     { id: 'LK', text: 'Sri Lanka'},
                     { id: 'SD', text: 'Sudan'},
                     { id: 'SR', text: 'Suriname'},
                     { id: 'SJ', text: 'Svalbard And Jan Mayen'},
                     { id: 'SZ', text: 'Swaziland'},
                     { id: 'SE', text: 'Sweden'},
                     { id: 'CH', text: 'Switzerland'},
                     { id: 'SY', text: 'Syrian Arab Republic'},
                     { id: 'TW', text: 'Taiwan'},
                     { id: 'TJ', text: 'Tajikistan'},
                     { id: 'TZ', text: 'Tanzania'},
                     { id: 'TH', text: 'Thailand'},
                     { id: 'TL', text: 'Timor-Leste'},
                     { id: 'TG', text: 'Togo'},
                     { id: 'TK', text: 'Tokelau'},
                     { id: 'TO', text: 'Tonga'},
                     { id: 'TT', text: 'Trinidad And Tobago'},
                     { id: 'TN', text: 'Tunisia'},
                     { id: 'TR', text: 'Turkey'},
                     { id: 'TM', text: 'Turkmenistan'},
                     { id: 'TC', text: 'Turks And Caicos Islands'},
                     { id: 'TV', text: 'Tuvalu'},
                     { id: 'UG', text: 'Uganda'},
                     { id: 'UA', text: 'Ukraine'},
                     { id: 'AE', text: 'United Arab Emirates'},
                     { id: 'GB', text: 'United Kingdom'},
                     { id: 'US', text: 'United States'},
                     { id: 'UM', text: 'United States Outlying Islands'},
                     { id: 'UY', text: 'Uruguay'},
                     { id: 'UZ', text: 'Uzbekistan'},
                     { id: 'VU', text: 'Vanuatu'},
                     { id: 'VE', text: 'Venezuela'},
                     { id: 'VN', text: 'Viet Nam'},
                     { id: 'VG', text: 'Virgin Islands}, British'},
                     { id: 'VI', text: 'Virgin Islands}, U.S.'},
                     { id: 'WF', text: 'Wallis And Futuna'},
                     { id: 'EH', text: 'Western Sahara'},
                     { id: 'YE', text: 'Yemen'},
                     { id: 'ZM', text: 'Zambia'},
                     { id: 'ZW', text: 'Zimbabwe'}
                 ];
                 
                 function formatCountry (country) {
                   if (!country.id) { return country.text; }
                   var $country = $(
                     '<span class="flag-icon flag-icon-'+ country.id.toLowerCase() +' flag-icon-squared"></span>' +
                     '<span class="flag-text">'+ country.text+"</span>"
                   );
                   return $country;
                 };
                 
                 //Assuming you have a select element with name country
                 // e.g. <select name="name"></select>
                 
                 $("[name='country']").select2({
                     placeholder: "Select a country",
         templateResult: formatCountry,
                     data: isoCountries
                 });
                 
                 
             });
         })(jQuery);  
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
      <script>
         //jQuery time
         var current_fs, next_fs, previous_fs; //fieldsets
         var left, opacity, scale; //fieldset properties which we will animate
         var animating; //flag to prevent quick multi-click glitches

         $(".next").click(function(){
            
            var form = jQuery("#msform");

            form.validate({
               rules: {
                  email:{
                     required:true,
                     email:true,
                  },
                  pass:{
                     required: true,
                     minlength: 6,
                     maxlength: 8,
                  }, 
                  cpass: {
                     required:true,
                     equalTo : "#pass",
                  },                            
                  passkey:{
                     required:true,
                  },
                  fname:{
                     required:true,
                  },
                  lname:{
                     required:true,
                  },
                  height:{
                     required:true,
                  },
                  weight:{
                     required:true,
                  },
                  age:{
                     required:true,
                  },
                  career_type:{
                     required:true,
                  },
                  salary:{
                     required:true,
                  },
                  prefer_side:{
                     required:true,
                  },
                  family_status:{
                     required:true,
                  },
                  jersey_number:{
                     required:true,
                  },
                  first_availability:{
                     required:true,
                  },
                  second_availability:{
                     required:true,
                  },
                  other :{
                     required:true,
                  },
                  first_position :{
                     required:true,
                  },
                  second_position :{
                     required:true,
                  },
               },
               messages:{
                  email:{
                     required: "Please enter email.",
                     email:"Please enter valid email.",
                  },
                  pass:{
                     required: "Please enter new password.",
                     minlength: "Please enter minimum 6 characters.",
                     maxlength: "Please enter maximum 8 characters.",
                  },
                  cpass:{
                     required:'Please enter confirm password.',
                     equalTo:'Password and confirm password does not match.'
                  },
                  passkey:{
                     required: "Please enter passkey.",
                  },
                  fname:{
                     required: "Please enter firstname.",
                  },
                  lname:{
                     required: "Please enter lastname.",
                  },
                  height:{
                     required: "Please enter height.",
                  },
                  weight:{
                     required: "Please enter weight.",
                  },
                  age:{
                     required: "Please select age.",
                  },
                  career_type:{
                     required: "Please select type.",
                  },
                  salary:{
                     required: "Please enter salary.",
                  },
                  prefer_side:{
                     required: "Please select prefer side.",
                  },
                  family_status:{
                     required: "Please select family status.",
                  },
                  jersey_number:{
                     required: "Please select jersey number.",
                  },
                  first_availability:{
                     required: "Please select availability.",
                  },
                  second_availability:{
                     required: "Please select availability.",
                  },
                  other:{
                     required: "Please enter other value.",
                  },
                  first_position:{
                     required: "Please select position.",
                  },
                  second_position:{
                     required: "Please select position.",
                  },
               },
               errorPlacement: function(){
                  return false;
               },
            });
            
            console.log(form.valid());
   
            if(form.valid()===true){
              if(animating) return false;
          animating = true;
          
          current_fs = $(this).parent();
          next_fs = $(this).parent().next();
          
          //activate next step on progressbar using the index of next_fs
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
          
          //show the next fieldset
          next_fs.show(); 
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale current_fs down to 80%
              scale = 1 - (1 - now) * 0.2;
              //2. bring next_fs from the right(50%)
              left = (now * 50)+"%";
              //3. increase opacity of next_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({
                 'transform': 'scale('+scale+')',
                 'position': 'absolute'
               });
              next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
              current_fs.hide();
              animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
          });
            }
          
         });
         
         $(".previous").click(function(){
          if(animating) return false;
          animating = true;
          
          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();
          
          //de-activate current step on progressbar
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
          
          //show the previous fieldset
          previous_fs.show(); 
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale previous_fs from 80% to 100%
              scale = 0.8 + (1 - now) * 0.2;
              //2. take current_fs to the right(50%) - from 0%
              left = ((1-now) * 50)+"%";
              //3. increase opacity of previous_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({'left': left});
              previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
              current_fs.hide();
              animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
          });
         });
         
         $(".submit").click(function(){
          return false;
         })

         $('select[name="first_availability"]').on('change', function() {
            if(this.value == "unhwithcon"){
               $('#second_availability').show();
            }else{
               $('#second_availability').hide();
               $('#other').hide();
            }
         });
         $('select[name="second_availability"]').on('change', function() {
            if(this.value == "other"){
               $('#other').show();
            }else{
               $('#other').hide();
            }
         });
         $('select[name="first_position"]').on('change', function() {
            if(this.value == "alternative"){
               $('#second_position').show();
            }else{
               $('#second_position').hide();
            }
         });    
      </script>



   </body>
</html>