## use mysql database in .env

## Event Management System 
The Event Management System is designed to facilitate the creation and management of events, categories, and attendees.

## Creating the models (  Events, Category, Attendee  )

- first create the Category model followed by the Event and Attendee
 ### Category Model
 - contains name of the model
 - has Many relation with the events i.e ($this->hasMany(Event::class))

### Event Model
- contains many fillable fields
- has many relation with the attendee i.e($this->hasMany(Attendee::class))
- has a single relation with category i.e($this->belongsTo(Category::class))

### Attendee Model
- contains fillable fields
- has single relationship with the events i.e($this->belongsTo(Event::class))

## created the controller
- Three controller were created i.e AttendeeController, CategoryController, EventController
- All of these contained the CRUD operations functions as below
###
- index() function is used for overall content
- create() funtion is used for providing the form for data collection from the users
- store() function is used for storing the input data by users to the related database
- show() function is used to show the particular data as provided by the id 
- edit() function is used to show the form for editing the data
- update() function is used to upate the data as per the request and id
- destroy() function is used to delete the data as selected by the id 

## create the migration file
- At first the Category migration file is created then only 
- Event migration file should be created
- Finally Attendee migration file is created

## Routing
- Web.php file contains all the routes 
- Each route is dedicated to the particular single function of Controller
- There are total 3 types of route i.e
### EventRoutes -> For routing the Events related routes
### CategoryRoutes -> For routing the Category related routes
### AttendeeRoutes -> For routing the Attendee related routes

### Workflow
Visit the base URL to access the application:
- http://127.0.0.1:8000

Redirect to the events page:
- http://127.0.0.1:8000/events

Redirect to the categories page:
- http://127.0.0.1:8000/categories

### Workflow Steps
## 1) Create a Category: Before creating events, create at least one category.
## 2) Create an Event: After creating a category, create an event by selecting the appropriate category.
## 3) Create an Attendee: Finally, create attendees for the created events.
