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
