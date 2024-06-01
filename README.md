# Must Have Ideas Ltd - Demo App

A very basic demonstation app using CakePHP to create a list of albums with simple CRUD operations.  For this demonstations the app_local.php file has been deployed to version control which otherwise would not be included.

# Setup
We are using a local version of MySql running on port 3306 and so no configuration is required other than to setup a new user and grant the privileges on the newly created schema and tables.

On your local server run these sql scripts in order:
- database.sql
- app_user.sql

# Running the App
For demo purposes we are using CakePHP built in webserver to save on setup.  

Start the server from the command line:

```bash
bin/cake server
```

Which will run up the server and make the app available at 
`http://localhost:8765/albums` to see the initial album list.
