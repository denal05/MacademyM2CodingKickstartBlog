# M.academy M2 Coding Kickstart Blog
A Magento 2 module built as an exercise for the M.academy [Magento 2 Coding Kickstart](https://m.academy/courses/magento-2-coding-kickstart/) course and [Transform Magento 2 Admin Grids & Forms](https://m.academy/courses/transform-magento-2-admin-grids-forms/) course by [Mark Shust](https://github.com/markshust/).   

The associated module with plugins for this module is the [https://github.
com/denal05/MacademyM2CodingKickstartBlogExtra](https://github.com/denal05/MacademyM2CodingKickstartBlogExtra)   

The original source code for the modules of the above courses can be found at the following links:   
[https://github.com/macademy/magento-2-coding-kickstart](https://github.com/macademy/magento-2-coding-kickstart)   
[https://github.com/macademy/magento-2-coding-kickstart-extra](https://github.com/macademy/magento-2-coding-kickstart-extra)   
[https://github.com/macademy/build-admin-grid-ui-components](https://github.com/macademy/build-admin-grid-ui-components)   

---

### M.academy's "M2 Coding Kickstart" Course Curriculum:

#### Introduction
Welcome! Prerequisites, focus & outcome  

#### Application & Environment Setup
Directory structure of a Magento project  
All about Magento application modes  
Enabling developer mode for Magento development  
Set up Composer auth credentials for the Magento Marketplace  
Install & deploy Magento sample data  
About the Magento config, environment & version control  
Set up additional Magento development tools  

#### Caching
Enabling & disabling cache types in Magento  
Cleaning & flushing Magento caches  
Enable automatic Magento cache clearing for development  

#### Module Basics
Magento local module directory naming conventions  
Magento third-party module directory naming conventions  
Magento module registration file  
Magento module definition file  
Enable a Magento module  
Exercise: Create your own custom Magento module  
Exercise: Install a third-party Magento module  
Create a composer.json file for your module  

#### Routing
Built-in Magento routers  
The anatomy of a Magento URL  
Define a new custom route in Magento  
Create a controller action in Magento  
Exercise: Create a controller action for the blog post detail view   
Reserved keywords in Magento controller actions  

#### Dependency Injection
Dependency injection & Magento’s Object Manager  
Why the new keyword can’t be used to create objects in Magento  
Create a new object in Magento using Object Manager  
Create an object with dependency injection using a singleton  
About generated code in Magento  
How Magento maps interface implementations with XML  

#### Interfaces & Factories
What are service contracts?  
Create an object with dependency injection using an interface  
Create an object with dependency injection using a factory  
Exercise: Create a page response for the blog post list view  
Redirect a Magento controller action with a factory  
Forward a Magento controller action with a factory  

#### Views
Magento page layouts & containers  
Magento core layouts & blocks  
Custom Magento layout handles  
Create a custom layout XML file  
Create a new template file in Magento  
Display a Magento template in a block  
Challenge: Create a template & render it in a block with layout XML  
Review: Create a template & render it in a block with layout XML  
Change the page layout of a Magento view  
Locate block templates in Magento  
Locate block nodes in Magento layout XML files  
Exercise: Locate a template & related block node in layout XML  
Move Magento blocks on a page  
Remove or control the display of a Magento block  
Override & translate Magento template text with i18n  
Override an existing Magento block template  
Render & wrap Magento children blocks with containers  
Exercise: Magento module cleanup  
Update templates with placeholder data  

#### Database Models
About Magento’s declarative schema  
Create a new database table  
Automatically remove database properties on updates  
Magento Model vs ResourceModel vs Collection  
Create a model  
Create a resource model  
Create a collection  

#### Repositories & Data Interfaces
What is a service contract?  
Create a data transfer object (DTO) interface  
Update a model to implement a DTO interface  
Define a model preference for a DTO interface  
Create a repository interface  
Create a repository  

#### Saving & Querying Data
Load data with a resource model  
Save data with a resource model  
Delete data with a resource model  
Write a setup patch data script  
Save data using a repository  
Execute setup patch data scripts  
Exercise: Write another setup data patch script  
Create a ViewModel  
Pass data to a template using a ViewModel  
Exercise: Create a new function within a ViewModel  
Load data using a collection  
Load data using a repository  
Escape template data to prevent XSS security vulnerabilities  
Expose a REST API endpoint using a repository  

#### Design Patterns
Create and dispatch an event  
Listen to an event with an observer  
What is a plugin or interceptor?  
Use a before plugin to modify function parameters  
Use an after plugin to modify the result of a function  
Use an around plugin to silence a function  
Override a class using a preference  

#### Conclusion
Downloadable archive of the FAQ module   
Course feedback & certificate for the M2 Coding Kickstart course   

---

### M.academy's "Transform Magento 2 Admin Grids & Forms" Course Curriculum:

#### Admin Grids
Overview & expectations of the FAQ module   
Prep environment for admin grid development   
Create the module & define dependencies   
Create admin user resource permissions   
Create admin menu items   
Create an admin route   
Create an admin controller   
Set an admin page menu & title   
Create a model, resource model & collection   
Create a new database table with columns   
Populate a database table with data   
Create a virtual class for the grid collection   
Create the simplest admin grid   
Exercise: Add additional columns to an admin grid   
Implement an alternate component for an admin grid column   
Create an admin grid actions column   
Exercise: Transform the admin actions column into a dropdown   
Create an admin edit controller action   
Create an admin delete controller action   
Exercise: Add confirmation dialog to an admin grid delete action   
Make an entire admin grid row into a clickable action   
Add paging, column toggles & stickiness to the admin grid   
Add bookmarks to the admin grid & diagnose caching issues   
Exercise: Sort an admin grid by a column value   
Add filters to an admin grid   
Set default filters on an admin grid   
Add a fulltext search box to an admin grid   
Add a primary action button to an admin grid   
Create an admin controller for adding new records   
Set up the UI for admin grid inline editing   
Create an admin grid inline edit controller action   
Set up the UI for an admin grid mass action delete   
Handle an admin grid mass action delete submission   

#### Admin Forms
Create a UI Component DataProvider class in PHP   
Render the admin form UI Component with page layout XML   
Create the structure of an admin form UI Component   
UI Component templates & definitions   
Define the UI Component namespace & data scope with settings   
Define a UI Component Data Provider using dataSource   
Define the data source as a dependency to the UI Component   
Render a fieldset and text form inputs   
Create & render select dropdown form fields   
Create a save button for an admin form UI Component   
Create an admin form save action with pseudo code   
Implement the admin form save action logic   
Create a back button to cancel an admin form submission   
Creating admin form validation rules   

#### Conclusion
Downloadable archive of the FAQ module   
Course feedback & certificate for the Admin Grids & Forms course   

## To Do
1. // TODO: Utilize the admin > Stores > Config > Denal05 > "M.academy M2 Coding Kickstart Blog" menu to enable/disable the frontend and admin functionality of the module. 
