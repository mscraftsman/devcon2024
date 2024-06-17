let agendaPage = document.getElementsByClassName("page--agenda");

if (agendaPage.length == 1) {

  let header = document.getElementById("rooms-bar");
  let sticky = header.getBoundingClientRect().top + document.documentElement.scrollTop;

  function affixedRooms() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }


  let container = document.querySelector('.sessions__column');
  let fixedElements = document.querySelectorAll('.time__tag');
  let scrollLeft = '';

  container.addEventListener('scroll', function () {
     scrollLeft = container.scrollLeft;

    fixedElements.forEach(function(fixedElement) {
      fixedElement.style.transform = 'translateX(' + scrollLeft + 'px) translateY(-30px)';
    });

    if (window.pageYOffset > sticky) {
      header.style.transform = 'translateX(' + -scrollLeft + 'px)';
    } else {
      header.style.transform = 'none';
    }
  });

  window.addEventListener('scroll', function () {
    affixedRooms();

    if (window.pageYOffset > sticky) {
      header.style.transform = 'translateX(' + -scrollLeft + 'px)';
    } else {
      header.style.transform = 'none';
    }
  });
}