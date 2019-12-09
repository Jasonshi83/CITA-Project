// clickListener();
//
// // for(var i=0; i<document.getElementsByClassName("category-mode").length; i++){
// //   document.getElementsByClassName("category-mode")[i].addEventListener("click", test);
// // }
// //
// // function test(){
// //     document.getElementById("demo").innerHTML = "Clicked"+document.getElementsByClassName("vc-title")[3].textContent;
// //     clickListener();
// // }
//
// function clickListener(){
//   for(var i=0; i<document.getElementsByClassName("sub-category-mode").length; i++){
//     document.getElementsByClassName("sub-category-mode")[i].addEventListener("click", displayDate);
//     document.getElementsByClassName("sub-category-mode")[i].attributes.value = 1;
//   }
// }
//
// function displayDate() {
//   // document.getElementById("demo").innerHTML = "Hello World";
//   for(var i=0; i<document.getElementsByClassName("sub-category-mode").length; i++){
//     if(document.getElementsByClassName("sub-category-mode")[i].attributes[1].value == 0){
//       document.getElementsByClassName("sub-category-mode")[i].style.backgroundColor = "red";
//       // document.getElementById("demo").innerHTML = document.getElementsByClassName("vc-day-content")[i].attributes[2].nodeValue;
//       // document.getElementById("good").innerHTML = document.getElementsByClassName("vc-day-content")[i].attributes[2].nodeValue;
//       // window.location.href= "index.php?eid="+ document.getElementsByClassName("vc-day-content")[i].attributes[2].nodeValue;
//       // document.cookie="profile_viewer_eid="+ document.getElementsByClassName("vc-day-content")[i].attributes[2].nodeValue;
//       // showHint(document.getElementsByClassName("vc-day-content")[i].attributes[2].nodeValue);
//     }
//   }
// }

function myFunction(category) {

  document.getElementsByClassName("user-name")[0].textContent = category;


  // if(category == "myevents"){
  //   document.getElementsByClassName("sub-category-mode")[0].style.backgroundColor = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[1].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[2].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[3].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[4].style.backgroundColor = "white";
  //   document.getElementsByClassName("category-desc")[0].style.color = "white";
  //   document.getElementsByClassName("category-desc")[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[2].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[3].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[4].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[0].childNodes[1].style.color = "white";
  //   document.getElementsByClassName("sub-category-mode")[1].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[2].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[3].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[4].childNodes[1].style.color = "#6cc9e0";
  // }
  // else if(category == "coffee"){
  //   document.getElementsByClassName("sub-category-mode")[0].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[1].style.backgroundColor = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[2].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[3].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[4].style.backgroundColor = "white";
  //   document.getElementsByClassName("category-desc")[0].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[1].style.color = "white";
  //   document.getElementsByClassName("category-desc")[2].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[3].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[4].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[0].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[1].childNodes[1].style.color = "white";
  //   document.getElementsByClassName("sub-category-mode")[2].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[3].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[4].childNodes[1].style.color = "#6cc9e0";
  // }
  // else if(category == "meetup"){
  //   document.getElementsByClassName("sub-category-mode")[0].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[1].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[2].style.backgroundColor = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[3].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[4].style.backgroundColor = "white";
  //   document.getElementsByClassName("category-desc")[0].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[2].style.color = "white";
  //   document.getElementsByClassName("category-desc")[3].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[4].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[0].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[1].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[2].childNodes[1].style.color = "white";
  //   document.getElementsByClassName("sub-category-mode")[3].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[4].childNodes[1].style.color = "#6cc9e0";
  // }
  // else if(category == "training"){
  //   document.getElementsByClassName("sub-category-mode")[0].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[1].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[2].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[3].style.backgroundColor = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[4].style.backgroundColor = "white";
  //   document.getElementsByClassName("category-desc")[0].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[2].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[3].style.color = "white";
  //   document.getElementsByClassName("category-desc")[4].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[0].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[1].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[2].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[3].childNodes[1].style.color = "white";
  //   document.getElementsByClassName("sub-category-mode")[4].childNodes[1].style.color = "#6cc9e0";
  // }
  // else if(category == "techsummit"){
  //   document.getElementsByClassName("sub-category-mode")[0].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[1].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[2].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[3].style.backgroundColor = "white";
  //   document.getElementsByClassName("sub-category-mode")[4].style.backgroundColor = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[0].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[2].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[3].style.color = "#6cc9e0";
  //   document.getElementsByClassName("category-desc")[4].style.color = "white";
  //   document.getElementsByClassName("sub-category-mode")[0].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[1].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[2].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[3].childNodes[1].style.color = "#6cc9e0";
  //   document.getElementsByClassName("sub-category-mode")[4].childNodes[1].style.color = "white";
  // }
    // document.getElementsByClassName("sub-category-mode")[0].style.backgroundColor = "red";
}


// var elementIsClicked = false; // declare the variable that tracks the state
// function clickHandler(){ // declare a function that updates the state
//   elementIsClicked = true;
// }
//
// var element = getElementsByClassName("sub-category-mode"); // grab a reference to your element
// element.addEventListener('click', clickHandler);
