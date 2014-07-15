# Larabook


Just following the tutorial of Jeffrey Way on Laracasts. Here is a quick reminder of the topics covered in the lessons.

## Disclaimer

This is just a project to help you if you are following along [Jeffrey Way](https://github.com/JeffreyWay)'s Larabook lessons on [Laracasts](http://laracasts.com). If you want to learn more about the concepts here and about the Laravel framework usage, please visit and subscribe to Laracasts (it is worth it!).

## Lessons summary

### 1. [The Virtual Machine](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/1)

To begin our new project, let's setup a virtual machine, using Vagrant and Laravel Homestead.

**Please note: I did not actually followed this lesson, so the projet in this repository may be a little bit different**

### 2. [Dependencies](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/2)

There are a number of dependencies that we'll need to pull in for this project. While even a few years ago, this might have been a pain, luckily that's no longer the case, thanks to Composer.

### 3. [Database Configuration and Sequel Pro](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/3)

In this lesson, let's get connected to our database, and then figure out how to access it from a GUI, like Sequel Pro.

**Please note: All `.env.*.php` files are of course not committed, please check the lesson to know how to create them.  **

### 4. [The Master Page](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/4)

Although we won't focus too much on design, naturally, we need something nice and simple to look at. So, let's begin that process by leveraging Twitter Bootstrap, and setting up our first master/layout page.

### 5. [Designing the Home Page](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/5)

This includes some basic design boilerplate work. Let's focus on the navbar and homepage in this episode.

### 6. [Gulp, Sass and Autoprefixing](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/6)

Let's put a system into place, that will automatically watch our Sass files for changes, compile them, and then autoprefix any relevant CSS3. We'll use the excellent Gulp tool to allow for this.

### 7. [Registration with BDD](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/7)

Naturally, before a user can begin posting status updates, they first need to register for Larabook. Let's use Codeception to help drive and test this process.

### 8. [Users](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/8)

In the previous lesson, we stopped just short of creating a migration for our users. Let's tackle that now, and return the tests to green.

### 9. [Registration Validation](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/9)

Of course, form validation is essential for any web app. Larabook is no different; so let's work on that in this episode.

### 10. [Thinking in Terms of Commands](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/10)

For larger applications that need to be maintained for years, it makes sense to take a step back, and think about architecture. Let's use commands to describe the various instructions that our app offers, as well as a command bus to manage the act of translating these commands into handler classes.

### 11. [Domain Events](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/11)

Because we've taken some time to structure our app in this manner, we now have a really simple way to queue and listen for domain events. Let me show you.

### 12. [Super Easy Flash Messaging](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/12)

How many times have you created the necessary views to display flash messages? Lots? Well, in this episode, I'll show you how we can tackle this very quickly.

### 13. [Feedback and Filters](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/13)

Right now, we can register a user; however, we still need to provide more feedback to signal that they are, in fact, logged in. Let's focus on that in this episode, along with a few other tidbits.

### 13. [Signing In](https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/14)

Now that a user can successfully register, we next need to give them a way to login and logout!