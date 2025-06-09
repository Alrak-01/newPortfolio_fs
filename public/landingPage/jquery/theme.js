 let status = false;

  function test() {
    const html = document.querySelector("html");

    if (status == false) {
      html.classList.remove("dark");
      document.getElementById("theme-icon").classList.remove("fa-sun");
      document.getElementById("theme-icon").classList.add("fa-moon");
      status = true;
    } else {
      html.classList.add("dark");
      document.getElementById("theme-icon").classList.remove("fa-moon");
      document.getElementById("theme-icon").classList.add("fa-sun");
      status = false;
    }
  }