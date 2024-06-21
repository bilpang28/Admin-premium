### STACK RAILS THEME
The StackDash admin theme features over 35+ apps & pages built using various html components. All the components in this dashboard theme can be customized through their HTML, SASS and JS source files.

## INSTALATION

1. Copy all files and folders from the /app to your rails app/ folder
2. Update your Rails Application's package.json with the dependencies listed in package.json
3. Run "npm install" to install all dependencies.
4. Add in config/routes.rb: get 'stack/:page' => 'stack#show', as: 'stack'
5. Rename application.css to .scss and remove require_tree and require_self
5. Include scss applciation.scss "@import 'stack/application';"
6. Make sure you have root_path in routes.rb
7. Add "//= link application.js" to app/assets/config/manifest.js (Rails 5+)
8. Done.

## FEATURES

* Bootstrap 4.3.1 framework
* 3x dashboards
* Complete UI packs
* Calendar App with drag & drop events
* Drag and Drop component
* Vector Map components
* Projects, Trello (drag & drop), Chat & Calendar Apps
* Customized Line, Bar, Area & Donut Charts
* 100+ ui components
* Fully responsive
* LTR & RTL alignment
* Valid html