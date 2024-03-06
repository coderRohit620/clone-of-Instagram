var like1=document.getElementById('red-1')
var like2=document.getElementById('red-2')
var like3=document.getElementById('red-3')
var like4=document.getElementById('red-4')
 function toggle1()
 {
    if(like1.style.color=="red"){
        like1.style.color="white"
    }
    else{
        like1.style.color = "red"
    }
 }
 function toggle2()
 {
    if(like2.style.color=="red"){
        like2.style.color="white"
    }
    else{
        like2.style.color = "red"
    }
 }
 function toggle3()
 {
    if(like3.style.color=="red"){
        like3.style.color="white"
    }
    else{
        like3.style.color = "red"
    }
 }
 function toggle4()
 {
    if(like4.style.color=="red"){
        like4.style.color="white"
    }
    else{
        like4.style.color = "red"
    }
 }
 var sha1=document.getElementById('save-1')
 var sha2=document.getElementById('save-2')
 var sha3=document.getElementById('save-3')
 var sha4=document.getElementById('save-4')
 function save1(){
    if(sha1.style.color=="blue")
    sha1.style.color = "white"
   
    else{
        sha1.style.color="blue"
       
    }
 }
 function save2(){
    if(sha2.style.color=="blue")
    sha2.style.color = "white"
   
    else{
        sha2.style.color="blue"
       
    }
 }
 function save3(){
    if(sha3.style.color=="blue")
    sha3.style.color = "white"
   
    else{
        sha3.style.color="blue"
       
    }
 }
 function save4(){
    if(sha4.style.color=="blue")
    sha4.style.color = "white"
   
    else{
        sha4.style.color="blue"
       
    }
 
 }
 const photo = document.getElementById('photo');
const heartPopup = document.getElementById('heart-popup');

photo.addEventListener('dblclick', () => {
    heartPopup.style.display = 'block';

    setTimeout(() => {
        heartPopup.style.display = 'none';
    }, 1000); // Hide the popup after 1 second
});

const firstpic=document.getElementById('firstpic');
const heartpic =document.getElementById('heartpic');
firstpic.addEventListener('dblclick',()=>{
    heartpic.style.display='block';
    setTimeout(()=>{
        heartpic.style.display='none';
    },1000)
});