
![Logo](https://www.sketchappsources.com/resources/source-image/social-login.png)


# Multi Auth Login

Multi social login system is a popular type of multi-authentication method used in web applications, mobile applications, and other software systems. This system allows users to authenticate themselves using their social media accounts such as Facebook, Twitter, Google, LinkedIn, and others, instead of creating a separate login account for each application they use.

Multi social login simplifies the login process by allowing users to use their social media accounts to authenticate. This feature benefits users with faster login times, increased engagement, and personalized experiences. However, privacy concerns must be addressed by properly securing user data and informing them of how their information will be used. Overall, multi social login is a valuable authentication method that prioritizes user convenience while providing valuable data for website owners.


### Deployment - Run Locally

Clone the project ( PHP version must be 8.1+ and Try to use [Powershell](https://learn.microsoft.com/en-us/powershell/) )
```bash
git clone https://github.com/devrabiul/MultiAuth.git
```

Go to the project directory

```bash
cd MultiAuth
```

```bash
copy .env.example .env
```

```bash
php artisan key:generate
```

```bash
composer update
```

```bash
php artisan migrate
```


### Authentication

- Authentication With Google
- Authentication With Facebook
- Authentication With Twitter
- Authentication With Github
- Authentication With Linkedin
- Authentication With Pinterest
- Authentication With Business Mail
- Verify With Mail
- Verify With SMS


### Package Lsit

**Auth Package:** Laravel ui, Laravel Socialite.

**Package:** Laravel Debugbar, Intervention Image.


## Authors

- [@rixetbd](https://www.github.com/rixetbd)
- [@devrabiul](https://www.github.com/devrabiul)


### License

This Authentication system is open-sourced software licensed under the [MIT license.](https://choosealicense.com/licenses/mit/)

