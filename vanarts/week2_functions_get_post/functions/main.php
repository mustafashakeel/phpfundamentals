<?php

function sayHello(){
    echo "hello world";
}

// make a function that counts (outputs) from 0 - 20 on the screen

// loop 
// index that starts at 0 and we go up by 1 everytime. 
// function... what am I call it. 
// 

// loop options?? for loop (for i... ), 
// while
// foreach
// do while
// 

// go to google find a function that will generate a random string of cahracters.... 
// kinda like a password generator... 

//a function that generates a password...
//https://stackoverflow.com/questions/4356289/php-random-string-generator
function generateRandomString($length = 10) {
    $characters = '_-?<>0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    echo $randomString;
}

function countUp($countTo=10){
    // now auto count to 20

    for($i=1;$i<=$countTo;$i++){
        echo $i."<br/>";
    }

    // $i = 1;
    // while($i<21)
    // {
    //     echo "$i<br/>";
    //     $i = $i + 1;
    // }

    // $arrNumbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
    // foreach($arrNumbers as $value)
    // {
    //     echo $value."<br>";
    // }

}
// how can I look inside a multdimensional 
// array and find where key = value

function getProducts(){
    $products = array(
        array("sku"=>"t-123-2p", "name"=>"Tent", "price"=>400.00),
        array("sku"=>"jacket-ax3-m", "name"=>"Jacket", "price"=>12.00),
        array("sku"=>"p-123-s", "name"=>"Pants", "price"=>24.00),
        array("sku"=>"hat-90-x1-l", "name"=>"Hat", "price"=>9.00),
        array("sku"=>"shirt-109ckak", "name"=>"Shirt", "price"=>34.00)
    );

    return $products;
}

//https://stackoverflow.com/questions/6661530/php-multidimensional-array-search-by-value
function searchForProductBySku($id, $array) {
    foreach ($array as $key => $val) {
        if ($val['sku'] === $id) {
            return $val;
        }
    }
    return null;
 }

 function buildCountryDD(){
     $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
    
     echo '<select name="country">';
     foreach($countries as $countryName){
         echo '<option value="'.$countryName.'">'.$countryName.'</option>';
     }
     echo '</select>';
 }


function buildForm($settings){
    echo '<form method="post" action="'.$settings["action"].'">';

    $arrFields = $settings["fields"];
    foreach($arrFields as $fieldInfo)
    {
        echo '<label>'.$fieldInfo["label"].'</label>';
        echo '<input type="'.$fieldInfo["type"].'"/><br/>';
    }

    echo '<input type="submit" value="'.$settings["submitLabel"].'">';
    echo '</form>';

}
?>