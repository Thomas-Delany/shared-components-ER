// Dark mode with default light mode
const storedTheme = localStorage.getItem("theme");

const getPreferredTheme = () => {
  // If there is a stored theme; return it
  if (storedTheme) {
    return storedTheme;
  }

  // Default to light mode if no theme is stored
  return "light";
};

const setTheme = function (theme) {
  document.documentElement.setAttribute("data-bs-theme", theme);
};

setTheme(getPreferredTheme());

window.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.querySelector(".theme-toggle-button");
  if (toggleButton) {
    toggleButton.addEventListener("click", () => {
      let currentTheme = document.documentElement.getAttribute("data-bs-theme");
      let newTheme = currentTheme === "light" ? "dark" : "light";
      localStorage.setItem("theme", newTheme);
      setTheme(newTheme);
    });
  }
});
