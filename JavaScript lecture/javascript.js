
/*document.write("This is written from Javascript");
document.getElementById("demo").innerHTML = "Hello World !";*/

var var1=13;
var var2="13";
let let1=20;
let let2="20";
const const1=200;
const const2="200";
console.log(var1,let1,const1)
console.log(typeof(var1),typeof(let1),typeof(const1))
console.log(var2,let2,const2)
console.log(typeof(var2),typeof(let2),typeof(const2))

var1=13+1;
let1=let1+20;
const1=const1+200;
console.log(var1,let1,const1)
console.log(typeof(var1),typeof(let1),typeof(const1))

/*const idname=document.getElementById("idname");
console.log(idname.innerHTML)
//the second tag <p>
const idname_p=idname.getElementsByTagName("p")
console.log(idname_p[1].innerHTML)
//classname
const classname=document.getElementsByClassName("classname")
console.log(classname[0].innerHTML)     //!!
//undefined
console.log(classname.innerHTML)
//
const tag_p=document.getElementsByTagName("p")
console.log(tag_p[3].innerHTML)*/

/*const idname=document.getElementById("idname").innerHTML
document.getElementById("idname").innerHTML="The best course is "+idname;*/

/*function onclick1(idname){
    idname.src="good.jfif"
}
function onmouseout1(idname){
    idname.src="nthu.jpg"
}*/

/*function changecolor(idname){
    idname.style.background="red";
}
function changeback(idname){
    idname.style.background="gray";
}*/

let times=0;
function click_times(element){
    times =times+1;
    element.innerHTML=times;
}