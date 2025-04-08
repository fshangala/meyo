document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".faq").forEach((faq) => {
    faq.querySelector(".faq-question").addEventListener("click", function () {
      const answer = faq.querySelector(".faq-answer");
      if (answer.style.height !== "fit-content") {
        answer.style.height = "fit-content";
      } else {
        answer.style.height = "0px";
      }
    },
    );
  });
});
