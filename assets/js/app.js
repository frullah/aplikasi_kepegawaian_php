document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-selected]').forEach(e => {
    e.querySelector(`option[value=${e.dataset.selected}]`)
      ?.setAttribute('selected', true)
  })
})
