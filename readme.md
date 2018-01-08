# data-collection-tool
Open source project to teach Ugandan local languages.

[![CircleCI](https://circleci.com/gh/street-lights/data-collection-tool.svg?style=svg)](https://circleci.com/gh/street-lights/data-collection-tool)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.0.0-8892BF.svg?style=flat-square)](https://php.net/)

# Getting Started 

* supported programming languages
	- [Laravel Framework](https://laravel.com/docs/5.5)
	- [Vue](https://vuejs.org)

* Setup 
	- Clone this repo to your local machine
	- Create a new file in the root directroy and name it `.env` then copy the contents of `.env.example` to the newly created file. 
	- Run the command `php artisan key:generate` to get a new unique key
	- Create a new database and name it `datagrip`. Once this is done and u've made the necessary changes to your `.env` file (if at all you need to add the database password and user) then you can run `php artisan migrate --seed` to scafold the necessary tables and create sample data to work with. 


## Contributing

The contribution guide can be found in the [Wiki](https://github.com/street-lights/data-collection-tool/wiki).
