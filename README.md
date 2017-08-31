<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Application Template with Fixed Bower

[![Latest Stable Version](https://poser.pugx.org/yidas/yii2-app-advanced/v/stable?format=flat-square)](https://packagist.org/packages/yidas/yii2-app-advanced)
[![Latest Unstable Version](https://poser.pugx.org/yidas/yii2-app-advanced/v/unstable?format=flat-square)](https://packagist.org/packages/yidas/yii2-app-advanced)
[![License](https://poser.pugx.org/yidas/yii2-app-advanced/license?format=flat-square)](https://packagist.org/packages/yidas/yii2-app-advanced)

Let you use pure Composer to install or update Yii2 smoothly, no Bower issue anymore. 

---

INTRODUCTION
------------

This template is Fixed Bower version of [Yii 2](http://www.yiiframework.com/) advanced application, which required [yidas/yii2-bower-asset](https://github.com/yidas/yii2-bower-asset) for updating composer with Bower asset.

In this template, Bower packages are fixed for current version relating to Yii2 core, so you need to manually update Bower-Asset when needed.

---

INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

```
composer create-project --prefer-dist yidas/yii2-app-advanced
```

Also, you can make a minimal installation without development tool:
```
composer create-project --prefer-dist --no-dev yidas/yii2-app-advanced
```

> With --no-dev project, set to prod-env or remove the debug & gii usage from `config/web.php` to prevent error.

---

### Install from an Archive File

[Download yii2-app-advanced-2.0.12 Archive](https://github.com/yidas/yii2-app-advanced/releases/download/2.0.12/yii2-app-advanced-2.0.12.tar.gz)

Extract the downloaded file to a  Web-accessible folder, which includes vendor already.

---

DOCUMENTATION
-------------

Please refer to [Yii 2 Advanced Project Template Document](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/README.md)
