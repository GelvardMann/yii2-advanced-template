Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/)




DIRECTORY STRUCTURE
-------------------

```
    common
        config/              contains shared configurations
        mail/                contains view files for e-mails
        modules/             contains modules
            main/            contains main module
            user/            contains user modules
        models/              contains model classes used in both backend and frontend
        tests/               contains tests for common classes    
    console
        config/              contains console configurations
        controllers/         contains console controllers (commands)
        migrations/          contains database migrations
        models/              contains console-specific model classes
        runtime/             contains files generated during runtime
    backend
        assets/              contains application assets such as JavaScript and CSS
        config/              contains backend configurations
        controllers/         contains Web controller classes
        models/              contains backend-specific model classes
        runtime/             contains files generated during runtime
        tests/               contains tests for backend application    
        views/               contains view files for the Web application
    frontend
        assets/              contains application assets such as JavaScript and CSS
        config/              contains frontend configurations
        controllers/         contains Web controller classes
        models/              contains frontend-specific model classes
        runtime/             contains files generated during runtime
        tests/               contains tests for frontend application
        views/               contains view files for the Web application
        widgets/             contains frontend widgets
    vendor/                  contains dependent 3rd-party packages
    environments/            contains environment-based overrides
```