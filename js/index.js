window.addEventListener("load", function(e){

    var container = document.querySelector(".bg-modal");
    
    document.addEventListener("click", function(e) {
      var click = e.target;
      if (click == container) {
        document.querySelector(".bg-modal").style.display = "none";
      }
    });

    document.querySelector('#login').addEventListener('click', function(e){
        document.querySelector('.bg-modal').style.display = 'flex';
    });

    document.querySelector('#close').addEventListener('click', function(){
        document.querySelector('.bg-modal').style.display = 'none';
    });

 
});
