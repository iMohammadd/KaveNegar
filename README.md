#KaveNegar

**Installation**

Step 1:
Run this command:
```
composer require webazin/kavenegar
```
Step 2:
Add `provider` in `config/app.php`
```
'providers' => [
    ...
    iMohammadd\KaveNegar\KaveNegarServiceProvider::class, //<--add this line at the end of provider array
]
```

Step 3:
Run this command:
```
php artisan vendor:publish
```

Configuration file is placed in `config/kavenegar.php` , open it and enter your kavenegar.com api token






**Usage**


use the kavenegar class on your Controller:
```
use iMohammadd/KaveNegar/SMS;
```

a basic example of send a sms
```
public function sms(SMS $sms)
    {
        try {
            $sender = "10006707323323";
            $message = "Hello Api";
            $receptor = ['0937XXXXXXX', '0933XXXXXXX']; // reciver phone number as a array
            $date = null;
            $type = 1;
            $localIds = ['1','2'];
            $result = $sms->Send($receptor, $sender, $message, $date, $type, $localIds);
            dd($result); // or anything do with $result
        } catch (ApiException $e) {
            return $e->errorMessage();
        } catch (HttpException $e) {
            return $e->errorMessage();
        }
    }
    
```
a basic example of make a call
```
  
public function call(){
   try {
	$api      = new KavenegarApi( '736966********************************3D' );
	$receptor = $mobile;
	$message  = "call message";
	$date     = "";
	$localid  = "";
	$result   = $api->CallMakeTTS( $receptor , $message , $date , $localid );    
        }
    catch ( HttpException $e ) {
	echo $e->errorMessage();
	}
 }
                
```

for more info see [Kavenegar.com Official Document](http://kavenegar.com/rest.html)

[وب آذین](https://webazin.net)
