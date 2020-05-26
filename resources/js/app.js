// Map items to year => element
import Rotator from './components/Rotator'

const timelineItems = [...document.querySelectorAll('.timeline__item')].reduce(
    (acc, curr) => ({ ...acc, [curr.dataset.year]: curr }),
    {},
)
const timelineButtons = [
    ...document.querySelectorAll('.timeline__button'),
].reduce((acc, curr) => ({ ...acc, [curr.dataset.year]: curr }), {})

Object.values(timelineButtons).forEach((el) =>
    el.addEventListener('click', (event) => {
        event.preventDefault()
        const { year } = event.currentTarget.dataset
        // Remove active from all other timeline item buttons
        Object.values(timelineButtons).forEach((el) =>
            el.classList.remove('active'),
        )
        Object.values(timelineItems).forEach((el) =>
            el.classList.remove('visible'),
        )

        // Add active/visible to selected link and item
        timelineButtons[year].classList.add('active')
        timelineItems[year].classList.add('visible')
    }),
)

new Rotator(document.querySelector('.rotator'), [
    'software developer',
    'student',
    'frontender',
    'nerd',
])
