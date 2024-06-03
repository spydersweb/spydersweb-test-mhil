# Must Have Ideas Ltd - Demo App

A very basic demonstation app using CakePHP to create a list of albums with simple CRUD operations.  For this demonstation the app_local.php file has been deployed to version control which otherwise would not be included.

# Setup
We are using a local version of MySql running on port 3306 and so no configuration is required other than to setup a new user and grant the privileges on the newly created schema and tables.

On your local MySql server run these sql scripts in order to create the basic database tables and app user:
- db/database.sql
- db/app_user.sql

# Running the App
For demo purposes we are using CakePHP's built in webserver to save on setup.  

Start the server from the command line:

```bash
bin/cake server
```

Once the server is up, the app will be available at the default location however as I haven't overridden this you will need to navigagte to
`http://localhost:8765/albums` to see the initial album list.

# App screenshots

### List View
![image](https://github.com/spydersweb/spydersweb-test-mhil/assets/52936208/bc9b66a6-6831-43db-9a85-5c61b3e4daae)

### Add an album
![image](https://github.com/spydersweb/spydersweb-test-mhil/assets/52936208/8e9a3816-43ed-416b-97a6-f47f7ac5524b)

### Edit an album
![image](https://github.com/spydersweb/spydersweb-test-mhil/assets/52936208/5d5f6fe4-9be6-4f3f-877a-6d6e22b7cb64)

### Delete an album with confirmation
![image](https://github.com/spydersweb/spydersweb-test-mhil/assets/52936208/bc4ac29d-3026-4323-9f6c-cd5283ca6e86)

![image](https://github.com/spydersweb/spydersweb-test-mhil/assets/52936208/c3d735bb-9f8f-4633-9615-de3b9f9b94d8)

# JUST FOR FUN!!
I've also added a Postman collection to get the albums list as a json object.

Whilst this was a fun little endeavour the main reasoning is based in CakePHP's need for the Request/Response model. However integrating with a frontend framework in Vue or React would mean an SPA could be written as a single view and the rest of the interactions could be handled as HTTP requests to the API, leading to a better user experience. 

![image](https://github.com/spydersweb/spydersweb-test-mhil/assets/52936208/2b0f9350-78c4-4b29-ac02-f1502720b1bc)

