# Must Have Ideas Ltd - Demo App

A very basic demonstation app using CakePHP as a backend API to store and interact with a local db instance.

The basic premis is a single page app in React will send commands to the API and update the database

# Setup
We are using a local version of MySql running on port 3306 and so no configuration is required other than
to setup a new user and grant the privileges.

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
`http://localhost:8765` to see the welcome page.
