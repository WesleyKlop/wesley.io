export default class ProjectsItem {
  #element

  constructor(element) {
    this.#element = element
    this.init()
  }

  static initAll = () =>
    [...document.querySelectorAll('.projects-item')].map(
      (el) => new ProjectsItem(el),
    )

  init = () => {
    this.#element.addEventListener('click', (e) => {
      e.preventDefault()
      this.#element.classList.toggle('rotated')
    })
  }
}
