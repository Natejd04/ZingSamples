# Zamples Store Locator

Store locator that is using the google maps API.

### Example
Current working example can be found at the following site.

[Zing Bar Samples - Store Locator](https://zingbarsamples.com/locator/zingbarscom-plugin/locator.html)

### Current Usage
Simply call the jquery map script.
```
<script src="js/jquery.storelocator.js"></script>
```

### Requirements
* [jQuery]
* [Handlebars.js] - Only being used for simplicity.
* [mySQL] - All stores are being stored in mysql database.

### Code
Please review the code included in the following ```locator.html``` and then look at ```css\map.css``` for the styling properties.


The store locator is currently fetching all the data, which you can see as it's encoded into JSON. Feel free to look at the database structure in your developer console. 
One thing you will note is that I am not passing a parameter and fetching all the data, which takes *way too long* to load. This would need to be revised so it's more efficent. 
Ideally though all that needs to be done is simply including this inside the new website, adjusting the styling properties in the CSS and making the load time more efficent by passing a paremeter.


  
