# What is Dnato System Login?
Manage member user & login System for CodeIgniter. It's very small, secure (with notification to review activity log in, will Sent via Your Email) and very fast login system, :+1: with bootstrap 3 & Custom Theme.

Created By me [Abed Putra](http://abedputra.com)

# Screenshot
<img width="100%" alt="Dnato System Login" src="https://user-images.githubusercontent.com/11581453/33157448-1e060436-d03d-11e7-9cf0-aeb408316c12.png">

<img width="100%" alt="screen shot 2017-11-23 at 11 00 27" src="https://user-images.githubusercontent.com/11581453/33157515-913822ea-d03d-11e7-89a6-cc5395a37800.png">

# Features
- Add user
- Delete user
- Ban, Unban user
- Register new user sent to email token
- Forget password
- Role user level
- Edit user profile
- Gravatar user profile
- Recaptcha by Google
- Compress HTML Settings, for more speed
- Secure Account (Notification to Review Activity Log In, Will Sent via Email like Google) :new: :tada:
- Active or Inactive Recaptcha :new:
- Add Settings :new:
- Add Theme :new: :tada:

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
Dnato System Login is based on the [codeigniter](https://github.com/bcit-ci/CodeIgniter). Dnato System Login is based frontend on the Bootstrap framework created by  [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).
Password hashing with PBKDF2, Author: [havoc AT defuse.ca](https://github.com/defuse).
Ported to CodeIgniter by [Richard Thornton](http://twitter.com/RichardThornton). 
CodeIgniter Curl Libraries by [Philip Sturgeon](https://github.com/philsturgeon).
Theme by [Bootswatch](https://github.com/thomaspark/bootswatch).

# Support me
Support me at <a href="https://www.patreon.com/abedputra">Patron</a>

# LICENSE
The MIT License (MIT).

Copyright (c) 2017, Abed Putra. 
 
Please feel free to send me an email if you have any problems. 
Thank you so much, my email : abedputra@gmail.com.
