# kaushal.iblogger.org | Blog Theme

## Purpose

* This site is created for blogging and sharing informations over the web.

## Q & A

* __Q. Why you need this?__
  * I'm simple guy and love's shortcuts too, Before doing this I used wordpress, But my site going slow down. And I don't want to purchace anything. So used my some of knowledge and created pure php without database site.

* __Q. Can I customize this for my site?__
  * Yes, You can freely use my code for your site. I  also created [Theme](Theme/) foler were startup files are stored. It Helpls you lot.

* __Q. What skills I need for customize This?__
  * Not much more, You just need little html and php. don't affraid with php, Me to have a small knowledge of php. just take some time with my code many things are mentioned as commet. you just need to change that.

* __Q. Which platforms you used for testing this site?__
  * I used Safari on apple iphone 6, Chrome Browser on Samsung Galaxy M51, And firefox on Ubuntu Desktop. For viewport and responce cheackup.

## $root

* `$root` for base url. use for go to base url for all links.
* `$root` needed on everything so define it wisely and surely. if you forget this your page gives many errors.

How to Define `$root`:

* If you are in 'blog/' folder, root folder is one back away from this folder.
* so we use `$root = '../';` for showing root directory.
* second example: you are in 'blog/linux/' folder. you need two back so `$root = '../../'; `.
