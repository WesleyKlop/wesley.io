export default class ThemeToggle {
  #element
  #root
  #icon

  constructor(element) {
    this.#element = element
    this.#root = document.querySelector(':root')
    this.#icon = element.firstElementChild

    this.setupListeners()
  }

  static initAll = () => [...document.querySelectorAll('.theme-toggle')].map(el => new ThemeToggle(el))

  setupListeners = () => {
    this.#element.addEventListener('click', this.toggle)
    const mql = window.matchMedia('(prefers-color-scheme: dark)')
    this.setTheme(mql.matches)

    mql.addEventListener('change', res => this.setTheme(res.matches))
  }

  setTheme = (dark = false) => {
    if (dark === true) {
      this.#root.classList.remove('light-theme')
      this.#root.classList.add('dark-theme')
      this.#icon.classList.replace('fa-moon', 'fa-sun')
    } else {
      this.#root.classList.remove('dark-theme')
      this.#root.classList.add('light-theme')
      this.#icon.classList.replace('fa-sun', 'fa-moon')
    }
  }

  toggle = () => {
    console.log('toggle')
    this.setTheme(this.#root.classList.contains('light-theme'))
  }
}
