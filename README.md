# What is Dnato System Login?
Manage member user and login System for CodeIgniter, it's very small and very fast login system, :+1: with bootstrap 3
<br>Created By me <a href="http://abedputra.com">AbedPutra</a>

# Feature
- Add user
- Delete user
- Ban, Unban user
- Register new user sent to email token
- Forget password
- Role user level
- Edit user profile
- Gravatar user profile
- Recaptcha by Google
- Compress HTML Settings for more speed

# Settings
- database.php
```
'hostname' => 'localhost', 'username' => '', 'password' => '', 'database' => '',
```

- config.php
```
//Link URL
$config['base_url'] = 'http://adminweb.com/admin/';
// Sent email from:
$config['register'] = 'admin@gmail.com';
$config['forgot'] = 'admin@gmail.com';
```

- ReCAPTCHA.php (Library)<br>
```
private $dataSitekey = ""; //Your SiteKey`
private $lang = "en"; //Lang ReCAPTCHA
public $secret = ''; //Secret
```

# User Level
- is_admin
- is_author
- is_editor
- is_subscriber

# Install
- Clone or download
- Import Sql file
- Do Settings
- Done

# login
- Pass : admin
- User : admin@gmail.com

# Check User Level
controller.php
```
//check user level
if(empty($data['role'])){
    redirect(site_url().'main/login/');
}
$dataLevel = $this->userlevel->checkLevel($data['role']);
//check user level

if($dataLevel == "is_admin"){
  (your code here)
}
```

# About
Dnato System Login is based frontend on the Bootstrap framework created by <a href="https://twitter.com/mdo">Mark Otto</a> and <a href="https://twitter.com/fat">Jacob Thorton.</a> 
Password hashing with PBKDF2, Author: <a href="https://github.com/defuse">havoc AT defuse.ca.</a> 
Ported to CodeIgniter by <a href="http://twitter.com/RichardThornton">Richard Thornton</a>. 
CodeIgniter Curl Libraries by <a href="https://github.com/philsturgeon/codeigniter-curl">Philip Sturgeon.</a> 

# LICENSE
The MIT License (MIT).

Copyright (c) 2017, Abed Putra. 
 
Please feel free to send me an email if you have any problems. 
Thank you so much, my email : abedputra@gmail.com.
