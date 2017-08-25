
[![Latest Stable Version](https://poser.pugx.org/shamim/ultimate-sms-api/v/stable)](https://packagist.org/packages/shamim/ultimate-sms-api?format=flat-square)
[![Total Downloads](https://poser.pugx.org/shamim/ultimate-sms-api/downloads)](https://packagist.org/packages/shamim/ultimate-sms-api?format=flat-square)
[![License](https://poser.pugx.org/shamim/ultimate-sms-api/license)](https://packagist.org/packages/shamim/ultimate-sms-api?format=flat-square)
[![GitHub issues](https://img.shields.io/github/issues/akasham67/ultimate-sms-api.svg?style=flat-square)](https://github.com/akasham67/ultimate-sms-api/issues)
[![GitHub stars](https://img.shields.io/github/stars/akasham67/ultimate-sms-api.svg?style=flat-square)](https://github.com/akasham67/ultimate-sms-api/stargazers)

# Ultimate SMS API

Ultimate SMS API is build for Ultimate SMS - Bulk SMS Application For Marketing


### Prerequisites

To run Ultimate SMS API you have to install Ultimate SMS Application on your server. 
For more details please visit: [Ultimate SMS](https://ultimatesms.coderpixel.com/)
```
php >=5.6
Ultimate SMS - Bulk SMS Application For Markting
```

### Installing
Via Composer
```
composer require shamim/ultimate-sms-api 
```

And Via Bash

```
git clone https://github.com/akasham67/ultimate-sms-api.git
```

## Usage


 ### Step 1:
If install Ultimate SMS API using Git Clone then load your Ultimate SMS API Class file and Use namespace. 
```php
require_once 'src/Class_Ultimate_SMS_API.php';
use UltimateSMS\UltimateSMSAPI;
```
If install Ultimate SMS API using Composer then Require/Include autoload.php file in the index.php of your project or whatever file you need to use **Ultimate SMS API** classes:. 
```php
require 'vendor/autoload.php';
use UltimateSMS\UltimateSMSAPI;
```
### Step 2:
set your API_KEY from `https://mywebhost.com/ultimate-sms-api/info` (your application install url)
```php
$api_key = 'YWRtaW46YWRtaW4ucGFzc3dvcmQ=';
```
### Step 3:
Change the from number below. It can be a valid phone number or a String
```php
$from = '8801721000000';
```

### Step 4:
the number we are sending to - Any phone number
```php
$destination = '8801810000000';
```
You have to must include Country code at beginning of the phone number.  

### Step 5:
Replace your Install URL like `https://mywebhost.com/ultimate-sms/api` with `https://ultimatesms.coderpixel.com/demo/`
`ultimate-sms/api` is mandatory on your install url

```php
$url = 'https://ultimatesms.coderpixel.com/demo/ultimate-sms/api';
```
// SMS Body
```php
$sms = 'test message from Ultimate SMS';
```
// Create SMS Body for request
```php
$sms_body = array(
    'api_key' => $api_key,
    'to' => $destination,
    'from' => $from,
    'sms' => $sms,
);
```

### Step 6: 
Instantiate a new Ultimate SMS API request
```php
$client = new UltimateSMSAPI();
```

## Send SMS
Finally send your sms through Ultimate SMS API
```php
$response = $client->send_sms($sms_body, $url);
```

## Get Inbox
Get your all message
```php
$get_inbox=$client->get_inbox($api_key,$url);
```
## Response
Ultimate SMS API return response with `json` format, like:

```json
{"code":"ok","message":"Successfully Send"}
```

## Status Code

| Status | Message |
| --- | --- |
| `ok` | Successfully Send |
| `100` | Bad gateway requested |
| `101` | Wrong action |
| `102` | Authentication failed |
| `103` | Invalid phone number |
| `104` | Phone coverage not active |
| `105` | Insufficient balance |

## Authors

* **Abul Kashem Shamim** - *Initial work* - [akasham67](https://github.com/akasham67)

See also the list of [contributors](https://github.com/akasham67/ultimate-sms-api/contributors) who participated in this project.