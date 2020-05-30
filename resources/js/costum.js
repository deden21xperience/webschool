import counterUp from 'counterup2'
require('waypoints/lib/noframework.waypoints')
const el = document.querySelector('.counter')
// console.log(el);
// Start counting, do this on DOM ready or with Waypoints.
// counterUp(el, {
//   duration: 2000,
//   delay: 26,
// })
const card_panel = document.getElementById('card-panel')
new Waypoint({
  element: el,
  handler: function () {
    // card_panel.classList.toggle("slide-in-left"),
    counterUp(el, {
      duration: 2000,
      delay: 26
    })
    // console.log('tes')
    this.destroy()
  },
  offset: 'bottom-in-view'
})
