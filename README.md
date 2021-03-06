DevelopTech Agility Bundle
==========================

[![Latest Stable Version](https://poser.pugx.org/developtech/agility-bundle/v/stable)](https://packagist.org/packages/developtech/agility-bundle)
[![Total Downloads](https://poser.pugx.org/developtech/agility-bundle/downloads)](https://packagist.org/packages/developtech/agility-bundle)
[![Build Status](https://scrutinizer-ci.com/g/DevelopTech/AgilityBundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/DevelopTech/AgilityBundle/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/DevelopTech/AgilityBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/DevelopTech/AgilityBundle/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DevelopTech/AgilityBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DevelopTech/AgilityBundle/?branch=master)
[![License](https://poser.pugx.org/developtech/agility-bundle/license)](https://packagist.org/packages/developtech/agility-bundle)

Introduction
------------

This Symfony bundle is meant to implement a full project-management tool inside your application.

It contains all the needed features to manage a project, with its user stories, its tasks, its sprints, its feedbacks...

This tool is designed to handle Agile projects. It is meant for scrum masters, product owners and of course developers.

The purpose of this project is to make easier the usage of Agile ways in a project, and to help end-users to receive feedbacks from their final users.

It is designed to handle beta tests, sprints, engagements, costings and whatever part of the Agile way of work.

Install
-------

As any Symfony bundle, you can install this one using composer :

```
composer require developtech/agility-bundle
```

Then, just enable the bundle in your AppKernel file.

```php
<?php
class AppKernel extends Kernel {
    public function registerBundles() {
        $bundles = [
            // ...
            new Developtech\AgilityBundle\DeveloptechAgilityBundle()
        ];
    }
}
```

Some of the bundle entities must be mapped to your user class.

That's why you must set your user class as a bundle configuration.

Let's begin with some configuration :

```yaml
# app/config/config.yml
developtech_agility:
    user_class: AppBundle\Entity\User
```

Now you're done, you can use it the way you want !

Documentation
-------------

* [Projects](Resources/doc/projects.md)
* [Features (User stories)](Resources/doc/features.md)
* [Feedbacks](Resources/doc/feedbacks.md)
