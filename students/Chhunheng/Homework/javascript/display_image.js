 //For slide 1
document.getElementById("s1").style.display = "block";
var sliders1 = document.getElementsByClassName("slide");
var current1 = 0;

setInterval(runSlide1,5000);
function runSlide1(){
    if(current1 == sliders1.length-1){
        current1 = 0;
    }else{
        current1 +=1;
    }
    showSlide1(sliders1[current1]);
}



function showSlide1(currentSlide){
    for(var i = 0;i<sliders1.length ;i++){
        if(sliders1[i] == currentSlide){
          sliders1[i].style.display = "block";
          
        }else{
          sliders1[i].style.display = "none";
          
        }
    }
}
//For slide 2
document.getElementById("n1").style.display = "block";
var sliders2 = document.getElementsByClassName("slide2");
var current2 = 0;

setInterval(runSlidea,5000);
function runSlidea(){
    if(current2 == sliders2.length-1){
        current2 = 0;
    }else{
        current2 +=1;
    }
    showSlidea(sliders2[current2]);
}



function showSlidea(currentSlide){
    for(var i = 0;i<sliders2.length ;i++){
        if(sliders2[i] == currentSlide){
          sliders2[i].style.display = "block";
          
        }else{
          sliders2[i].style.display = "none";
          
        }
    }
}
// //For slide 3
// document.getElementById("m1").style.display = "block";
// var sliders3 = document.getElementsByClassName("slide3");
// var current3 = 0;

// setInterval(runSlideb,5000);
// function runSlideb(){
//     if(current3 == sliders3.length-1){
//         current3 = 0;
//     }else{
//         current3 +=1;
//     }
//     showSlideb(sliders3[current3]);
// }



// function showSlideb(currentSlide){
//     for(var i = 0;i<sliders3.length ;i++){
//         if(sliders3[i] == currentSlide){
//           sliders3[i].style.display = "block";
          
//         }else{
//           sliders3[i].style.display = "none";
          
//         }
//     }
// }

// //For slide 4
    
    
//     setInterval(changeImage,3000);
// function changeImage(){
    
//     var sliders = document.getElementsByClassName("slide4");

//     for( var i=0;i<sliders.length()-1;i++){
//         sliders[i].style.display="block";
//     }
    
//     for(var i=1;i<=sliders.length() ;i++){
//         if(i==1){
//             document.getElementById("s1").innerHTML=sliders[1];
//             document.getElementById("s2").innerHTML=sliders[2];
//             document.getElementById("s3").innerHTML=sliders[0];
//         }
   
//         else if (i==2){
//             document.getElementById("s1").innerHTML=sliders[2];
//             document.getElementById("s2").innerHTML=sliders[0];
//             document.getElementById("s3").innerHTML=sliders[1];
//         }
//         else{
//             document.getElementById("s1").innerHTML=sliders[0];
//             document.getElementById("s2").innerHTML=sliders[1];
//             document.getElementById("s3").innerHTML=sliders[2];
//         }

//     }

// }
   


