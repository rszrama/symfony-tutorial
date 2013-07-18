symfony-tutorial
================

A repository with the code for Fabien Potencier's Symfony2 Framework tutorial.

This repository uses a new branch for each part of the
[tutorial](http://fabien.potencier.org/article/50/create-your-own-framework-on-top-of-the-symfony2-components-part-1).

As you read through the tutorial, simply "git checkout part-X" where X is the
part you are reading to access the code for that part of the tutorial. Note that
you must use composer install in part-1 (or whichever branch you start on) to
download the required Symfony2 components and use composer update in each
successive tutorial to download new dependencies as they're added.

To see how the code changes between tutorials, checkout the next part of the
tutorial and use "git diff part-X" where X is the number of the previous part.

For help getting started with Composer, refer to its [getting started page](http://getcomposer.org/doc/00-intro.md).
