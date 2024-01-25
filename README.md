# Savvy API SDK for Laravel 

[![Build Status](https://github.com/savvy-software/savvy-laravel/actions/workflows/tests.yml/badge.svg)](https://github.com/savvy-software/savvy-laravel)

This library helps with integrating Savvy into Laravel applications.

## Installation

This library can be installed via [Composer](https://getcomposer.org):

```bash
composer require savvy-software/savvy-laravel
```

## Configuration

The only required configuration is the Environment Token. You can get your Environment Token via the [Project settings](https://app.havesavvy.com/admin/projects) in your Savvy account.

Configuration values can be set when creating a new API client or via environment variables. The environment takes precedence over values provided during the initialization process.

**Configuration via environment variables**

```bash
SAVVY_ENVIRONMENT_TOKEN=tok-sample
```

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/savvy-software/savvy-php. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.

## License

The library is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).

## Code of Conduct

Everyone interacting in the Savvy Software’s code bases, issue trackers, chat rooms and mailing lists is expected to follow the [code of conduct](https://github.com/savvy-software/savvy-php/blob/master/CODE_OF_CONDUCT.md).

## What is Savvy?

[Savvy](https://havesavvy.com/) allows you to control which features and settings are enabled in your application giving you better flexibility to deploy code and release features.

Savvy Software was started in 2023 as an alternative to highly complex feature flag tools. Learn more [about us](https://havesavvy.com/).
