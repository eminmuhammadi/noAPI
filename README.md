# noAPI
*noAPI* - easly and secure create REST API using PHP.

## Security 
- Header Authentication
- OpenSSL 

## Configuration
### Attention
```php
require 'vendor/autoload.php';
```

- **apiV1**

```php
'method' => 'apiv1',

'data' 	 => array('...')
```
see example on [API-V1/api.php](API-V1/api.php "APIV1")


- **Request**

```php
'secret_key'=>'I_AM_SECRET_KEY' ,
'secret_iv' =>'I_AM_SECRET_IV' ,
'method'    =>'request',
'data'      =>array('...')				   
```		   
see example on [TWO-WAY-API/request.php](TWO-WAY-API/request.php "REQUEST")

- **Response**

```php
'secret_key'=>'I_AM_SECRET_KEY' ,
'secret_iv' =>'I_AM_SECRET_IV'  ,
'method'    =>'response',
'url'       =>'http://localhost'
```
see example on [TWO-WAY-API/response.php](TWO-WAY-API/response.php "RESPONSE")

## Installing
```shell
git clone https://github.com/eminmuhammadi/noAPI.git
```
## Documentation
[https://eminmuhammadi.github.io/noAPI/](https://eminmuhammadi.github.io/noAPI/ "noAPI Documentation") - For Documentation page visit this link

## Authors
* **Emin Muhammadi** muemin17631@sabah.edu.az - *Initial work* - [EminMuhammadi](https://github.com/eminmuhammadi)


See also the list of [contributors](https://github.com/eminmuhammadi/noAPI/contributors) who participated in this project.
## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
