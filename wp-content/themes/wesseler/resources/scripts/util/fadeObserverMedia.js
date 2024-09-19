function mediaTextObserver() {
  let contentTops;
  let contentBottoms;

// Set things up
  window.addEventListener(
    "load",
    (event) => {
      contentTops = document.querySelectorAll("#media_text .content-top ");
      contentBottoms = document.querySelectorAll("#media_text .content-bottom ");

      createObserver();
    },
    false,
  );

  function createObserver() {
    let observer;

    let options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5,
    };

    observer = new IntersectionObserver(handleIntersect, options);
    contentTops.forEach(el => {
      observer.observe(el);
    });
    contentBottoms.forEach(el => {
      observer.observe(el);
    });
  }

  function handleIntersect(entries, observer) {
    entries.forEach(entry => {

      if (entry.intersectionRatio > 0) {

        if (entry.target.classList.contains('content-bottom')) {
          setTimeout(() => {
            entry.target.classList.remove('opacity-0');
            entry.target.classList.add('animate-fade');
          }, 1200);
        }
        else {
          entry.target.classList.remove('opacity-0');
          entry.target.classList.add('animate-fade');
        }
      }

      if (!entry.isIntersecting) {
        entry.target.classList.add('opacity-0');
        entry.target.classList.remove('animate-fade');
      }
    });
  }
}

export {mediaTextObserver};
