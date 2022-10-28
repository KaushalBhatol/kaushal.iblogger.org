# kaushal.iblogger.org | Blog Theme

## Purpose

* This site was my own project created for sharing ideas on the web and documenting my journey.
* I can also say that, This was my backup of code if anything happens to published code. Also version menagging and other amazing stuff helps me to improve my code and decrese bugs on my code.

## Q & A

* __Q. Why was this repository posted as a public?__
  *  I am not storing any sensitive information on this code, there are no ads and other databases are connected. this is pure code

* __Q. Can You customize this for your site?__
  * Yes, You can freely use my code for your site. I  also created [Theme](Theme/) folder were template files are stored. It Helpls you a lot.

* __Q. What skills I need for customize This?__
  * Not much more, You just need little html and php. don't affraid with php, Me to have a small knowledge of php. just take some time with my code many things are mentioned as commet. you just need to change that.

* __Q. Which platforms you used for testing this site?__
  * I used Safari on apple iphone 6, Chrome Browser on Samsung Galaxy M51, And firefox on Ubuntu Desktop. For viewport and responce cheackup.

## What is $root

* `$root` is variable which locate based directory from any child directory. this helps to connect other pages without changing links.
* `$root` for base url. use for go to base url for all links.
* `$root` needed on everything so define it wisely and surely. if you forget this your page gives many errors.

## How to Define `$root`:

* If you are in 'blog/' folder, root folder is one directory back from this folder.
* so we use `$root = '../';` for showing root directory.
* second example: you are in 'blog/linux/' folder. you need two back so `$root = '../../'; `.
