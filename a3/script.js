// Constructor function for Person objects
function bookingInfo(id, day, hour) {
  this.movieTitle = id;
  this.day = day;
  this.hour = hour;
}

// Create a Person object
var myFather = new bookingInfo("John", "Doe", 50, "blue");

// Display age
document.getElementById("demo").innerHTML = bookingInfo.id +"-"+ bookingInfo.day +"-"+ bookingInfo.hour;