import { easeOutQuad } from '../helpers/Timing'

const ANIMATION_LENGTH = 450

export default class Rotator {
  #rotator
  #innerRotator
  #items
  #currItem
  #nextItem
  #index = 0
  #slideStart
  #height

  constructor(rotator, items = []) {
    this.#rotator = rotator
    this.#innerRotator = rotator.querySelector('.rotator__inner')
    this.#items = items
    this.#nextItem = document.createElement('div')
    this.#currItem = document.createElement('div')

    this.init()
  }

  init = () => {
    this.#innerRotator.appendChild(this.#currItem)
    this.#innerRotator.appendChild(this.#nextItem)
    this.reset()

    setTimeout(this.next, 2500)
    window.addEventListener('resize', this.reset)
  }

  reset = () => {
    this.#index = 0
    this.#currItem.innerText = this.#items[this.#index]
    this.#nextItem.innerText = ''
    this.setDimensions()
  }

  setDimensions = () => {
    this.#rotator.style.width = this.#rotator.style.height = 'auto'
    requestAnimationFrame(() => {
      const dimensions = this.#currItem.getBoundingClientRect()
      this.#height = dimensions.height
      this.#rotator.style.width = dimensions.width + 'px'
      this.#rotator.style.height = this.#height + 'px'
    })
  }

  next = () => {
    this.#index = (this.#index + 1) % this.#items.length
    this.#nextItem.innerText = this.#items[this.#index]
    this.#slideStart = performance.now()
    requestAnimationFrame(this.slide)
  }

  slide = t => {
    const fraction = (t - this.#slideStart) / ANIMATION_LENGTH
    const progress = easeOutQuad(fraction)

    this.#innerRotator.style.transform = `translateY(${progress * -this.#height}px)`
    if (fraction < 1) {
      requestAnimationFrame(this.slide)
    } else {
      this.handleAnimationEnd()
    }
  }

  handleAnimationEnd = () => {
    this.#currItem.innerText = this.#nextItem.innerText
    this.#innerRotator.style.transform = 'translateY(0px)'

    setTimeout(this.next, 2500)
  }

}
