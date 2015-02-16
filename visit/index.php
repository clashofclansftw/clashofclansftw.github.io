<?php

include("geoip.inc");
$ip=$_SERVER['REMOTE_ADDR'];
$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);

$country_code = geoip_country_code_by_addr($gi, "$ip");

// Country name is not used so commented
// Get Country Name based on source IP
//$country = geoip_country_name_by_addr($gi, "$ip");

geoip_close($gi);

switch($country_code)

    {
        case "US": header("Location: http://google.com"); break;
        case "MY": header("Location: http://google.fr"); break;
        case "AU": header("Location: http://afflink3.com"); break;
    case "GB": header("Location: http://afflink4.com"); break;
    case "FR": header("Location: http://afflink5.com"); break;
    case "DE": header("Location: http://afflink6.com"); break;
    case "SE": header("Location: http://afflink7.com"); break;
    case "TH": header("Location: http://afflink8.com"); break;
    case "IN": header("Location: http://afflink9.com"); break;
        default: header("Location: http://internationaloffer.com");
}
?>