//FEATURED HOVER
$(document).ready(function(){
      $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );

    const menuFive = document.querySelector('.pincode-mobil-menu');
    function addClassFunFive() {
        this.classList.toggle("pincode-mobil-menu-click");
    }
    menuFive.addEventListener('click', addClassFunFive);
});
