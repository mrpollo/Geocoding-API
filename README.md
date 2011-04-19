# Geocoding API
Wrapper for both yahoo

### Yahoo Class Example 
```php
<?php
include "yahoo.php";
$yt = new ygeo();
echo json_encode( $yt->lookPostal('90210') );
```

```javascript
{
    "ResultSet": {
        "version": "1.0",
        "Error": 0,
        "ErrorMessage": "No error",
        "Locale": "us_US",
        "Quality": 60,
        "Found": 1,
        "Results": [{
            "quality": 60,
            "latitude": "34.102150",
            "longitude": "-118.416256",
            "offsetlat": "34.103149",
            "offsetlon": "-118.416252",
            "radius": 5000,
            "name": "",
            "line1": "",
            "line2": "Beverly Hills, CA  90210",
            "line3": "",
            "line4": "United States",
            "house": "",
            "street": "",
            "xstreet": "",
            "unittype": "",
            "unit": "",
            "postal": "90210",
            "neighborhood": "",
            "city": "Beverly Hills",
            "county": "Los Angeles County",
            "state": "California",
            "country": "United States",
            "countrycode": "US",
            "statecode": "CA",
            "countycode": "",
            "uzip": "90210",
            "hash": "",
            "woeid": 12795711,
            "woetype": 11
        }]
    }
}
```