<script>
    const left = document.getElementById('left')
    const right = document.getElementById('right')
    const slider_images = document.querySelector('.slider_images')
    const slider_thumbs = document.querySelector('.slider_thumbs')
    const slider_container = document.querySelector('.slider_container')
    // let width = slider_container.getBoundingClientRect().width
    // let images = slider_images.querySelectorAll('img')
    // scale_images(images, width)
    slider_thumbs.innerHTML = slider_images.innerHTML

    let thumbsImg = slider_thumbs.querySelectorAll('img')
    let imgLength = slider_images.querySelectorAll('img').length - 1



    let pos = 0
    let width = 400

    function move(direction) {
        if (direction == 'left') {
            pos += 1

        }
        if (direction == 'right') {
            pos -= 1

        }
        if (pos < -imgLength) {
            pos = 0
        }
        if (pos > 0) {
            pos = -imgLength
        }

        let translate = (width * pos) + 'px'
        slider_images.style.transform = `translateX(${translate})`

    }

    left.addEventListener('click', () => move('left'))
    right.addEventListener('click', () => move('right'))

    slider_thumbs.addEventListener('click', thumb_clicked)

    function thumb_clicked(e) {

        for (let i = 0; i < thumbsImg.length; i++) {
            if (e.target == thumbsImg[i]) {
                pos = i * -1
                move()
                break
            }
        }
    }

    function scale_images(images, width) {
        for (let i = 0; i < images.length; i++) {
            images[i].style.width = width + 'px'
        }
    }
</script>

</html>