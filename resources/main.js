/* JavaScript for the Example skin */

(function() {
  let parent = $('.index-page div.mw-parser-output')
  let old_children = parent.children()
  let newNode = document.createElement('div')
  let state = 'none'
  let current = null
  for (let child of old_children) {
    if (child.nodeName == 'DIV') continue;
    if (state == 'none' && (child.nodeName == 'H1' || child.nodeName == 'H2')) {
      if (current != null)
        newNode.appendChild(current)
      current = document.createElement('div')
      current.setAttribute('class', 'category-block-' + child.nodeName)
      current.appendChild(child)
    } else if (current != null) {
      current.appendChild(child)
    }
  }
  newNode.appendChild(current)
  parent.html(newNode)
  $('.category-block-H2').click(function(event) {
    let el = $(event.currentTarget)
    if (el.hasClass('expand'))
      el.removeClass('expand')
    else
      el.addClass('expand')
  })
})()