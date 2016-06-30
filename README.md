# Magento 2 Docker Reference #

### Description ###

A reference implementation of a Magento 2 Environment, containing the database, app server and Magento 2 runtime. This image can
be used locally for development and run on any environment that supports docker.

### Technology Stack ###

This project is structured in such a way as to allow locally developed Magento 2 components (extensions & themes) to be automatically run in a Magento 2 store. Magento 2 (and all dependencies upon which it requires), MariaDB and Nginx all run 
in docker containers, which are defined in the 'docker-compose.yml' file in the root of this repository. Both Docker-Compose and Docker are required in order to run this project locally.

It is highly recommended that engineers become acquainted with various supporting technologies. You can find more information here:

- Read more about [Docker](https://www.docker.com/tryit/) *(https://www.docker.com/tryit/)*
- Read more about [Docker Compose](https://docs.docker.com/compose/) *(https://docs.docker.com/compose/)*

### Developer Environment ###

Since docker is dependent on key components of the Linux kernel, it must be run on Linux. If a developer is already running Linux
natively, she needs only to [install docker on Linux](https://docs.docker.com/engine/installation/linux/ubuntulinux/) in order to run
the application locally. If, however, a developer is running on Windows or Mac, then she must run docker on a local VM or hypervisor.
 
It is suggest that developers install docker engine locally on Windows/OSX in order to support this requirement:

- Install [Docker for Windows](https://docs.docker.com/docker-for-windows/) *(https://docs.docker.com/docker-for-windows/)*
- Install [Docker for Mac](https://docs.docker.com/docker-for-mac/) *(https://docs.docker.com/docker-for-mac/)*

### Run the store ###

You can execute the following command locally to launch the store:

    $ ./store start

You can, then, access the store as follows:

- Storefront: http://localhost:9050/
- Admin Console: http://localhost:9050/admin
    - Default Admin 
        - Login: magentodev
        - Password: magentodev123
        
*NOTE:* The initial set up of the store may take a few minutes. To see the logs during the setup you can execute the following:

    $ docker logs -f magento2dockerreference_setup_1
        
### Additional Commands ###

Below is a list of commands to interact with the local Magento 2 application:
   
- Stop the db, magento store and app server

    `$ ./store stop`

- Restart the db, magento store and app server

    `$ ./store restart`
    
- Tail the nginx server logs:

    `$ ./store appserver-logs`
    
- Tail the magento debug logs:

    `$ ./store debug-logs`
    
- Tail the magento system logs:

    `$ ./store system-logs`
  
- SSH into the magento store container:

    `$ ./store ssh`
    
- Execute a magento cli command. All commands are supported and the following
  exemplifies a full flush of the magento cache:

    `$ ./store magento cache:flush`

- Run the magento setup:upgrade and cache:flush commands; a common combination what
  applying changes to extensions and templates

    `$ ./store clean`

