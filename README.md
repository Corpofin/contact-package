 
# Contact Us Form Package



[![Issues](https://img.shields.io/github/issues/angeldelacruzs/contact-package.svg?style=flat-square)](https://github.com/angeldelacruzs/contact-package/issues) [![Stars](	https://img.shields.io/github/stars/angeldelacruzs/contact-package.svg?style=flat-square)](https://github.com/angeldelacruzs/contact-package/stargazers)



## This will send email to admin and save contact query in database


### Installation

```sh
$ composer require gbcsoft/contact
``` 
First Step: 

Register ServiceProvider  in: 

```
confing/app.php
```

```
 'providers' => [
     Gbcsoft\Contact\ContactServiceProvider::class,
]
```


Second Step: 

If you need personalized message form, execute this command.

```
php artisan vendor:publish

```

Look your directory: 

```
[Myapp]/resource/views/vendor/

 ```

Configure your email from:

```
app/contact.php

```

License
----

MIT


**Free Software, Hell Yeah!**