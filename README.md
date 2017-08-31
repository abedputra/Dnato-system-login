# CodeIgniter-ion-Auth-Login
Simple, Fast and Lightweight Auth System for CodeIgniter
<br>By <a href="http://abedputra.com">AbedPutra</a>

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

# Settings
- database.php<br>
`'hostname' => 'localhost', 'username' => '', 'password' => '', 'database' => '',`

- config.php<br>
`$config['base_url'] = 'http://adminweb.com/admin/';`<br><br>
Sent email from: <br>
`$config['register'] = 'admin@gmail.com';
`<br>
`$config['forgot'] = 'admin@gmail.com';
`<br>

- ReCAPTCHA.php (Library)<br>
`private $dataSitekey = ""; //Your SiteKey`<br>
`private $lang = "en";`<br>
`public $secret = ''; //Secret`<br>

# User Level
- is_admin<br>
- is_author<br>
- is_editor<br>
- is_subscriber<br>

# Install
- Clone or download<br>
- Import Sql file<br>
- Do Settings<br>
- Done<br>

# login
visit http://(your link).com/admin<br>
Pass : admin<br>
User : admin@gmail.com<br>

# Check User Level
controller.php<br>
`//check user level`<br>
`if(empty($data['role'])){`<br>
    `redirect(site_url().'main/login/');`<br>
`}`<br>
`$dataLevel = $this->userlevel->checkLevel($data['role']);`<br>
`//check user level`<br><br>

`if($dataLevel == "is_admin"){`<br>
  `(your code here)`<br>
`}`<br>

# LICENSE
The MIT License (MIT)<br>
Copyright (c) 2017, Abed Putra<br>
