# Geocoding API
Wrapper for both yahoo

### Yahoo Class Example 
```php
<?php
include "yahoo.php";
$yt = new ygeo();
echo json_encode( $yt->lookPostal('90210') );
```
#### Yahoo Sample Output
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
### Google Class Example 
```php
<?php
include "google.php";
$gt = new ggeo();
echo json_encode( $gt->look('90210') );
```
#### Google Output Sample 
```javascript
{
    "status": "OK",
    "results": [{
        "types": ["postal_code"],
        "formatted_address": "Beverly Hills, CA 90210, USA",
        "address_components": [{
            "long_name": "90210",
            "short_name": "90210",
            "types": ["postal_code"]
        }, {
            "long_name": "Beverly Hills",
            "short_name": "Beverly Hills",
            "types": ["locality", "political"]
        }, {
            "long_name": "Los Angeles",
            "short_name": "Los Angeles",
            "types": ["administrative_area_level_2", "political"]
        }, {
            "long_name": "California",
            "short_name": "CA",
            "types": ["administrative_area_level_1", "political"]
        }, {
            "long_name": "United States",
            "short_name": "US",
            "types": ["country", "political"]
        }],
        "geometry": {
            "location": {
                "lat": 34.1030032,
                "lng": -118.4104684
            },
            "location_type": "APPROXIMATE",
            "viewport": {
                "southwest": {
                    "lat": 34.064233,
                    "lng": -118.446716
                },
                "northeast": {
                    "lat": 34.1377559,
                    "lng": -118.389672
                }
            },
            "bounds": {
                "southwest": {
                    "lat": 34.064233,
                    "lng": -118.446716
                },
                "northeast": {
                    "lat": 34.1377559,
                    "lng": -118.389672
                }
            }
        }
    }]
}
```