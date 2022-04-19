![](/public/images/logo_name.svg)

# Bizz.Net - Interactive Media Specialist Thesis Project

With this application I have created a Business Marketplace where businesses can come online and create a profile and create a listing for their business.


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Prerequisites

You must have docker installed locally to run this version of Bizz Net. Don't have it? Click [HERE]()https://docs.docker.com/get-docker/ to download the latest version!

### Installing

You will need to copy and paste the following into a local terminal, in order to run the website:

```
$ git clone https://github.com/grahamvickers/bizz.net
```
now run this command.

### Deployment 

Now in the terminal again, run the following command 
```
$ cd bizz.net
```
now, this command to create the database
```
$ docker-compose run artisan migrate
```
now, this command to populate the database
```
$ docker-compose run artisan db:seed
```
now the run final command below to deploy the application
```
$ docker-compose up
```

You can now go to [localhost:8082](https://localhost:8082) in a web broswer of your choice to browse, register and you too can list your business for sale. 

## Built With

* HTML5 - Layout
* CSS3 - Styling
* SASS - CSS Compiler
* Vue.js - Javascript Framework
* JaveScript - Front-end enhancments
* Laravel - PHP  
* Ajax - Json data 
* GitHub - Version control
* Docker - Local Remote server


## Browser Capability 

* Chrome - 100%
* Firefox - 100%
* Safari - 100%
* IE - Unknown

## Authors

* **Graham Vickers** - *Design & Build* - [Fanshawe College](https://github.com/grahamvickers)

## Acknowledgments

* Thanks to Marco, Tina, John and Rob for guiding and teaching me the necessary tools to complete my project.

