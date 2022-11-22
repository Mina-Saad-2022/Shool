 $(document).ready(function()
{
    console.log($('.menu-is-opening'))
    $("#teacher").click(function(){
       // $(".teacher").slideDown()
    })
    // $("#teacher").click(function(){
    //     $(".teacher").addClass("test_2")
    // })
    //
    // $("#teacher").click(function(){
    //     $(".teacher").removeClass("test")
    // })
})


// nav = document.querySelector("nav-treeview").querySelectorAll("a");
// console.log('hello world');
// nav.forEach(element=>{
//     element.addEventListener('click',function (){
//         nav.forEach(nav=>nav.classList.remove('test_2'))
//         this.classList.add('test_2');
//     })
// })

console.log(document.getElementById('myBtn'))


 document.getElementById("myBtn").addEventListener("click", function() {
     console.log(
         document.querySelectorAll('.menu-open').length
     );
 });



 // console.log("Hello World!");
